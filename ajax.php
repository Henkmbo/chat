<?php
include 'Database.php';

header('Content-Type: application/json');
$decodedParams = json_decode(file_get_contents('php://input'));
$response = [
    'status' => 404,
    'message' => 'Unknown error occurred!'
];


if (isset($decodedParams->scope) && !empty($decodedParams->scope)) {
    if ($decodedParams->scope == 'users') {
        if (isset($decodedParams->action) && !empty($decodedParams->action)) {
            if ($decodedParams->action == 'getUsers') {
                $stmt = $dbh->prepare("SELECT users.userId, users.userFirstname, users.userEmail, users.userCreatedate, MAX(chat.sent) AS lastSent 
                FROM users 
                LEFT JOIN fapgar_1_chat AS chat ON users.userId = chat.from OR users.userId = chat.to 
                WHERE users.userId != :userId
                GROUP BY users.userId 
                ORDER BY lastSent DESC");
                session_start();
                $userId = $_SESSION['user']['userId'];
                session_write_close();
                $stmt->bindParam(':userId', $userId);
                $stmt->execute();
                $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($users) {
                    $response['status'] = 200;
                    $response['message'] = 'Users fetched successfully';
                    $response['data'] = $users;
                    $response['userId'] = $userId;
                } else {
                    $response['status'] = 500;
                    $response['message'] = 'Error fetching users';
                }
            } else {
                $response['status'] = 404;
                $response['message'] = 'Unknown action for users scope';
            }
        } else {
            $response['status'] = 404;
            $response['message'] = 'Action not provided for users scope';
        }
    }
    if ($decodedParams->scope == 'messages') {
        if ($decodedParams->action == 'sendMessage') {
            if (isset($decodedParams->message)) {
                $timestamp = time();
                $datetime = date("Y-m-d H:i:s", $timestamp);
                $message = $decodedParams->message;
                $receiver = $decodedParams->receiver;
                session_start();
                $sender = $_SESSION['user']['userId'];
                session_write_close();
                $stmt = $dbh->prepare("INSERT INTO fapgar_1_chat (`id`, `from`, `to`, `message`, `sent`, `timestamp`) 
                VALUES (NULL, :from, :to, :message, :sent, :timestamp)");
                $stmt->bindParam(':from', $sender);
                $stmt->bindParam(':to', $receiver);
                $stmt->bindParam(':message', $message);
                $stmt->bindParam(':sent', $datetime);
                $stmt->bindParam(':timestamp', $timestamp);

                if ($stmt->execute()) {
                    $response['status'] = 200;
                    $response['message'] = 'Message successfully uploaded to db';
                } else {
                    $response['status'] = 500;
                    $response['message'] = 'Error uploading message to db';
                }
            } else {
                $response['status'] = 400;
                $response['message'] = 'Missing message parameter';
            }
        } else if ($decodedParams->action == 'getMessages') {
            if (isset($decodedParams->sender) && isset($decodedParams->receiver)) {
                $sender = $decodedParams->sender;
                $receiver = $decodedParams->receiver;
                $limit = $decodedParams->limit;
                $messages = [];
                $sql = "SELECT id, `from`, `to`, message, sent, recd, timestamp
                FROM fapgar_1_chat 
                WHERE (`from` = :from AND `to` = :to) OR (`from` = :to AND `to` = :from) 
                ORDER BY `timestamp` ASC";
        
                      
                if ($limit) {
                    $sql .= " LIMIT $limit";
                }
        
                $stmt = $dbh->prepare($sql);
                $stmt->bindParam(':from', $sender);
                $stmt->bindParam(':to', $receiver);
                $stmt->execute();
                $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                $nums = count($messages);
        
                if ($messages) {
                    $response['status'] = 200;
                    $response['message'] = 'Messages fetched successfully';
                    $response['data'] = $messages;
                    $response['nums'] = $nums;
                } else {
                    $response['status'] = 404;
                    $response['message'] = 'No messages found';
                }
            }
            else {
                $response['status'] = 400;
                $response['message'] = 'Missing from or to parameter';
            }
        } elseif ($decodedParams->action == 'getAllLatestMessages') {
            session_start();
            $userId = $_SESSION['user']['userId'];
            session_write_close();
            $allChatUsers = [];
            $sql  = "SELECT users.userId, users.userFirstname, users.userEmail, users.userCreatedate, MAX(chat.sent) AS lastSent 
                FROM users 
                INNER JOIN fapgar_1_chat AS chat ON users.userId = chat.from OR users.userId = chat.to 
                WHERE users.userId != :userId";
            if ($_SESSION['user']['userStatus'] == 0) {
                $sql .= " AND users.userStatus = 1";
            }
            $sql .= " GROUP BY users.userId
                ORDER BY lastSent DESC ";
            $stmt = $dbh->prepare($sql);
            $stmt->bindParam(':userId', $userId);
            $stmt->execute();
            $allChatUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($allChatUsers)) {
                foreach ($allChatUsers as $chatUser) {
                    $stmt = $dbh->prepare(('SELECT id, `from`, `to`, message, sent, recd, timestamp 
                                       FROM fapgar_1_chat 
                                       WHERE (`from` = :from AND `to` = :to) OR (`from` = :to AND `to` = :from) 
                                         ORDER BY `timestamp` DESC LIMIT 1'));
                    $stmt->bindParam(':from', $userId);
                    $stmt->bindParam(':to', $chatUser['userId']);
                    $stmt->execute();
                    $lastestMessage = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($lastestMessage !== false) {
                        $allLatestMessages[$chatUser['userId']] = $lastestMessage;
                    }
                }

                $response['status'] = 200;
                $response['message'] = 'Latest messages fetched successfully';
                $response['data'] = $allLatestMessages ?? NULL;
                $response['allChatUsers'] = $allChatUsers;
                $response['userId'] = $userId;
            } else {
                $response['status'] = 400;
                $response['message'] = 'Missing from or to parameter';
            }
        } else if ($decodedParams->action == 'getNewMessages') {
            if (isset($decodedParams->sender)) {
                $sender = $decodedParams->sender;
                $stmt = $dbh->prepare("SELECT users.userId, users.userFirstname, users.userEmail, users.userCreatedate, 
                                            MAX(chat.sent) AS lastSent,
                                            COUNT(CASE WHEN chat.recd = 1 AND `from` != :userid2 THEN 1 ELSE NULL END) AS unreadMessages
                                        FROM users 
                                        INNER JOIN fapgar_1_chat AS chat ON users.userId = chat.from OR users.userId = chat.to 
                                        WHERE users.userId != :userId
                                        GROUP BY users.userId 
                                        ORDER BY lastSent DESC");

                $stmt->bindParam(':userId', $sender);
                $stmt->bindParam(':userid2', $sender);
                $stmt->execute();
                $messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
                if ($messages) {
                    $response['status'] = 200;
                    $response['message'] = 'Unread messages fetched successfully';
                    $response['data'] = $messages;
                } else {
                    $response['status'] = 404;
                    $response['message'] = 'No unread messages found';
                }
            } else {
                $response['status'] = 400;
                $response['message'] = 'Missing to parameter';
            }
        } else if ($decodedParams->action == 'getAdmin') {
            $stmt = $dbh->prepare("SELECT userId, userFirstname, userEmail, userStatus, userCreatedate FROM users WHERE userStatus = 1");
            $stmt->execute();
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($admin) {
                $response['status'] = 200;
                $response['message'] = 'Admin fetched successfully';
                $response['data'] = $admin;
            } else {
                $response['status'] = 404;
                $response['message'] = 'No unread messages count found';
            }
        } else {
            $response['status'] = 400;
            $response['message'] = 'Missing to parameter';
        }
    }
    if ($decodedParams->action == 'register') {
        if (isset($decodedParams->userFirstname) && isset($decodedParams->userEmail) && isset($decodedParams->userPassword)) {
            $userFirstname = $decodedParams->userFirstname;
            $userEmail = $decodedParams->userEmail;
            $userPassword = $decodedParams->userPassword;
            $timestamp = time();

            if (isEmailExists($userEmail, $dbh)) {
                $response['status'] = 400;
                $response['message'] = 'Email already exists';
            } else {
                $stmt = $dbh->prepare("INSERT INTO users (userFirstname, userEmail, userPassword, userCreatedate) 
                    VALUES (:userFirstname, :userEmail, :userPassword, :userCreateDate)");
                $stmt->bindParam(':userFirstname', $userFirstname);
                $stmt->bindParam(':userEmail', $userEmail);
                $stmt->bindParam(':userPassword', $userPassword);
                $stmt->bindParam(':userCreateDate', $timestamp);
                $stmt->execute();

                $stmt = $dbh->prepare("SELECT userId, userFirstname, userEmail, userPassword, userCreatedate FROM users WHERE userEmail = :userEmail");
                $stmt->bindParam(':userEmail', $userEmail);
                $stmt->execute();
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    session_start();
                    $_SESSION['user'] = $user;
                    session_write_close();
                    $response['status'] = 200;
                    $response['message'] = 'User registered successfully';
                } else {
                    $response['status'] = 500;
                    $response['message'] = 'Error registering user';
                }
            }
        } else {
            $response['status'] = 400;
            $response['message'] = 'Missing user data';
        }
    }
    if ($decodedParams->action == 'login') {
        if (isset($decodedParams->userEmail) && isset($decodedParams->userPassword)) {
            $userEmail = $decodedParams->userEmail;
            $userPassword = $decodedParams->userPassword;

            $stmt = $dbh->prepare("SELECT userId, userFirstname, userEmail, userPassword, userStatus, userCreatedate FROM users WHERE userEmail = :userEmail AND userPassword = :userPassword");
            $stmt->bindParam(':userEmail', $userEmail);
            $stmt->bindParam(':userPassword', $userPassword);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                session_write_close();
                $response['status'] = 200;
                $response['message'] = 'User logged in successfully';
                $response['data'] = $user;
            } else {
                $response['status'] = 400;
                $response['message'] = 'Invalid email or password';
            }
        } else {
            $response['status'] = 400;
            $response['message'] = 'Missing email or password';
        }
    }
    if ($decodedParams->action == 'setAdmin') {
        if (isset($decodedParams->userEmail)) {
            $userEmail = $decodedParams->userEmail;
            $stmt = $dbh->prepare("UPDATE users SET userStatus = 1 WHERE userEmail = :userEmail");
            $stmt->bindParam(':userEmail', $userEmail);
            $stmt->execute();
            $response['status'] = 200;
            $response['message'] = 'User set as admin successfully';
        } else {
            $response['status'] = 400;
            $response['message'] = 'Missing userId parameter';
        }
    }
    if ($decodedParams->scope == 'checkMessage') {
        if (isset($decodedParams->action) && !empty($decodedParams->action)) {
            if ($decodedParams->action == 'receiveMessage') {
                if (isset($decodedParams->sender)) {
                    $sender = $decodedParams->sender;
                    $stmt = $dbh->prepare("SELECT id FROM fapgar_1_chat WHERE `to` = :from AND `recd` = 0");
                    $stmt->bindParam(':from', $sender);
                    $stmt->execute();
                    $messagesReceived = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($messagesReceived as $messageReceived) {
                        $stmt = $dbh->prepare("UPDATE fapgar_1_chat SET `recd` = 1 WHERE `id` = :id");
                        $stmt->bindParam(':id', $messageReceived['id']);
                        $stmt->execute();
                    }
                    $response['status'] = 200;
                    $response['message'] = 'Message received successfully';
                    $response['data'] = $messagesReceived;
                } else {
                    $response['status'] = 400;
                    $response['message'] = 'Missing from or to parameter';
                }
            } elseif ($decodedParams->action == 'seenMessage') {
                if (isset($decodedParams->sender)) {
                    $sender = $decodedParams->sender;
                    $stmt = $dbh->prepare("SELECT id FROM fapgar_1_chat WHERE `to` = :from AND `recd` = 1");
                    $stmt->bindParam(':from', $sender);
                    $stmt->execute();
                    $messagesSeen = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($messagesSeen as $messageSeen) {
                        $stmt = $dbh->prepare("UPDATE fapgar_1_chat SET `recd` = 2 WHERE `id` = :id");
                        $stmt->bindParam(':id', $messageSeen['id']);
                        $stmt->execute();
                    }
                    $response['status'] = 200;
                    $response['message'] = 'Message seen successfully';
                    $response['data'] = $messagesSeen;
                } else {
                    $response['status'] = 400;
                    $response['message'] = 'Missing from parameter';
                }
            }
        } else {
            $response['status'] = 400;
            $response['message'] = 'Missing action parameter';
        }
    }
}



echo json_encode($response);
exit;
