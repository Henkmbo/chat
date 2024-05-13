const SYSTEM_ADDRESS = document.currentScript.getAttribute("SYSTEM_ADDRESS");

let heartBeatStatus = "offline"; // Define a variable to store the status of the heartbeat
localStorage.setItem("heartBeat", heartBeatStatus); // Store the initial value in localStorage
var currentURL = window.location.href;
// Split the URL by "/"
var parts = currentURL.split("/");
// Find the index of "chat"
var chatIndex = parts.indexOf("chat");
// Get the part after "chat/"
var id = parts[chatIndex + 1];
// Check if there's something after "chat/"
if (id !== "" && id !== undefined && id !== "settings" && id !== null) {
  var userId = id;
  receiveMessage();
if(localStorage.getItem('admin') === 'false'){
    userHeartBeat(userId);
  }
}

(async () => {
  if (id !== undefined && id !== "") {
    if (id === "settings") {
      document.querySelector("#tab-settings").click();
    } else {
      var checkDrawMessages = await drawMessages(id);
      if (checkDrawMessages === false) {
        document.querySelector(".main").classList.remove("d-none");
        document.querySelector(".main.is-visible").classList.add("d-none");
        window.history.pushState("null", "null", "/chat/");
      }
    }
  } else {
    // Handle the case when id is undefined or empty
  }
})();

const saveBtnSettings = document.querySelector(".saveBtn"); // Select the save button element
saveBtnSettings.addEventListener("click", function () {
  // Add event listener for click event
  const amountOfChosenMessages = document.querySelector(".chatAmount").value; // Get the value of the input field
  localStorage.setItem("chatLength", amountOfChosenMessages); // Save the value to localStorage with key "chatLength"

  const receiver = id; // Provide the receiver's ID here
  drawMessages(receiver);
});

let heartBeatSeconds = 86400000; // Default interval time
localStorage.setItem("heartBeatSec", heartBeatSeconds);

let messageHeartBeat = setInterval(function () {
  console.log(1);
  drawMessages(userId);
}, heartBeatSeconds);

function changeHartBeat(status) {
  var selectedRadioButton = document.getElementById(status);
  selectedRadioButton.checked = true;
  var selectedHartBeat = selectedRadioButton.value;
  heartBeatStatus = selectedHartBeat;
  localStorage.setItem("heartBeat", selectedHartBeat);
  if (selectedHartBeat === "offline") {
    heartBeatSeconds = 2629746 ;
  } else if (selectedHartBeat === "online") {
    heartBeatSeconds = 5000;
  } else if (selectedHartBeat === "away") {
    heartBeatSeconds = 120000;
  }
  localStorage.setItem("heartBeatSec", heartBeatSeconds);

  setHeartbeatInterval();
}

function setHeartbeatInterval() {
  heartBeatSeconds = localStorage.getItem("heartBeatSec");
  clearInterval(messageHeartBeat);
  messageHeartBeat = setInterval(function () {
    console.log(2);
    drawMessages(userId);
  }, heartBeatSeconds);
}

const messageInput = document.querySelector(".js-chat-message-input");
const sendButton = document.querySelector(".sendBtn");
sendButton.addEventListener("click", function () {
  const message = messageInput.value.trim();
  event.preventDefault();
  if (message !== "") {
    const receiver = localStorage.getItem("receiver");
    sendMessage(message, receiver);
    messageInput.value = "";
  }
});
messageInput.addEventListener("keydown", function (event) {
  const message = messageInput.value.trim();
  if (message !== "") {
    if (event.key === "Enter") {
      event.preventDefault();
      const receiver = localStorage.getItem("receiver");
      sendMessage(message, receiver);
      messageInput.value = "";
    }
  }
});

async function sendMessage(message, receiver) {
  try {
    const call = await fetch(SYSTEM_ADDRESS + "ajax.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        scope: "messages",
        action: "sendMessage",
        message: message,
        receiver: receiver,
      }),
    });
    const response = await call.json();
    if (response.status === 200) {
      drawMessages(receiver);
    }
  } catch (error) {
    console.log(error);
  }
}

document.title = "Messenger";
const mobileClose = document.querySelector(".mobileClose");

mobileClose.addEventListener("click", function () {
  var main = document.querySelector(".main.is-visible");
  var start = document.querySelector(".main");
  main.classList.add("d-none");
  start.classList.remove("d-none");

  // Change the URL
  window.location.href = "https://localhost/chat/";
});

async function getUsers() {
  const isAdmin = localStorage.getItem("admin");
  if (isAdmin === "true") {
    document.querySelector(".isAdmin").textContent = "Admin";
  } else if (isAdmin === "false") {
    document.querySelector(".isAdmin").textContent = "User";
  }
  try {
    var allLatestMessages = await getAllLatestMessages();
    const sender = allLatestMessages.userId;
    localStorage.setItem("sender", sender);
    const cardList = document.querySelector(".card-list.userList");
    if (allLatestMessages && allLatestMessages.allChatUsers) {
      allLatestMessages.allChatUsers.forEach((user) => {
        const userElement = document.createElement("div");
        userElement.className =
          "user card border-0 text-reset js-user-card-" +
          user.userId +
          (user.userId === parseInt(id) ? " chatActive" : "");
        userElement.innerHTML = `
                    <div class="card-body">
                        <div class="row gx-5">
                            <div class="col-auto">
                                <div class="avatar avatar-online">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ut5ImIGij7xxSShxWk-uyCJbjkIdLYpTWNJTJTFnPA&s"
                                        alt="#" class="avatar-img">
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="me-auto mb-0">${
                                      user.userFirstname
                                    }</h5>
                                    <span class="text-muted extra-small ms-2 latest-message-time">
                                    ${
                                      allLatestMessages.data[user.userId] ===
                                      undefined
                                        ? ""
                                        : new Date(
                                            allLatestMessages.data[
                                              user.userId
                                            ].sent
                                          ).toLocaleTimeString([], {
                                            hour: "2-digit",
                                            minute: "2-digit",
                                          })
                                    }
                                    </span>
                                </div>
                                <div class="d-flex align-items-center">
                                <div class="line-clamp me-auto">
                                ${
                                  allLatestMessages.data[user.userId] ===
                                  undefined
                                    ? ""
                                    : allLatestMessages.data[user.userId]
                                        .message
                                }
                                </div> 
                                <div>
                                  <i class="fa-solid fa-check js-chat-check-marks js-chat-check-0" style="display:none"></i>
                                  <i class="fa-solid fa-check-double js-chat-check-marks js-chat-check-1" style="display:none"></i>
                                  <i class="fa-solid fa-check-double js-chat-check-marks js-chat-check-2" style="color:blue; display:none"></i>
                                  <div class="badge badge-circle bg-primary ms-5 d-none">
                                      <span class="amountOfNewMessages"></span>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>`;
        cardList.appendChild(userElement);
        userElement.addEventListener("click", async () => {
          var main = document.querySelector(".main.is-visible");
          var start = document.querySelector(".main");
          document.querySelectorAll(".user.card").forEach((element) => {
            element.classList.remove("chatActive");
          });
          const userId = user.userId;
          const newURL = `/chat/${userId}/`; // Construct the new URL
          window.history.pushState("null", "null", newURL); // Push the new URL to history
          const finalBody = document.querySelector(".finalBody");
          finalBody.innerHTML = "";
          userElement.classList.add("chatActive");

          main.classList.remove("d-none");
          start.classList.add("d-none");

          localStorage.setItem("receiver", userId);
          const chatName = document.querySelector(".chatName");
          chatName.textContent = user.userFirstname;
          await drawMessages(userId);
          if(localStorage.getItem('admin') === 'true'){
          setHeartbeatInterval();
        }
        else if(localStorage.getItem('admin') === 'false'){
          userHeartBeat(userId);
        }
        });
      });
      setInterval(async () => {
        var allLatestMessages = await getAllLatestMessages();
        if (allLatestMessages) {
          var allLatestMessages = allLatestMessages.data;
          // Get the keys of the object
          const messageKeys = Object.keys(allLatestMessages);
          // Iterate over the keys and log each message
          messageKeys.forEach((key) => {
            var userCard = document.querySelector(".js-user-card-" + key);
            if (userCard) {
              userCard.querySelector(".line-clamp").textContent =
                allLatestMessages[key].message;
              const sentTime = new Date(allLatestMessages[key].sent);
              const formattedTime = sentTime.toLocaleTimeString([], {
                hour: "2-digit",
                minute: "2-digit",
              });
              userCard.querySelector(".latest-message-time").textContent =
                formattedTime;

              const sender = localStorage.getItem("sender");
              if (allLatestMessages[key].from === sender) {
                const allChatCheckmarks = userCard.querySelectorAll(
                  ".js-chat-check-marks"
                );
                if (allChatCheckmarks) {
                  allChatCheckmarks.forEach((checkmark) => {
                    checkmark.style.display = "none";
                  });
                }

                const recd = allLatestMessages[key].recd;
                if (recd === 0) {
                  userCard.querySelector(".js-chat-check-0").style.display =
                    "block";
                } else if (recd === 1) {
                  userCard.querySelector(".js-chat-check-1").style.display =
                    "block";
                } else if (recd === 2) {
                  userCard.querySelector(".js-chat-check-2").style.display =
                    "block";
                }
              }
            }
          });
          const unReadMessages = await checkNewMessages();
          let allNewMessagesAmount = 0;
          unReadMessages.forEach((message) => {
            const userCard = document.querySelector(
              ".js-user-card-" + message.userId
            );
            if (userCard) {
              const amountOfNewMessages = userCard.querySelector(
                ".amountOfNewMessages"
              );
              if (amountOfNewMessages && message.unreadMessages > 0) {
                amountOfNewMessages.parentElement.classList.remove("d-none");
                amountOfNewMessages.textContent = message.unreadMessages;
                // Increment the total count of unread messages
                allNewMessagesAmount += message.unreadMessages;
              } else if (amountOfNewMessages && message.unreadMessages == 0) {
                amountOfNewMessages.parentElement.classList.add("d-none");
              }
            }
          });
          const newMessageAmountSideBar =
            document.querySelector(".newMessages");
          if (newMessageAmountSideBar) {
            if (allNewMessagesAmount > 0) {
              newMessageAmountSideBar.textContent = allNewMessagesAmount;
              newMessageAmountSideBar.parentElement.classList.remove("d-none");
            } else {
              newMessageAmountSideBar.innerHTML = 0;
            }
          }
        }
        receiveMessage();
        checkNewMessages();
      }, 5000);
    }
  } catch (error) {
    console.log(error);
  }
}

function userHeartBeat(userId) {
  setInterval(() => {
      drawMessages(userId);
  }, 5000);
}


async function checkNewMessages() {
  const sender = localStorage.getItem("sender");
  const call = await fetch(SYSTEM_ADDRESS + "ajax.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      scope: "messages",
      action: "getNewMessages",
      sender: sender,
    }),
  });
  const response = await call.json();
  if (response.status === 200) {
    const unReadMessages = response.data;
    return unReadMessages;
  } else {
    console.log("Error checking new messages:", response);
  }
}

function scrollLastMessageIntoView() {
  const finalBody = document.querySelector(".finalBody");
  const latestMessageDiv = finalBody.lastElementChild;
  if (latestMessageDiv !== null) {
    latestMessageDiv.scrollIntoView();
  }
}

async function drawMessages(receiver) {
  const limit = localStorage.getItem("chatLength") || 1000;
  var main = document.querySelector(".main.is-visible");
  var start = document.querySelector(".main");
  main.classList.remove("d-none");
  start.classList.add("d-none");
  const sender = localStorage.getItem("sender");
  try {
    const call = await fetch(SYSTEM_ADDRESS + "ajax.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        scope: "messages",
        action: "getMessages",
        sender: sender,
        receiver: receiver,
        limit: limit,
      }),
    });
    const response = await call.json();
    if (response.status === 200) {
      localStorage.setItem("totalMessages", response.nums);
      const chatBody = document.querySelector(".chat-body");
      const chatBodyInner = document.querySelector(".chat-body-inner");
      const finalBody = document.querySelector(".finalBody");
      finalBody.innerHTML = "";
      response.data.forEach((data) => {
        const sentTime = new Date(data.sent);
        const formattedTime = sentTime.toLocaleTimeString([], {
          hour: "2-digit",
          minute: "2-digit",
        });
        const message = document.createElement("div");
        if (data.from == sender) {
          message.classList.add("message,message-out");
          message.innerHTML = `
              <div class="message message-out">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                  <img class="avatar-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ut5ImIGij7xxSShxWk-uyCJbjkIdLYpTWNJTJTFnPA&s" alt="">
                </a>
                <div class="message-inner">
                  <div class="message-body">
                    <div class="message-content">
                      <div class="message-text">
                        <p>${data.message}</p>
                      </div>          
                    </div>
                  </div>
                  <div class="message-footer">
                    <span class="extra-small text-muted">${formattedTime}</span>
                  </div>
                </div>
              </div>`;
        } else if (data.from == receiver) {
          message.innerHTML = `
              <div class="message">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                  <img class="avatar-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7ut5ImIGij7xxSShxWk-uyCJbjkIdLYpTWNJTJTFnPA&s" alt="">
                </a>
                <div class="message-inner">
                  <div class="message-body">
                    <div class="message-content">
                      <div class="message-text">
                        <p>${data.message}</p>
                      </div>        
                    </div>
                  </div>
                  <div class="message-footer">
                    <span class="extra-small text-muted">${formattedTime}</span>
                  </div>
                </div>
              </div>`;
        }
        finalBody.appendChild(message);
      });
      chatBody.appendChild(chatBodyInner);
      chatBodyInner.appendChild(finalBody);
      scrollLastMessageIntoView();
    } else if (response.status === 404) {
      const finalBody = document.querySelector(".finalBody");
      finalBody.innerHTML = "";
      const noMessages = document.createElement("div");
      noMessages.className = "noMessages";
      noMessages.textContent = "No messages yet";
      finalBody.appendChild(noMessages);
      return false;
    }
    seenMessage();
  } catch (error) {
    console.log(error);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const chatAmountInput = document.querySelector(".chatAmount");
  chatAmountInput.value = localStorage.getItem("totalMessages");
});

async function getAllLatestMessages() {
  const sender = localStorage.getItem("sender");
  const receiver = localStorage.getItem("receiver");
  try {
    const call = await fetch(SYSTEM_ADDRESS + "ajax.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        scope: "messages",
        action: "getAllLatestMessages",
        sender: sender,
        receiver: receiver,
      }),
    });
    const response = await call.json();
    if (response.status === 200) {
      return response;
    }
  } catch (error) {
    console.log(error);
  }
}

async function receiveMessage() {
  const sender = localStorage.getItem("sender");
  const call = await fetch(SYSTEM_ADDRESS + "ajax.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      scope: "checkMessage",
      action: "receiveMessage",
      sender: sender,
    }),
  });
  const response = await call.json();
  if (response.status === 200) {
  } else {
    // console.log("Error receiving message:", response);
  }
}
function changeToSettings() {
  const newURL = `${SYSTEM_ADDRESS}chat/settings/`; // Construct the new URL
  window.history.pushState("null", "null", newURL); // Push the new URL to history
}
function changeToChats() {
  const newURL = `${SYSTEM_ADDRESS}chat/`; // Construct the new URL
  window.history.pushState("null", "null", newURL); // Push the new URL to history
}

async function seenMessage() {
  const sender = localStorage.getItem("sender");
  const call = await fetch(SYSTEM_ADDRESS + "ajax.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      scope: "checkMessage",
      action: "seenMessage",
      sender: sender,
    }),
  });
  const response = await call.json();
  if (response.status === 200) {
  } else {
    console.log("Error seeing message:", response);
  }
}
getUsers();
