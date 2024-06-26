<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no, viewport-fit=cover">
        <meta name="color-scheme" content="light dark">

        <title>Messenger - 2.2.0</title>
        <link rel="stylesheet" href="style.css">

        <!-- Favicon -->
        <style type="text/css"></style><link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" type="image/x-icon">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700" rel="stylesheet">

        <!-- Template CSS -->
        <link class="css-lt" rel="stylesheet" href="./assets/css/template.bundle.css" media="all">
        <link class="css-dk" rel="stylesheet" href="./assets/css/template.dark.bundle.css" media="not all">

        <!-- Theme mode -->
        <script>
            if (localStorage.getItem('color-scheme')) {
                let scheme = localStorage.getItem('color-scheme');

                const LTCSS = document.querySelectorAll('link[class=css-lt]');
                const DKCSS = document.querySelectorAll('link[class=css-dk]');

                [...LTCSS].forEach((link) => {
                    link.media = (scheme === 'light') ? 'all' : 'not all';
                });

                [...DKCSS].forEach((link) => {
                    link.media = (scheme === 'dark') ? 'all' : 'not all';
                });
            }
        </script>
    </head>
    <body>
        <!-- Layout -->
        <div class="layout overflow-hidden">
            <!-- Navigation -->
            <nav class="navigation d-flex flex-column text-center navbar navbar-light hide-scrollbar">
                <!-- Brand -->
                <a href="index.html" title="Messenger" class="d-none d-xl-block mb-6">
                    <svg version="1.1" width="46px" height="46px" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
                        <polygon opacity="0.7" points="45,11 36,11 35.5,1 "></polygon>
                        <polygon points="35.5,1 25.4,14.1 39,21 "></polygon>
                        <polygon opacity="0.4" points="17,9.8 39,21 17,26 "></polygon>
                        <polygon opacity="0.7" points="2,12 17,26 17,9.8 "></polygon>
                        <polygon opacity="0.7" points="17,26 39,21 28,36 "></polygon>
                        <polygon points="28,36 4.5,44 17,26 "></polygon>
                        <polygon points="17,26 1,26 10.8,20.1 "></polygon>
                    </svg>

                </a>

                <!-- Nav items -->
                <ul class="d-flex nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center align-items-center w-100 py-4 py-lg-2 px-lg-3" role="tablist">
                    <!-- Invisible item to center nav vertically -->
                    <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
                        <a class="nav-link py-0 py-lg-8" href="#" title="">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                            </div>
                        </a>
                    </li>

                    <!-- New chat -->
                    <li class="nav-item">
                        <a class="nav-link py-0 py-lg-8" id="tab-create-chat" href="#tab-content-create-chat" title="Create chat" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                            </div>
                        </a>
                    </li>

                    <!-- Friends -->
                    <li class="nav-item">
                        <a class="nav-link py-0 py-lg-8" id="tab-friends" href="#tab-content-friends" title="Friends" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                        </a>
                    </li>

                    <!-- Chats -->
                    <li class="nav-item">
                        <a class="nav-link active py-0 py-lg-8" id="tab-chats" href="#tab-content-chats" title="Chats" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl icon-badged">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                <div class="badge badge-circle bg-primary">
                                    <span>4</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    <!-- Notification -->
                    <li class="nav-item">
                        <a class="nav-link py-0 py-lg-8" id="tab-notifications" href="#tab-content-notifications" title="Notifications" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                            </div>
                        </a>
                    </li>

                    <!-- Support -->
                    <li class="nav-item d-none d-xl-block flex-xl-grow-1">
                        <a class="nav-link py-0 py-lg-8" id="tab-support" href="#tab-content-support" title="Support" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                            </div>
                        </a>
                    </li>

                    <!-- Switcher -->
                    <li class="nav-item d-none d-xl-block">
                        <a class="switcher-btn nav-link py-0 py-lg-8" href="#!" title="Themes">
                            <div class="switcher-icon switcher-icon-dark icon icon-xl d-none" data-theme-mode="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                            </div>
                            <div class="switcher-icon switcher-icon-light icon icon-xl" data-theme-mode="light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                            </div>
                        </a>
                    </li>

                    <!-- Settings -->
                    <li class="nav-item">
                        <a class="nav-link py-0 py-lg-8" id="tab-settings" href="#tab-content-settings" title="Settings" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                            </div>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="nav-item d-none d-xl-block">
                        <a href="#" class="nav-link p-0 mt-lg-2" data-bs-toggle="modal" data-bs-target="#modal-profile">
                            <div class="avatar avatar-online mx-auto">
                                <img class="avatar-img" src="" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Navigation -->

            <!-- Sidebar -->
            <aside class="sidebar bg-light">
                <div class="tab-content h-100" role="tablist">
                    <!-- Create -->
                    <div class="tab-pane fade h-100" id="tab-content-create-chat" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">

                                <div class="container py-8">

                                    <!-- Title -->
                                    <div class="mb-8">
                                        <h2 class="fw-bold m-0">Create chat</h2>
                                    </div>

                                    <!-- Search -->
                                    <div class="mb-6">
                                        <div class="mb-5">
                                            <form action="#">
                                                <div class="input-group">
                                                    <div class="input-group-text">
                                                        <div class="icon icon-lg">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                        </div>
                                                    </div>

                                                    <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                                </div>
                                            </form>
                                        </div>

                                        <ul class="nav nav-pills nav-justified" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="pill" href="#create-chat-info" role="tab" aria-controls="create-chat-info" aria-selected="true">
                                                    Details
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="pill" href="#create-chat-members" role="tab" aria-controls="create-chat-members" aria-selected="true">
                                                    People
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Tabs content -->
                                    <div class="tab-content" role="tablist">
                                        <div class="tab-pane fade show active" id="create-chat-info" role="tabpanel">

                                            <div class="card border-0">
                                                <div class="profile">
                                                    <div class="profile-img text-primary rounded-top">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74"><defs><style>.cls-2{fill:#fff;opacity:0.1;}</style></defs><g><g><path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path><path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z"></path><path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z"></path><circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle><path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path></g></g></svg>
                                                    </div>

                                                    <div class="profile-body p-0">
                                                        <div class="avatar avatar-lg">
                                                            <span class="avatar-text bg-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                            </span>

                                                            <div class="badge badge-lg badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                            </div>

                                                            <input id="upload-chat-img" class="d-none" type="file">
                                                            <label class="stretched-label mb-0" for="upload-chat-img"></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <form autocomplete="off">
                                                        <div class="row gy-6">
                                                            <div class="col-12">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" id="floatingInput" placeholder="Enter a chat name">
                                                                    <label for="floatingInput">Enter group name</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-floating">
                                                                    <textarea class="form-control" placeholder="Description" id="floatingTextarea" rows="8" data-autosize="true" style="min-height: 100px; overflow: hidden; overflow-wrap: break-word; resize: none;"></textarea>
                                                                    <label for="floatingTextarea">What's your purpose?</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mt-4 px-6">
                                                <small class="text-muted me-auto">Enter chat name and add an optional photo.</small>
                                            </div>

                                            <!-- Options -->
                                            <div class="mt-8">
                                                <div class="d-flex align-items-center mb-4 px-6">
                                                    <small class="text-muted me-auto">Options</small>
                                                </div>

                                                <div class="card border-0">
                                                    <div class="card-body">
                                                        <div class="row gx-5">
                                                            <div class="col-auto">
                                                                <div class="btn btn-sm btn-icon btn-dark">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Make Private</h5>
                                                                <p>Can only be viewed by invites</p>
                                                            </div>
                                                            <div class="col-auto align-self-center">
                                                                <div class="form-check form-switch ps-0">
                                                                    <input class="form-check-input" type="checkbox" id="new-chat-options-1">
                                                                    <label class="form-check-label" for="new-chat-options-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Members -->
                                        <div class="tab-pane fade" id="create-chat-members" role="tabpanel">
                                            <nav>
                                                <div class="my-5">
                                                    <small class="text-uppercase text-muted">B</small>
                                                </div>

                                                <!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar ">
                                                                    
                                                                            
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Bill Marrow</h5>
                                                                <p>last seen 3 days ago</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-1">
                                                                    <label class="form-check-label" for="id-member-1"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-1"></label>
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                                <div class="my-5">
                                                    <small class="text-uppercase text-muted">D</small>
                                                </div>

                                                <!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar ">
                                                                    
                                                                        <img class="avatar-img" src="" alt="">
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Damian Binder</h5>
                                                                <p>last seen within a week</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-2">
                                                                    <label class="form-check-label" for="id-member-2"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-2"></label>
                                                    </div>
                                                </div>
                                                <!-- Card --><!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-online">
                                                                    
                                                                    
                                                                        <span class="avatar-text">D</span>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Don Knight</h5>
                                                                <p>online</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-3">
                                                                    <label class="form-check-label" for="id-member-3"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-3"></label>
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                                <div class="my-5">
                                                    <small class="text-uppercase text-muted">E</small>
                                                </div>

                                                <!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-online">
                                                                    
                                                                        <img class="avatar-img" src="" alt="">
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Elise Dennis</h5>
                                                                <p>online</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-4">
                                                                    <label class="form-check-label" for="id-member-4"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-4"></label>
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                                <div class="my-5">
                                                    <small class="text-uppercase text-muted">M</small>
                                                </div>

                                                <!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar ">
                                                                    
                                                                    
                                                                        <span class="avatar-text">M</span>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Marshall Wallaker</h5>
                                                                <p>last seen within a month</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-6">
                                                                    <label class="form-check-label" for="id-member-6"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-6"></label>
                                                    </div>
                                                </div>
                                                <!-- Card --><!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar ">
                                                                    
                                                                        <img class="avatar-img" src="" alt="">
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Mila White</h5>
                                                                <p>last seen a long time ago</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-5">
                                                                    <label class="form-check-label" for="id-member-5"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-5"></label>
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                                <div class="my-5">
                                                    <small class="text-uppercase text-muted">O</small>
                                                </div>

                                                <!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-online">
                                                                    
                                                                    
                                                                        <span class="avatar-text">O</span>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Ollie Chandler</h5>
                                                                <p>online</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-7">
                                                                    <label class="form-check-label" for="id-member-7"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-7"></label>
                                                    </div>
                                                </div>
                                                <!-- Card -->

                                                <div class="my-5">
                                                    <small class="text-uppercase text-muted">W</small>
                                                </div>

                                                <!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar ">
                                                                    
                                                                        <img class="avatar-img" src="" alt="">
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>Warren White</h5>
                                                                <p>last seen recently</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-8">
                                                                    <label class="form-check-label" for="id-member-8"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-8"></label>
                                                    </div>
                                                </div>
                                                <!-- Card --><!-- Card -->
                                                <div class="card border-0 mt-5">
                                                    <div class="card-body">

                                                        <div class="row align-items-center gx-5">
                                                            <div class="col-auto">
                                                                <div class="avatar avatar-online">
                                                                    
                                                                        <img class="avatar-img" src="" alt="">
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <h5>William Wright</h5>
                                                                <p>online</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="id-member-9">
                                                                    <label class="form-check-label" for="id-member-9"></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <label class="stretched-label" for="id-member-9"></label>
                                                    </div>
                                                </div>
                                                <!-- Card -->
                                            </nav>
                                        </div>
                                    </div>
                                    <!-- Tabs content -->
                                </div>

                            </div>

                            <!-- Button -->
                            <div class="container mt-n4 mb-8 position-relative">
                                <button class="btn btn-lg btn-primary w-100 d-flex align-items-center" type="button">
                                    Start chat
                                    <span class="icon ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                    </span>
                                </button>
                            </div>
                            <!-- Button -->
                        </div>
                    </div>

                    <!-- Friends -->
                    <div class="tab-pane fade h-100" id="tab-content-friends" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">
                                <div class="container py-8">

                                    <!-- Title -->
                                    <div class="mb-8">
                                        <h2 class="fw-bold m-0">Friends</h2>
                                    </div>

                                    <!-- Search -->
                                    <div class="mb-6">
                                        <form action="#">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="icon icon-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </div>
                                                </div>

                                                <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                            </div>
                                        </form>

                                        <!-- Invite button -->
                                        <div class="mt-5">
                                            <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#modal-invite">
                                                Find Friends

                                                <span class="icon ms-auto">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- List -->
                                    <div class="card-list">
                                        <div class="my-5">
                                            <small class="text-uppercase text-muted">B</small>
                                        </div>

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar ">
                                                            
                                                            <img class="avatar-img" src="" alt="">
                                                            
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Bill Marrow</a></h5>
                                                        <p>last seen 3 days ago</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <div class="my-5">
                                            <small class="text-uppercase text-muted">D</small>
                                        </div>

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar ">
                                                            
                                                            <img class="avatar-img" src="" alt="">
                                                            
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Damian Binder</a></h5>
                                                        <p>last seen within a week</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card --><!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar avatar-online">
                                                            
                                                            
                                                            <span class="avatar-text">D</span>
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Don Knight</a></h5>
                                                        <p>online</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <div class="my-5">
                                            <small class="text-uppercase text-muted">E</small>
                                        </div>

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar avatar-online">
                                                            
                                                            <img class="avatar-img" src="" alt="">
                                                            
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Elise Dennis</a></h5>
                                                        <p>online</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <div class="my-5">
                                            <small class="text-uppercase text-muted">M</small>
                                        </div>

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar ">
                                                            
                                                            
                                                            <span class="avatar-text">M</span>
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Marshall Wallaker</a></h5>
                                                        <p>last seen within a month</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card --><!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar ">
                                                            
                                                            <img class="avatar-img" src="" alt="">
                                                            
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Mila White</a></h5>
                                                        <p>last seen a long time ago</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <div class="my-5">
                                            <small class="text-uppercase text-muted">O</small>
                                        </div>

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar avatar-online">
                                                            
                                                            
                                                            <span class="avatar-text">O</span>
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Ollie Chandler</a></h5>
                                                        <p>online</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <div class="my-5">
                                            <small class="text-uppercase text-muted">W</small>
                                        </div>

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar ">
                                                            
                                                            <img class="avatar-img" src="" alt="">
                                                            
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">Warren White</a></h5>
                                                        <p>last seen recently</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card --><!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row align-items-center gx-5">
                                                    <div class="col-auto">
                                                        <a href="#" class="avatar avatar-online">
                                                            
                                                            <img class="avatar-img" src="" alt="">
                                                            
                                                            
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <h5><a href="#">William Wright</a></h5>
                                                        <p>online</p>
                                                    </div>

                                                    <div class="col-auto">
                                                        <!-- Dropdown -->
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">New message</a></li>
                                                                <li><a class="dropdown-item" href="#">Edit contact</a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item text-danger" href="#">Block user</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chats -->
                    <div class="tab-pane fade h-100 show active" id="tab-content-chats" role="tabpanel">
                        <div class="d-flex flex-column h-100 position-relative">
                            <div class="hide-scrollbar">

                                <div class="container py-8">
                                    <!-- Title -->
                                    <div class="mb-8">
                                        <h2 class="fw-bold m-0">Chats</h2>
                                    </div>

                                    <!-- Search -->
                                    <div class="mb-6">
                                        <form action="#">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="icon icon-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </div>
                                                </div>

                                                <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Chats -->
                                    <div class="card-list">
                                        <!-- Card -->
                                        <a href="chat-group.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="" alt="#" class="avatar-img">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">William Wright</h5>
                                                            <span class="text-muted extra-small ms-2">12:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->

                                            <div class="card-footer">
                                                <div class="row align-items-center gx-4">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-xs">
                                                            <img class="avatar-img" src="assets/img/avatars/bootstrap.svg" alt="Bootstrap Community">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="mb-0">Bootstrap Community</h6>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="avatar-group">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/img/avatars/1" alt="#" class="avatar-img">
                                                            </div>

                                                            <div class="avatar avatar-xs">
                                                                <img src="" alt="#" class="avatar-img">
                                                            </div>

                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/img/avatars/9.jpg" alt="#" class="avatar-img">
                                                            </div>

                                                            <div class="avatar avatar-xs">
                                                                <span class="avatar-text">+5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .row -->
                                            </div><!-- .card-footer -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="" alt="#" class="avatar-img">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Ollie Chandler</h5>
                                                            <span class="text-muted extra-small ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet friend of mine at the departments stores now.
                                                            </div>

                                                            <div class="badge badge-circle bg-primary ms-5">
                                                                <span>3</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-empty.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="" alt="#" class="avatar-img">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Elise Dennis</h5>
                                                            <span class="text-muted extra-small ms-2">08:35 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                is typing<span class="typing-dots"><span>.</span><span>.</span><span>.</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar-group-trigon avatar-group-trigon-sm">
                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img" src="" alt="#">
                                                            </div>

                                                            <div class="avatar avatar-sm">
                                                                <img class="avatar-img" src="assets/img/avatars/9.jpg" alt="#">
                                                            </div>

                                                            <div class="avatar avatar-sm">
                                                                <span class="avatar-text bg-primary">D</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Don Knight</h5>
                                                            <span class="text-muted extra-small ms-2">08:35 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                I'm going to meet my friend of mine at the departments stores as soon as possible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <img src="" alt="#" class="avatar-img">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Warren White</h5>
                                                            <span class="text-muted extra-small ms-2">06:20 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores as soon as possible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <img src="" alt="#" class="avatar-img">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Mila White</h5>
                                                            <span class="text-muted extra-small ms-2">04:40 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores as soon as possible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <img src="" alt="#" class="avatar-img">
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Damian Binder</h5>
                                                            <span class="text-muted extra-small ms-2">02:45 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores as soon as possible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <span class="avatar-text">B</span>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Bill Marrow</h5>
                                                            <span class="text-muted extra-small ms-2">12:20 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores as soon as possible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="#" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar avatar-online">
                                                            <span class="avatar-text">M</span>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="me-auto mb-0">Marshall Wallaker</h5>
                                                            <span class="text-muted extra-small ms-2">12:18 PM</span>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <div class="line-clamp me-auto">
                                                                Hello! Yeah, I'm going to meet my friend of mine at the departments stores as soon as possible.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <svg class="avatar-img placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                                <title>Placeholder</title>
                                                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="placeholder-glow w-100 mb-0">
                                                                <span class="placeholder col-5"></span>
                                                            </h5>
                                                        </div>

                                                        <div class="placeholder-glow">
                                                            <span class="placeholder col-12"></span>
                                                            <span class="placeholder col-8"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <a href="chat-direct.html" class="card border-0 text-reset">
                                            <div class="card-body">
                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <svg class="avatar-img placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                                                                <title>Placeholder</title>
                                                                <rect width="100%" height="100%" fill="#868e96"></rect>
                                                            </svg>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h5 class="placeholder-glow  w-100  mb-0">
                                                                <span class="placeholder col-5"></span>
                                                            </h5>
                                                        </div>

                                                        <div class="placeholder-glow">
                                                            <span class="placeholder col-12"></span>
                                                            <span class="placeholder col-8"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card-body -->
                                        </a>
                                        <!-- Card -->
                                    </div>
                                    <!-- Chats -->
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Notifications - Notices -->
                    <div class="tab-pane fade h-100" id="tab-content-notifications" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">
                                <div class="container py-8">

                                    <!-- Title -->
                                    <div class="mb-8">
                                        <h2 class="fw-bold m-0">Notifications</h2>
                                    </div>

                                    <!-- Search -->
                                    <div class="mb-6">
                                        <form action="#">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="icon icon-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </div>
                                                </div>

                                                <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Today -->
                                    <div class="card-list">
                                        <!-- Title -->
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Today</small>

                                            <a href="#" class="text-muted small">Clear all</a>
                                        </div>
                                        <!-- Title -->

                                        <!-- Card -->
                                        <div class="card border-0 mb-5">
                                            <div class="card-body">

                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <a href="#" class="avatar">
                                                            <img class="avatar-img" src="" alt="">

                                                            <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h5 class="me-auto mb-0">
                                                                <a href="#">Mila White</a>
                                                            </h5>
                                                            <span class="extra-small text-muted ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="me-auto">Send you a friend request.</div>

                                                            <div class="dropdown ms-5">
                                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Show less often</a></li>
                                                                    <li><a class="dropdown-item" href="#">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <div class="row gx-4">
                                                    <div class="col">
                                                        <a href="#" class="btn btn-sm btn-soft-primary w-100">Hide</a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="#" class="btn btn-sm btn-primary w-100">Confirm</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <div class="card border-0 mb-5">
                                            <div class="card-body">

                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <a href="#" class="avatar">
                                                            <span class="avatar-text bg-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                            </span>

                                                            <div class="badge badge-circle bg-warning border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h5 class="me-auto mb-0">
                                                                <a href="#">Congratulations!</a>
                                                            </h5>
                                                            <span class="extra-small text-muted ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="me-auto">You win 5GB free disk space.</div>

                                                            <div class="dropdown ms-5">
                                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Show less often</a></li>
                                                                    <li><a class="dropdown-item" href="#">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- Today -->

                                    <!-- Yesterday -->
                                    <div class="card-list mt-8">
                                        <!-- Title -->
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Yesterday</small>

                                            <a href="#" class="text-muted small">Clear all</a>
                                        </div>
                                        <!-- Title -->

                                        <!-- Card -->
                                        <div class="card border-0 mb-5">
                                            <div class="card-body">

                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <div class="avatar">
                                                            <span class="avatar-text bg-success">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                                            </span>

                                                            <div class="badge badge-circle bg-success border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-ccw"><polyline points="1 4 1 10 7 10"></polyline><polyline points="23 20 23 14 17 14"></polyline><path d="M20.49 9A9 9 0 0 0 5.64 5.64L1 10m22 4l-4.64 4.36A9 9 0 0 1 3.51 15"></path></svg>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h5 class="me-auto mb-0">Password Changed</h5>
                                                            <span class="extra-small text-muted ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="me-auto">Your password has been <br> updated successfully.</div>

                                                            <div class="dropdown ms-5">
                                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Show less often</a></li>
                                                                    <li><a class="dropdown-item" href="#">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>
                                    <!-- Yesterday -->

                                    <!-- Previous -->
                                    <div class="card-list mt-8">

                                        <!-- Title -->
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Previous</small>

                                            <a href="#" class="text-muted small">Clear all</a>
                                        </div>
                                        <!-- Title -->

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <a href="#" class="avatar">
                                                            <img class="avatar-img" src="" alt="">

                                                            <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h5 class="me-auto mb-0">
                                                                <a href="#">William Wright</a>
                                                            </h5>
                                                            <span class="extra-small text-muted ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="me-auto">Updated profile picture.</div>

                                                            <div class="dropdown ms-5">
                                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Show less often</a></li>
                                                                    <li><a class="dropdown-item" href="#">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <a href="#" class="avatar">
                                                            <img class="avatar-img" src="assets/img/avatars/9.jpg" alt="">

                                                            <div class="badge badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h5 class="me-auto mb-0">
                                                                <a href="#">Don Knight</a>
                                                            </h5>
                                                            <span class="extra-small text-muted ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex">
                                                            <!-- <div class="me-auto">Removed you from the chat <a href="#" class="text-reset">Bootstrap Community</a>.</div> -->
                                                            <div class="me-auto">Send you a private message.</div>

                                                            <div class="dropdown ms-5">
                                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Show less often</a></li>
                                                                    <li><a class="dropdown-item" href="#">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Card -->

                                        <!-- Card -->
                                        <div class="card border-0">
                                            <div class="card-body">

                                                <div class="row gx-5">
                                                    <div class="col-auto">
                                                        <!-- Avatar -->
                                                        <a href="#tab-settings" class="avatar avatar-badged" data-theme-toggle="tab">
                                                            <span class="avatar-text bg-danger">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                                            </span>

                                                            <div class="badge badge-circle bg-danger border-outline position-absolute bottom-0 end-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <h5 class="me-auto mb-0">
                                                                <a href="#tab-settings" data-theme-toggle="tab">
                                                                    Notifications
                                                                </a>
                                                            </h5>
                                                            <span class="extra-small text-muted ms-2">08:45 PM</span>
                                                        </div>

                                                        <div class="d-flex">
                                                            <div class="me-auto">Please turn on notifications.</div>

                                                            <div class="dropdown ms-5">
                                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item" href="#">Show less often</a></li>
                                                                    <li><a class="dropdown-item" href="#">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Support -->
                    <div class="tab-pane fade h-100" id="tab-content-support" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">
                                <div class="container py-8">

                                    <!-- Title -->
                                    <div class="mb-8">
                                        <h2 class="fw-bold m-0">Support</h2>
                                    </div>

                                    <!-- Search -->
                                    <div class="mb-6">
                                        <form action="#">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="icon icon-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </div>
                                                </div>

                                                <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Docs -->
                                    <div class="card border-0">
                                        <div class="card-body">

                                            <div class="row align-items-center gx-5">
                                                <div class="col-auto text-primary">
                                                    <svg version="1.1" width="46px" height="46px" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 46 46" enable-background="new 0 0 46 46" xml:space="preserve">
                                                        <polygon opacity="0.7" points="45,11 36,11 35.5,1 "></polygon>
                                                        <polygon points="35.5,1 25.4,14.1 39,21 "></polygon>
                                                        <polygon opacity="0.4" points="17,9.8 39,21 17,26 "></polygon>
                                                        <polygon opacity="0.7" points="2,12 17,26 17,9.8 "></polygon>
                                                        <polygon opacity="0.7" points="17,26 39,21 28,36 "></polygon>
                                                        <polygon points="28,36 4.5,44 17,26 "></polygon>
                                                        <polygon points="17,26 1,26 10.8,20.1 "></polygon>
                                                    </svg>

                                                </div>

                                                <div class="col">
                                                    <h4 class="mb-1">Documentation</h4>
                                                    <p>Setup and build tools</p>
                                                </div>

                                                <div class="col-auto">
                                                    <a href="docs/index.html" class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Docs -->

                                    <!-- Account Pages -->
                                    <div class="card-list mt-8">
                                        <div class="d-flex align-items-center mb-4 px-6">
                                            <small class="text-muted me-auto">Pages</small>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h4 class="mb-1">Sign In</h4>
                                                        <p>Sign in Page</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="signin.html" class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h4 class="mb-1">Sign Up</h4>
                                                        <p>Sign Up Page</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="signup.html" class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h4 class="mb-1">Password Reset</h4>
                                                        <p>Password Reset Page</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="password-reset.html" class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center gx-0">
                                                    <div class="col">
                                                        <h4 class="mb-1">Lock screen</h4>
                                                        <p>Lock screen Page</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="lockscreen.html" class="btn btn-sm btn-icon btn-primary rounded-circle">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Account Pages -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings -->
                    <div class="tab-pane fade h-100" id="tab-content-settings" role="tabpanel">
                        <div class="d-flex flex-column h-100">
                            <div class="hide-scrollbar">
                                <div class="container py-8">

                                    <!-- Title -->
                                    <div class="mb-8">
                                        <h2 class="fw-bold m-0">Settings</h2>
                                    </div>

                                    <!-- Search -->
                                    <div class="mb-6">
                                        <form action="#">
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <div class="icon icon-lg">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                                    </div>
                                                </div>

                                                <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Profile -->
                                    <div class="card border-0">
                                        <div class="card-body">
                                            <div class="row align-items-center gx-5">
                                                <div class="col-auto">
                                                    <div class="avatar">
                                                        <img src="" alt="#" class="avatar-img">

                                                        <div class="badge badge-circle bg-secondary border-outline position-absolute bottom-0 end-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                        </div>
                                                        <input id="upload-profile-photo" class="d-none" type="file">
                                                        <label class="stretched-label mb-0" for="upload-profile-photo"></label>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <h5>William Pearson</h5>
                                                    <p>wright@studio.com</p>
                                                </div>
                                                <div class="col-auto">
                                                    <a href="#" class="text-muted">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Profile -->

                                    <!-- Account -->
                                    <div class="mt-8">
                                        <div class="d-flex align-items-center mb-4 px-6">
                                            <small class="text-muted me-auto">Account</small>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body py-2">
                                                <!-- Accordion -->
                                                <div class="accordion accordion-flush" id="accordion-profile">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="accordion-profile-1">
                                                            <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-profile-body-1" aria-expanded="false" aria-controls="accordion-profile-body-1">
                                                                <div>
                                                                    <h5>Profile settings</h5>
                                                                    <p>Change your profile settings</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div id="accordion-profile-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-profile-1" data-parent="#accordion-profile">
                                                            <div class="accordion-body">
                                                                <div class="form-floating mb-6">
                                                                    <input type="text" class="form-control" id="profile-name" placeholder="Name">
                                                                    <label for="profile-name">Name</label>
                                                                </div>

                                                                <div class="form-floating mb-6">
                                                                    <input type="email" class="form-control" id="profile-email" placeholder="Email address">
                                                                    <label for="profile-email">Email</label>
                                                                </div>

                                                                <div class="form-floating mb-6">
                                                                    <input type="text" class="form-control" id="profile-phone" placeholder="Phone">
                                                                    <label for="profile-phone">Phone</label>
                                                                </div>

                                                                <div class="form-floating mb-6">
                                                                    <textarea class="form-control" placeholder="Bio" id="profile-bio" data-autosize="true" style="min-height: 120px; overflow: hidden; overflow-wrap: break-word; resize: none;"></textarea>
                                                                    <label for="profile-bio">Bio</label>
                                                                </div>

                                                                <button type="button" class="btn btn-block btn-lg btn-primary w-100">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="accordion-profile-2">
                                                            <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-profile-body-2" aria-expanded="false" aria-controls="accordion-profile-body-2">
                                                                <div>
                                                                    <h5>Connected accounts</h5>
                                                                    <p>Connect with your accounts</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div id="accordion-profile-body-2" class="accordion-collapse collapse" aria-labelledby="accordion-profile-2" data-parent="#accordion-profile">
                                                            <div class="accordion-body">
                                                                <div class="form-floating mb-6">
                                                                    <input type="text" class="form-control" id="profile-twitter" placeholder="Twitter">
                                                                    <label for="profile-twitter">Twitter</label>
                                                                </div>

                                                                <div class="form-floating mb-6">
                                                                    <input type="text" class="form-control" id="profile-facebook" placeholder="Facebook">
                                                                    <label for="profile-facebook">Facebook</label>
                                                                </div>

                                                                <div class="form-floating mb-6">
                                                                    <input type="text" class="form-control" id="profile-instagram" placeholder="Instagram">
                                                                    <label for="profile-instagram">Instagram</label>
                                                                </div>

                                                                <button type="button" class="btn btn-block btn-lg btn-primary w-100">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Switch -->
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h5>Appearance</h5>
                                                                    <p>Choose light or dark theme</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <a class="switcher-btn text-reset" href="#!" title="Themes">
                                                                        <div class="switcher-icon switcher-icon-dark icon icon-lg d-none" data-theme-mode="dark">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                                                                        </div>
                                                                        <div class="switcher-icon switcher-icon-light icon icon-lg" data-theme-mode="light">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Account -->

                                    <!-- Security -->
                                    <div class="mt-8">
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Security</small>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body py-2">
                                                <!-- Accordion -->
                                                <div class="accordion accordion-flush" id="accordion-security">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="accordion-security-1">
                                                            <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-security-body-1" aria-expanded="false" aria-controls="accordion-security-body-1">
                                                                <div>
                                                                    <h5>Password</h5>
                                                                    <p>Change your password</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div id="accordion-security-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-security-1" data-parent="#accordion-security">
                                                            <div class="accordion-body">
                                                                <form action="#" autocomplete="on">
                                                                    <div class="form-floating mb-6">
                                                                        <input type="password" class="form-control" id="profile-current-password" placeholder="Current Password" autocomplete="">
                                                                        <label for="profile-current-password">Current Password</label>
                                                                    </div>

                                                                    <div class="form-floating mb-6">
                                                                        <input type="password" class="form-control" id="profile-new-password" placeholder="New password" autocomplete="">
                                                                        <label for="profile-new-password">New password</label>
                                                                    </div>

                                                                    <div class="form-floating mb-6">
                                                                        <input type="password" class="form-control" id="profile-verify-password" placeholder="Verify Password" autocomplete="">
                                                                        <label for="profile-verify-password">Verify Password</label>
                                                                    </div>
                                                                </form>
                                                                <button type="button" class="btn btn-block btn-lg btn-primary w-100">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Switch -->
                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h5>Two-step verifications</h5>
                                                                    <p>Enable two-step verifications</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" id="accordion-security-check-1">
                                                                        <label class="form-check-label" for="accordion-security-check-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Security -->

                                    <!-- Storage -->
                                    <div class="mt-8">
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Storage</small>

                                            <div class="flex align-items-center text-muted">
                                                <a href="#" class="text-muted small">Clear storage</a>

                                                <div class="icon icon-xs">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body py-2">
                                                <!-- Accordion -->
                                                <div class="accordion accordion-flush" id="accordion-storage">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="accordion-storage-1">
                                                            <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-storage-body-1" aria-expanded="false" aria-controls="accordion-storage-body-1">
                                                                <div>
                                                                    <h5>Cache</h5>
                                                                    <p>Maximum cache size</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div id="accordion-storage-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-storage-1" data-parent="#accordion-storage">
                                                            <div class="accordion-body">
                                                                <div class="row justify-content-between mb-4">
                                                                    <div class="col-auto">
                                                                        <small>2 GB</small>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <small>4 GB</small>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <small>6 GB</small>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <small>8 GB</small>
                                                                    </div>
                                                                </div>
                                                                <input type="range" class="form-range" min="1" max="4" step="1" id="custom-range-1">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h5>Keep media</h5>
                                                                    <p>Photos, videos and other files</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" id="accordion-storage-check-1">
                                                                        <label class="form-check-label" for="accordion-storage-check-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Storage -->

                                    <!-- Notifications -->
                                    <div class="mt-8">
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Notifications</small>
                                        </div>

                                        <!-- Accordion -->
                                        <div class="card border-0">
                                            <div class="card-body py-2">
                                                <div class="accordion accordion-flush" id="accordion-notifications">
                                                    <div class="accordion-item">
                                                        <div class="accordion-header" id="accordion-notifications-1">
                                                            <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-notifications-body-1" aria-expanded="false" aria-controls="accordion-notifications-body-1">
                                                                <div>
                                                                    <h5>Message</h5>
                                                                    <p>Set custom notifications for users</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div id="accordion-notifications-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-notifications-1" data-parent="#accordion-notifications">
                                                            <div class="accordion-body">
                                                                <div class="row align-items-center">
                                                                    <div class="col">
                                                                        <h5>Text</h5>
                                                                        <p>Show text in notifications</p>
                                                                    </div>

                                                                    <div class="col-auto">
                                                                        <div class="form-check form-switch">
                                                                            <input class="form-check-input" type="checkbox" id="accordion-notifications-check-1">
                                                                            <label class="form-check-label" for="accordion-notifications-check-1"></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h5>Sound</h5>
                                                                    <p>Enable sound notifications</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" id="accordion-notifications-check-3">
                                                                        <label class="form-check-label" for="accordion-notifications-check-3"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item">
                                                        <div class="accordion-header">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h5>Browser notifications</h5>
                                                                    <p>Enable browser notifications</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox" id="accordion-notifications-check-2" checked="">
                                                                        <label class="form-check-label" for="accordion-notifications-check-2"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Notifications -->

                                    <!-- Devices -->
                                    <div class="mt-8">
                                        <div class="d-flex align-items-center my-4 px-6">
                                            <small class="text-muted me-auto">Devices</small>

                                            <div class="flex align-items-center text-muted">
                                                <a href="#" class="text-muted small">End all sessions</a>

                                                <div class="icon icon-xs">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card border-0">
                                            <div class="card-body py-3">

                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>Windows ⋅ USA, Houston</h5>
                                                                <p>Today at 2:48 pm ⋅ Browser: Chrome</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <span class="text-primary extra-small">active</span>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="list-group-item">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>iPhone ⋅ USA, Houston</h5>
                                                                <p>Yesterday at 2:48 pm ⋅ Browser: Chrome</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                    <!-- Devices -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Sidebar -->

            <!-- Chat -->
            <main class="main is-visible" data-dropzone-area="">
                <div class="container h-100">

                    <div class="d-flex flex-column h-100 position-relative">
                        <!-- Chat: Header -->
                        <div class="chat-header border-bottom py-4 py-lg-7">
                            <div class="row align-items-center">

                                <!-- Mobile: close -->
                                <div class="col-2 d-xl-none">
                                    <a class="icon icon-lg text-muted" href="#" data-toggle-chat="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                    </a>
                                </div>
                                <!-- Mobile: close -->

                                <!-- Content -->
                                <div class="col-8 col-xl-12">
                                    <div class="row align-items-center text-center text-xl-start">
                                        <!-- Title -->
                                        <div class="col-12 col-xl-6">
                                            <div class="row align-items-center gx-5">
                                                <div class="col-auto">
                                                    <div class="avatar d-none d-xl-inline-block">
                                                        <img class="avatar-img" src="assets/img/avatars/bootstrap.svg" alt="">
                                                    </div>
                                                </div>

                                                <div class="col overflow-hidden">
                                                    <h5 class="text-truncate">Bootstrap Community</h5>
                                                    <p class="text-truncate">35 members, 3 online</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Title -->

                                        <!-- Toolbar -->
                                        <div class="col-xl-6 d-none d-xl-block">
                                            <div class="row align-items-center justify-content-end gx-6">
                                                <div class="col-auto">
                                                    <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more-group" aria-controls="offcanvas-more-group">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                    </a>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="avatar-group">
                                                        <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                            <img class="avatar-img" src="" alt="#">
                                                        </a>

                                                        <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                            <img class="avatar-img" src="" alt="#">
                                                        </a>

                                                        <a href="#" class="avatar avatar-sm" data-bs-toggle="modal" data-bs-target="#modal-user-profile">
                                                            <img class="avatar-img" src="" alt="#">
                                                        </a>

                                                        <a href="#" class="avatar avatar-sm" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-add-members" aria-controls="offcanvas-add-members">
                                                            <span class="avatar-text" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="<strong>Add People</strong><p>Invite friends to group</p>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Toolbar -->
                                    </div>
                                </div>
                                <!-- Content -->

                                <!-- Mobile: more -->
                                <div class="col-2 d-xl-none text-end">
                                    <div class="dropdown">
                                        <a class="text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div class="icon icon-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                            </div>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-add-members" aria-controls="offcanvas-add-members">Add members</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more-group" aria-controls="offcanvas-more-group">More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mobile: more -->

                            </div>
                        </div>
                        <!-- Chat: Header -->

                        <!-- Chat: Content -->
                        <div class="chat-body hide-scrollbar flex-1 h-100">
                            <div class="chat-body-inner" style="padding-bottom: 87px">
                                <div class="py-6 py-lg-12">

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please.</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <blockquote class="blockquote overflow-hidden">
                                                            <h6 class="text-reset text-truncate">William Wright</h6>
                                                            <p class="small text-truncate">Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                        </blockquote>
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="message-content">
                                                    <div class="message-text">

                                                        <div class="row align-items-center gx-4">
                                                            <div class="col-auto">
                                                                <a href="#" class="avatar avatar-sm">
                                                                    <div class="avatar-text bg-white text-primary">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col overflow-hidden">
                                                                <h6 class="text-truncate text-reset">
                                                                    <a href="#" class="text-reset">filename.json</a>
                                                                </h6>
                                                                <ul class="list-inline text-uppercase extra-small opacity-75 mb-0">
                                                                    <li class="list-inline-item">79.2 KB</li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Divider -->
                                    <div class="message-divider">
                                        <small class="text-muted">Monday, Sep 16</small>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-gallery">
                                                        <div class="row gx-3">
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="assets/img/chat/" data-action="zoom" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="assets/img/chat/" data-action="zoom" alt="">
                                                            </div>
                                                            <div class="col">
                                                                <img class="img-fluid rounded" src="assets/img/chat/" data-action="zoom" alt="">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Divider -->
                                    <div class="message-divider">
                                        <small class="text-muted">Friday, Sep 20</small>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-online avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Send me the files please</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple?</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message message-out">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-profile" class="avatar avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>Hey, Marshall! How are you? Can you please change the color theme of the website to pink and purple? 😂</p>
                                                    </div>

                                                    <!-- Dropdown -->
                                                    <div class="message-action">
                                                        <div class="dropdown">
                                                            <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                            </a>

                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Edit</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                                        <span class="me-auto">Reply</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                                        <span class="me-auto">Delete</span>
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="message-footer">
                                                <span class="extra-small text-muted">08:45 PM</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Message -->
                                    <div class="message">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-user-profile" class="avatar avatar-online avatar-responsive">
                                            <img class="avatar-img" src="" alt="">
                                        </a>

                                        <div class="message-inner">
                                            <div class="message-body">
                                                <div class="message-content">
                                                    <div class="message-text">
                                                        <p>William is typing<span class="typing-dots"><span>.</span><span>.</span><span>.</span></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Chat: Content -->

                        <!-- Chat: Footer -->
                        <div class="chat-footer pb-3 pb-lg-7 position-absolute bottom-0 start-0">
                            <!-- Chat: Files -->
                            <div class="dz-preview bg-dark" id="dz-preview-row" data-horizontal-scroll="">
                            </div>
                            <!-- Chat: Files -->

                            <!-- Chat: Form -->
                            <form class="chat-form rounded-pill bg-dark" data-emoji-form="">
                                <div class="row align-items-center gx-0">
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-icon btn-link text-body rounded-circle dz-clickable" id="dz-btn">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                                        </a>
                                    </div>

                                    <div class="col">
                                        <div class="input-group">
                                            <textarea class="form-control px-0" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 47px;"></textarea>

                                            <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
                                                <span class="icon icon-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                                                </span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-auto">
                                        <button class="btn btn-icon btn-primary rounded-circle ms-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <!-- Chat: Form -->
                        </div>
                        <!-- Chat: Footer -->
                    </div>

                </div>
            </main>
            <!-- Chat -->

            <!-- Chat: Info -->
            <div class="offcanvas offcanvas-end offcanvas-aside" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvas-more-group">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4 py-lg-7 border-bottom">
                    <a class="icon icon-lg text-muted" href="#" data-bs-dismiss="offcanvas">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </a>

                    <div class="visibility-xl-invisible overflow-hidden text-center">
                        <h5 class="text-truncate">Bootstrap Community</h5>
                        <p class="text-truncate">45 members, 9 online</p>
                    </div>

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <a class="icon icon-lg text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    Edit
                                    <div class="icon ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="dropdown-item d-flex align-items-center">
                                    Mute
                                    <div class="icon ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a href="#" class="dropdown-item d-flex align-items-center text-danger">
                                    Leave
                                    <div class="icon ms-auto">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Offcanvas Header -->

                <!-- Offcanvas Body -->
                <div class="offcanvas-body hide-scrollbar">
                    <!-- Avatar -->
                    <div class="text-center py-10">
                        <div class="row gy-6">
                            <div class="col-12">
                                <div class="avatar avatar-xl mx-auto">
                                    <img src="assets/img/avatars/bootstrap.svg" alt="#" class="avatar-img">
                                </div>
                            </div>

                            <div class="col-12">
                                <h4>Bootstrap Community</h4>
                                <p>Bootstrap is an open source <br> toolkit for developing web with <br> HTML, CSS, and JS.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Avatar -->

                    <!-- Tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="pill" href="#offcanvas-group-tab-members" role="tab" aria-controls="offcanvas-group-tab-members" aria-selected="true">
                                People
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#offcanvas-group-tab-media" role="tab" aria-controls="offcanvas-group-tab-media" aria-selected="true">
                                Media
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="pill" href="#offcanvas-group-tab-files" role="tab" aria-controls="offcanvas-group-tab-files" aria-selected="false">
                                Files
                            </a>
                        </li>
                    </ul>
                    <!-- Tabs -->

                    <!-- Tabs: Content -->
                    <div class="tab-content py-2" role="tablist">
                        <!-- Members -->
                        <div class="tab-pane fade show active" id="offcanvas-group-tab-members" role="tabpanel">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">
                                        <!-- Avatar -->
                                        <div class="col-auto">
                                            <a href="#" class="avatar avatar-online">
                                                <img class="avatar-img" src="" alt="">
                                            </a>
                                        </div>
                                        <!-- Avatar -->

                                        <!-- Text -->
                                        <div class="col">
                                            <h5><a href="#">Michael Fuller</a></h5>
                                            <p>online</p>
                                        </div>
                                        <!-- Text -->

                                        <!-- Owner -->
                                        <div class="col-auto">
                                            <span class="extra-small text-primary">owner</span>
                                        </div>
                                        <!-- Owner -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Promote
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Restrict
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            Delete
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">
                                        <!-- Avatar -->
                                        <div class="col-auto">
                                            <a href="#" class="avatar avatar-online">
                                                <img class="avatar-img" src="" alt="">
                                            </a>
                                        </div>
                                        <!-- Avatar -->

                                        <!-- Text -->
                                        <div class="col">
                                            <h5><a href="#">Mila White</a></h5>
                                            <p>online</p>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Promote
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Restrict
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            Delete
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">
                                        <!-- Avatar -->
                                        <div class="col-auto">
                                            <a href="#" class="avatar">
                                                <img class="avatar-img" src="" alt="">
                                            </a>
                                        </div>
                                        <!-- Avatar -->

                                        <!-- Text -->
                                        <div class="col">
                                            <h5><a href="#">Don Knight</a></h5>
                                            <p>last seen recently</p>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Promote
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Restrict
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            Delete
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">
                                        <!-- Avatar -->
                                        <div class="col-auto">
                                            <a href="#" class="avatar">
                                                <img class="avatar-img" src="" alt="">
                                            </a>
                                        </div>
                                        <!-- Avatar -->

                                        <!-- Text -->
                                        <div class="col">
                                            <h5><a href="#">Elise Dennis</a></h5>
                                            <p>last seen 3 days ago</p>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Promote
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Restrict
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            Delete
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">
                                        <!-- Avatar -->
                                        <div class="col-auto">
                                            <a href="#" class="avatar">
                                                <span class="avatar-text">O</span>
                                            </a>
                                        </div>
                                        <!-- Avatar -->

                                        <!-- Text -->
                                        <div class="col">
                                            <h5><a href="#">Ollie Chandler</a></h5>
                                            <p>last seen within a week</p>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Promote
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Restrict
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            Delete
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Members -->

                        <!-- Media -->
                        <div class="tab-pane fade" id="offcanvas-group-tab-media" role="tabpanel">
                            <div class="row row-cols-3 g-3 py-6">
                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/4.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/5.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/6.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/7.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/8.jpg" alt="">
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal-media-preview" data-theme-img-url="assets/img/chat/media-">
                                        <img class="img-fluid rounded" src="assets/img/chat/9.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Media -->

                        <!-- Files -->
                        <div class="tab-pane fade" id="offcanvas-group-tab-files" role="tabpanel">
                            <ul class="list-group list-group-flush">

                                <!-- Item -->
                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">
                                        <!-- Icons -->
                                        <div class="col-auto">
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm">
                                                    <img src="" class="avatar-img" alt="#">
                                                </a>

                                                <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Icons -->

                                        <!-- Text -->
                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate">
                                                <a href="#">E5419783-047D-4B4C-B30E-F24DD824773</a>
                                            </h5>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">79.2 KB</small>
                                                </li>

                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">txt</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Download
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Share
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <!-- Item -->
                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">

                                        <!-- Icons-->
                                        <div class="col-auto">
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm">
                                                    <img class="avatar-img" src="" alt="#">
                                                </a>

                                                <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Icons -->

                                        <!-- Text -->
                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate">
                                                <a href="#">E5419783-047D-4B4C-B30E-F24DD824773</a>
                                            </h5>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">54.2 KB</small>
                                                </li>

                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">mp4</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Download
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Share
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <!-- Item -->
                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">

                                        <!-- Icons -->
                                        <div class="col-auto">
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm">
                                                    <img class="avatar-img" src="" alt="#">
                                                </a>

                                                <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Icons -->

                                        <!-- Text -->
                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate">
                                                <a href="#">E5419783-047D-4B4C-B30E-F24DD824773</a>
                                            </h5>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">64.8 KB</small>
                                                </li>

                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">jpg</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Download
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Share
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <!-- Item -->
                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">

                                        <!-- Icons-->
                                        <div class="col-auto">
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm">
                                                    <img class="avatar-img" src="" alt="#">
                                                </a>

                                                <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Icons-->

                                        <!-- Text -->
                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate">
                                                <a href="#">E5419783-047D-4B4C-B30E-F24DD824773</a>
                                            </h5>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">80.8 KB</small>
                                                </li>

                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">mp4</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Download
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Share
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>

                                <!-- Item -->
                                <li class="list-group-item">
                                    <div class="row align-items-center gx-5">

                                        <!-- Icons-->
                                        <div class="col-auto">
                                            <div class="avatar-group">
                                                <a href="#" class="avatar avatar-sm">
                                                    <img class="avatar-img" src="assets/img/avatars/" alt="#">
                                                </a>

                                                <a href="#" class="avatar avatar-sm">
                                                    <span class="avatar-text bg-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- Icons-->

                                        <!-- Text -->
                                        <div class="col overflow-hidden">
                                            <h5 class="text-truncate">
                                                <a href="#">E5419783-047D-4B4C-B30E-F24DD824773</a>
                                            </h5>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">100 KB</small>
                                                </li>

                                                <li class="list-inline-item">
                                                    <small class="text-uppercase text-muted">jpg</small>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Text -->

                                        <!-- Dropdown -->
                                        <div class="col-auto">
                                            <div class="dropdown">
                                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Download
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                                            Share
                                                            <div class="icon ms-auto">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li><hr class="dropdown-divider"></li>
                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                                            <span class="me-auto">Delete</span>
                                                            <div class="icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Dropdown -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Files -->
                    </div>
                    <!-- Tabs: Content -->
                </div>
                <!-- Offcanvas Body -->
            </div>

            <!-- Chat: Add member -->
            <div class="offcanvas offcanvas-end offcanvas-aside" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvas-add-members">
                <!-- Offcanvas Header -->
                <div class="offcanvas-header py-4 py-lg-7 border-bottom ">
                    <a class="icon icon-lg text-muted" href="#" data-bs-dismiss="offcanvas">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                    </a>

                    <div class="visibility-xl-invisible overflow-hidden text-center">
                        <h5 class="text-truncate">Members</h5>
                        <p class="text-truncate">Add new members</p>
                    </div>

                    <a class="icon icon-lg text-muted" data-bs-toggle="collapse" href="#search-members" role="button" aria-expanded="false" aria-controls="search-members" onclick="event.preventDefault();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-filter"><polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon></svg>
                    </a>
                </div>
                <!-- Offcanvas Header -->

                <!-- Offcanvas Body -->
                <div class="offcanvas-body hide-scrollbar py-0">

                    <!-- Search -->
                    <div class="collapse" id="search-members">
                        <div class="border-bottom py-6">

                            <form action="#">
                                <div class="input-group">
                                    <div class="input-group-text" id="search-user">
                                        <div class="icon icon-lg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </div>
                                    </div>

                                    <input type="text" class="form-control form-control-lg ps-0" placeholder="User name or phone" aria-label="User name or phone" aria-describedby="search-user">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- Search -->

                    <!-- Members -->
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <small class="text-uppercase text-muted">B</small>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar ">
                                        
                                            <img class="avatar-img" src="" alt="">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Bill Marrow</h5>
                                    <p>last seen 3 days ago</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-1">
                                        <label class="form-check-label" for="id-add-user-user-1"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-1"></label>
                        </li>

                        <li class="list-group-item">
                            <small class="text-uppercase text-muted">D</small>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar ">
                                        
                                            <img class="avatar-img" src="" alt="">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Damian Binder</h5>
                                    <p>last seen within a week</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-2">
                                        <label class="form-check-label" for="id-add-user-user-2"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-2"></label>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        
                                        
                                            <span class="avatar-text">D</span>
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Don Knight</h5>
                                    <p>online</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-3">
                                        <label class="form-check-label" for="id-add-user-user-3"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-3"></label>
                        </li>

                        <li class="list-group-item">
                            <small class="text-uppercase text-muted">E</small>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        
                                            <img class="avatar-img" src="" alt="">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Elise Dennis</h5>
                                    <p>online</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-4">
                                        <label class="form-check-label" for="id-add-user-user-4"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-4"></label>
                        </li>

                        <li class="list-group-item">
                            <small class="text-uppercase text-muted">M</small>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar ">
                                        
                                            <img class="avatar-img" src="" alt="">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Mila White</h5>
                                    <p>last seen a long time ago</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-5">
                                        <label class="form-check-label" for="id-add-user-user-5"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-5"></label>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        
                                        
                                            <span class="avatar-text">M</span>
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Michael Fuller</h5>
                                    <p>online</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-6">
                                        <label class="form-check-label" for="id-add-user-user-6"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-6"></label>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar ">
                                        
                                        
                                            <span class="avatar-text">M</span>
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Marshall Wallaker</h5>
                                    <p>last seen within a month</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-7">
                                        <label class="form-check-label" for="id-add-user-user-7"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-7"></label>
                        </li>

                        <li class="list-group-item">
                            <small class="text-uppercase text-muted">O</small>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        
                                        
                                            <span class="avatar-text">O</span>
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Ollie Chandler</h5>
                                    <p>online</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-8">
                                        <label class="form-check-label" for="id-add-user-user-8"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-8"></label>
                        </li>

                        <li class="list-group-item">
                            <small class="text-uppercase text-muted">W</small>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar ">
                                        
                                            <img class="avatar-img" src="" alt="">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Warren White</h5>
                                    <p>last seen recently</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-9">
                                        <label class="form-check-label" for="id-add-user-user-9"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-9"></label>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        
                                            <img class="avatar-img" src="" alt="">
                                        
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>William Wright</h5>
                                    <p>online</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-10">
                                        <label class="form-check-label" for="id-add-user-user-10"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-10"></label>
                        </li>

                        <li class="list-group-item">
                            <div class="row align-items-center gx-5">
                                <div class="col-auto">
                                    <div class="avatar avatar-online">
                                        
                                        
                                            <span class="avatar-text">W</span>
                                        
                                    </div>
                                </div>
                                <div class="col">
                                    <h5>Winton Wilkinson</h5>
                                    <p>online</p>
                                </div>
                                <div class="col-auto">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="id-add-user-user-11">
                                        <label class="form-check-label" for="id-add-user-user-11"></label>
                                    </div>
                                </div>
                            </div>
                            <label class="stretched-label" for="id-add-user-user-11"></label>
                        </li>
                    </ul>
                    <!-- Members -->
                </div>
                <!-- Offcanvas Body -->

                <!-- Offcanvas Footer -->
                <div class="offcanvas-footer border-top py-4 py-lg-7">
                    <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center">
                        Add members

                        <span class="icon ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </span>
                    </a>
                </div>
                <!-- Offcanvas Footer -->
            </div>
        </div>
        <!-- Layout -->

        <!-- Modal: Invite -->
        <div class="modal fade" id="modal-invite" tabindex="-1" aria-labelledby="modal-invite" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-xl-down">
                <div class="modal-content">

                    <!-- Modal: Body -->
                    <div class="modal-body py-0">
                        <!-- Header -->
                        <div class="profile modal-gx-n">
                            <div class="profile-img text-primary rounded-top-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74"><defs><style>.cls-2{fill:#fff;opacity:0.1;}</style></defs><g><g><path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path><path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z"></path><path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z"></path><circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle><path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path></g></g></svg>

                                <div class="position-absolute top-0 start-0 p-5">
                                    <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>

                            <div class="profile-body">
                                <div class="avatar avatar-lg">
                                    <span class="avatar-text bg-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                    </span>
                                </div>

                                <h4 class="fw-bold mb-1">Invite your friends</h4>
                                <p style="font-size: 16px;">Send invitation links to your friends</p>
                            </div>
                        </div>
                        <!-- Header -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- Form -->
                        <div class="modal-py">
                            <form class="row gy-6">
                                <div class="col-12">
                                    <label for="invite-email" class="form-label text-muted">E-mail</label>
                                    <input type="email" class="form-control form-control-lg" id="invite-email" placeholder="name@example.com">
                                </div>

                                <div class="col-12">
                                    <label for="invite-message" class="form-label text-muted">Message</label>
                                    <textarea class="form-control form-control-lg" id="invite-message" rows="3" placeholder="Custom message"></textarea>
                                </div>
                            </form>
                        </div>
                        <!-- Form -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- Button -->
                        <div class="modal-py">
                            <a href="#" class="btn btn-lg btn-primary w-100 d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#invite-modal">
                                Send

                                <span class="icon ms-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </span>
                            </a>
                        </div>
                        <!-- Button -->
                    </div>
                    <!-- Modal: Body -->

                </div>
            </div>
        </div>

        <!-- Modal: Profile -->
        <div class="modal fade" id="modal-profile" tabindex="-1" aria-labelledby="modal-profile" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-xl-down">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body py-0">
                        <!-- Header -->
                        <div class="profile modal-gx-n">
                            <div class="profile-img text-primary rounded-top-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74"><defs><style>.cls-2{fill:#fff;opacity:0.1;}</style></defs><g><g><path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path><path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z"></path><path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z"></path><circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle><path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path></g></g></svg>

                                <div class="position-absolute top-0 start-0 py-6 px-5">
                                    <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>

                            <div class="profile-body">
                                <div class="avatar avatar-xl">
                                    <img class="avatar-img" src="./" alt="#">
                                </div>

                                <h4 class="mb-1">William Wright</h4>
                                <p>last seen 5 minutes ago</p>
                            </div>
                        </div>
                        <!-- Header -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- List -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>Location</h5>
                                        <p>USA, Houston</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>E-mail</h5>
                                        <p>william@studio.com</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>Phone</h5>
                                        <p>1-800-275-2273</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- List  -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- List -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>Active status</h5>
                                        <p>Show when you're active.</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="profile-status" checked="">
                                            <label class="form-check-label" for="profile-status"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- List -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- List -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#" class="text-danger">Logout</a>
                            </li>
                        </ul>
                        <!-- List -->
                    </div>
                    <!-- Modal body -->

                </div>
            </div>
        </div>

        <!-- Modal: User profile -->
        <div class="modal fade" id="modal-user-profile" tabindex="-1" aria-labelledby="modal-user-profile" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen-xl-down">
                <div class="modal-content">

                    <!-- Modal body -->
                    <div class="modal-body py-0">
                        <!-- Header -->
                        <div class="profile modal-gx-n">
                            <div class="profile-img text-primary rounded-top-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74"><defs><style>.cls-2{fill:#fff;opacity:0.1;}</style></defs><g><g><path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path><path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z"></path><path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z"></path><circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle><path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path></g></g></svg>

                                <div class="position-absolute top-0 start-0 p-5">
                                    <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>

                            <div class="profile-body">
                                <div class="avatar avatar-xl">
                                    <img class="avatar-img" src="./assets/img/avatars/9.jpg" alt="#">

                                    <a href="#" class="badge badge-lg badge-circle bg-primary text-white border-outline position-absolute bottom-0 end-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                    </a>
                                </div>

                                <h4 class="mb-1">William Wright</h4>
                                <p>last seen 5 minutes ago</p>
                            </div>
                        </div>
                        <!-- Header -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- List -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>Location</h5>
                                        <p>USA, Houston</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>E-mail</h5>
                                        <p>william@studio.com</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>Phone</h5>
                                        <p>1-800-275-2273</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="btn btn-sm btn-icon btn-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call"><path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- List -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- List -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row align-items-center gx-6">
                                    <div class="col">
                                        <h5>Notifications</h5>
                                        <p>Enable sound notifications</p>
                                    </div>

                                    <div class="col-auto">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="user-notification-check">
                                            <label class="form-check-label" for="user-notification-check"></label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- List -->

                        <hr class="hr-bold modal-gx-n my-0">

                        <!-- List -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#" class="text-reset">Send Message</a>
                            </li>

                            <li class="list-group-item">
                                <a href="#" class="text-danger">Block User</a>
                            </li>
                        </ul>
                        <!-- List -->
                    </div>
                    <!-- Modal body -->

                </div>
            </div>
        </div>

        <!-- Modal: Media Preview -->
        <div class="modal fade" id="modal-media-preview" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-xl-down">
                <div class="modal-content">

                    <!-- Modal: Header -->
                    <div class="modal-header">
                        <button type="button" class="btn-close btn-close-arrow" data-bs-dismiss="modal" aria-label="Close"></button>

                        <div>
                            <!-- Dropdown -->
                            <div class="dropdown">
                                <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Download
                                            <div class="icon ms-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud"><polyline points="8 17 12 21 16 17"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path></svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            Share
                                            <div class="icon ms-auto">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                            </div>
                                        </a>
                                    </li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                            <span class="me-auto">Delete</span>
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Dropdown -->
                        </div>
                    </div>
                    <!-- Modal: Header -->

                    <!-- Modal: Body -->
                    <div class="modal-body p-0">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <img class="img-fluid modal-preview-url" src="#" alt="#">
                        </div>
                    </div>
                    <!-- Modal: Body -->

                    <!-- Modal: Footer -->
                    <div class="modal-footer">
                        <div class="w-100 text-center">
                            <h6><a href="#">Marshall Wallaker</a></h6>
                            <p class="small">Today at 14:43</p>
                        </div>
                    </div>
                    <!-- Modal: Footer -->
                </div>
            </div>
        </div>

        <!-- Scripts -->
        <script src="./assets/js/vendor.js"></script>
        <script src="./assets/js/template.js"></script><div class="emoji-picker__wrapper" style="display: none; z-index: 1041;"><div class="emoji-picker light" style="--emoji-per-row: 10; --row-count: 8; --emoji-size: 1.125rem; --category-button-height: 0;"><div class="emoji-picker__search-container"><input class="emoji-picker__search form-control" placeholder="Search"><span class="emoji-picker__search-icon"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg></span></div><div class="emoji-picker__content"><div class="emoji-picker__emoji-area"><div class="emoji-picker__emojis"><h2 class="emoji-picker__category-name">Frequently Used</h2><div class="emoji-picker__container"></div><h2 class="emoji-picker__category-name">Faces &amp; Emotion</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="0" data-emoji="😀" title="grinning face">😀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😃" title="grinning face with big eyes">😃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😄" title="grinning face with smiling eyes">😄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😁" title="beaming face with smiling eyes">😁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😆" title="grinning squinting face">😆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😅" title="grinning face with sweat">😅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤣" title="rolling on the floor laughing">🤣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😂" title="face with tears of joy">😂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙂" title="slightly smiling face">🙂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙃" title="upside-down face">🙃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😉" title="winking face">😉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😊" title="smiling face with smiling eyes">😊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😇" title="smiling face with halo">😇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥰" title="smiling face with hearts">🥰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😍" title="smiling face with heart-eyes">😍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤩" title="star-struck">🤩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😘" title="face blowing a kiss">😘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😗" title="kissing face">😗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😚" title="kissing face with closed eyes">😚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😙" title="kissing face with smiling eyes">😙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😋" title="face savoring food">😋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😛" title="face with tongue">😛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😜" title="winking face with tongue">😜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤪" title="zany face">🤪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😝" title="squinting face with tongue">😝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤑" title="money-mouth face">🤑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤗" title="hugging face">🤗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤭" title="face with hand over mouth">🤭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤫" title="shushing face">🤫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤔" title="thinking face">🤔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤐" title="zipper-mouth face">🤐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤨" title="face with raised eyebrow">🤨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😐" title="neutral face">😐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😑" title="expressionless face">😑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😶" title="face without mouth">😶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😏" title="smirking face">😏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😒" title="unamused face">😒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙄" title="face with rolling eyes">🙄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😬" title="grimacing face">😬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤥" title="lying face">🤥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😌" title="relieved face">😌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😔" title="pensive face">😔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😪" title="sleepy face">😪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤤" title="drooling face">🤤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😴" title="sleeping face">😴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😷" title="face with medical mask">😷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤒" title="face with thermometer">🤒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤕" title="face with head-bandage">🤕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤢" title="nauseated face">🤢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤮" title="face vomiting">🤮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤧" title="sneezing face">🤧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥵" title="hot face">🥵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥶" title="cold face">🥶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥴" title="woozy face">🥴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😵" title="dizzy face">😵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤯" title="exploding head">🤯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤠" title="cowboy hat face">🤠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥳" title="partying face">🥳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😎" title="smiling face with sunglasses">😎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤓" title="nerd face">🤓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧐" title="face with monocle">🧐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😕" title="confused face">😕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😟" title="worried face">😟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙁" title="slightly frowning face">🙁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☹️" title="frowning face">☹️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😮" title="face with open mouth">😮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😯" title="hushed face">😯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😲" title="astonished face">😲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😳" title="flushed face">😳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥺" title="pleading face">🥺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😦" title="frowning face with open mouth">😦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😧" title="anguished face">😧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😨" title="fearful face">😨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😰" title="anxious face with sweat">😰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😥" title="sad but relieved face">😥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😢" title="crying face">😢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😭" title="loudly crying face">😭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😱" title="face screaming in fear">😱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😖" title="confounded face">😖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😣" title="persevering face">😣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😞" title="disappointed face">😞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😓" title="downcast face with sweat">😓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😩" title="weary face">😩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😫" title="tired face">😫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥱" title="yawning face">🥱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😤" title="face with steam from nose">😤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😡" title="pouting face">😡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😠" title="angry face">😠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤬" title="face with symbols on mouth">🤬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😈" title="smiling face with horns">😈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👿" title="angry face with horns">👿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💀" title="skull">💀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☠️" title="skull and crossbones">☠️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💩" title="pile of poo">💩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤡" title="clown face">🤡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👹" title="ogre">👹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👺" title="goblin">👺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👻" title="ghost">👻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👽" title="alien">👽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👾" title="alien monster">👾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤖" title="robot">🤖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😺" title="grinning cat">😺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😸" title="grinning cat with smiling eyes">😸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😹" title="cat with tears of joy">😹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😻" title="smiling cat with heart-eyes">😻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😼" title="cat with wry smile">😼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😽" title="kissing cat">😽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙀" title="weary cat">🙀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😿" title="crying cat">😿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="😾" title="pouting cat">😾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙈" title="see-no-evil monkey">🙈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙉" title="hear-no-evil monkey">🙉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙊" title="speak-no-evil monkey">🙊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💋" title="kiss mark">💋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💌" title="love letter">💌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💘" title="heart with arrow">💘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💝" title="heart with ribbon">💝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💖" title="sparkling heart">💖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💗" title="growing heart">💗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💓" title="beating heart">💓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💞" title="revolving hearts">💞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💕" title="two hearts">💕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💟" title="heart decoration">💟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❣️" title="heart exclamation">❣️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💔" title="broken heart">💔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❤️" title="red heart">❤️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧡" title="orange heart">🧡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💛" title="yellow heart">💛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💚" title="green heart">💚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💙" title="blue heart">💙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💜" title="purple heart">💜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤎" title="brown heart">🤎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖤" title="black heart">🖤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤍" title="white heart">🤍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💯" title="hundred points">💯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💢" title="anger symbol">💢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💥" title="collision">💥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💫" title="dizzy">💫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💦" title="sweat droplets">💦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💨" title="dashing away">💨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕳️" title="hole">🕳️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💣" title="bomb">💣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💬" title="speech balloon">💬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👁️‍🗨️" title="eye in speech bubble">👁️‍🗨️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗨️" title="left speech bubble">🗨️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗯️" title="right anger bubble">🗯️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💭" title="thought balloon">💭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💤" title="zzz">💤</button></div><h2 class="emoji-picker__category-name">People &amp; Body</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👋" title="waving hand">👋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤚" title="raised back of hand">🤚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖐️" title="hand with fingers splayed">🖐️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✋" title="raised hand">✋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖖" title="vulcan salute">🖖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👌" title="OK hand">👌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤏" title="pinching hand">🤏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✌️" title="victory hand">✌️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤞" title="crossed fingers">🤞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤟" title="love-you gesture">🤟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤘" title="sign of the horns">🤘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤙" title="call me hand">🤙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👈" title="backhand index pointing left">👈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👉" title="backhand index pointing right">👉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👆" title="backhand index pointing up">👆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖕" title="middle finger">🖕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👇" title="backhand index pointing down">👇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☝️" title="index pointing up">☝️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👍" title="thumbs up">👍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👎" title="thumbs down">👎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✊" title="raised fist">✊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👊" title="oncoming fist">👊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤛" title="left-facing fist">🤛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤜" title="right-facing fist">🤜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👏" title="clapping hands">👏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙌" title="raising hands">🙌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👐" title="open hands">👐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤲" title="palms up together">🤲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤝" title="handshake">🤝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙏" title="folded hands">🙏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✍️" title="writing hand">✍️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💅" title="nail polish">💅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤳" title="selfie">🤳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💪" title="flexed biceps">💪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦾" title="mechanical arm">🦾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦿" title="mechanical leg">🦿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦵" title="leg">🦵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦶" title="foot">🦶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👂" title="ear">👂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦻" title="ear with hearing aid">🦻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👃" title="nose">👃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧠" title="brain">🧠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦷" title="tooth">🦷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦴" title="bone">🦴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👀" title="eyes">👀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👁️" title="eye">👁️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👅" title="tongue">👅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👄" title="mouth">👄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👶" title="baby">👶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧒" title="child">🧒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👦" title="boy">👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👧" title="girl">👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑" title="person">🧑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👱" title="person with blond hair">👱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨" title="man">👨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧔" title="man with beard">🧔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦰" title="man with red hair">👨‍🦰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦱" title="man with curly hair">👨‍🦱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦳" title="man with white hair">👨‍🦳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦲" title="man with no hair">👨‍🦲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩" title="woman">👩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦰" title="woman with red hair">👩‍🦰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦰" title="person with red hair">🧑‍🦰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦱" title="woman with curly hair">👩‍🦱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦱" title="person with curly hair">🧑‍🦱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦳" title="woman with white hair">👩‍🦳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦳" title="person with white hair">🧑‍🦳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦲" title="woman with no hair">👩‍🦲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦲" title="person with no hair">🧑‍🦲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👱‍♀️" title="woman with blond hair">👱‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👱‍♂️" title="man with blond hair">👱‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧓" title="older person">🧓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👴" title="old man">👴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👵" title="old woman">👵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙍" title="person frowning">🙍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙍‍♂️" title="man frowning">🙍‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙍‍♀️" title="woman frowning">🙍‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙎" title="person pouting">🙎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙎‍♂️" title="man pouting">🙎‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙎‍♀️" title="woman pouting">🙎‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙅" title="person gesturing NO">🙅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙅‍♂️" title="man gesturing NO">🙅‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙅‍♀️" title="woman gesturing NO">🙅‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙆" title="person gesturing OK">🙆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙆‍♂️" title="man gesturing OK">🙆‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙆‍♀️" title="woman gesturing OK">🙆‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💁" title="person tipping hand">💁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💁‍♂️" title="man tipping hand">💁‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💁‍♀️" title="woman tipping hand">💁‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙋" title="person raising hand">🙋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙋‍♂️" title="man raising hand">🙋‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙋‍♀️" title="woman raising hand">🙋‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧏" title="deaf person">🧏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧏‍♂️" title="deaf man">🧏‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧏‍♀️" title="deaf woman">🧏‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙇" title="person bowing">🙇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙇‍♂️" title="man bowing">🙇‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🙇‍♀️" title="woman bowing">🙇‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤦" title="person facepalming">🤦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤦‍♂️" title="man facepalming">🤦‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤦‍♀️" title="woman facepalming">🤦‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤷" title="person shrugging">🤷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤷‍♂️" title="man shrugging">🤷‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤷‍♀️" title="woman shrugging">🤷‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍⚕️" title="health worker">🧑‍⚕️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍⚕️" title="man health worker">👨‍⚕️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍⚕️" title="woman health worker">👩‍⚕️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🎓" title="student">🧑‍🎓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🎓" title="man student">👨‍🎓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🎓" title="woman student">👩‍🎓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🏫" title="teacher">🧑‍🏫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🏫" title="man teacher">👨‍🏫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🏫" title="woman teacher">👩‍🏫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍⚖️" title="judge">🧑‍⚖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍⚖️" title="man judge">👨‍⚖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍⚖️" title="woman judge">👩‍⚖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🌾" title="farmer">🧑‍🌾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🌾" title="man farmer">👨‍🌾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🌾" title="woman farmer">👩‍🌾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🍳" title="cook">🧑‍🍳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🍳" title="man cook">👨‍🍳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🍳" title="woman cook">👩‍🍳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🔧" title="mechanic">🧑‍🔧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🔧" title="man mechanic">👨‍🔧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🔧" title="woman mechanic">👩‍🔧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🏭" title="factory worker">🧑‍🏭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🏭" title="man factory worker">👨‍🏭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🏭" title="woman factory worker">👩‍🏭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍💼" title="office worker">🧑‍💼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍💼" title="man office worker">👨‍💼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍💼" title="woman office worker">👩‍💼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🔬" title="scientist">🧑‍🔬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🔬" title="man scientist">👨‍🔬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🔬" title="woman scientist">👩‍🔬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍💻" title="technologist">🧑‍💻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍💻" title="man technologist">👨‍💻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍💻" title="woman technologist">👩‍💻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🎤" title="singer">🧑‍🎤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🎤" title="man singer">👨‍🎤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🎤" title="woman singer">👩‍🎤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🎨" title="artist">🧑‍🎨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🎨" title="man artist">👨‍🎨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🎨" title="woman artist">👩‍🎨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍✈️" title="pilot">🧑‍✈️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍✈️" title="man pilot">👨‍✈️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍✈️" title="woman pilot">👩‍✈️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🚀" title="astronaut">🧑‍🚀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🚀" title="man astronaut">👨‍🚀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🚀" title="woman astronaut">👩‍🚀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🚒" title="firefighter">🧑‍🚒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🚒" title="man firefighter">👨‍🚒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🚒" title="woman firefighter">👩‍🚒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👮" title="police officer">👮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👮‍♂️" title="man police officer">👮‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👮‍♀️" title="woman police officer">👮‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕵️" title="detective">🕵️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕵️‍♂️" title="man detective">🕵️‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕵️‍♀️" title="woman detective">🕵️‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💂" title="guard">💂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💂‍♂️" title="man guard">💂‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💂‍♀️" title="woman guard">💂‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👷" title="construction worker">👷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👷‍♂️" title="man construction worker">👷‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👷‍♀️" title="woman construction worker">👷‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤴" title="prince">🤴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👸" title="princess">👸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👳" title="person wearing turban">👳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👳‍♂️" title="man wearing turban">👳‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👳‍♀️" title="woman wearing turban">👳‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👲" title="person with skullcap">👲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧕" title="woman with headscarf">🧕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤵" title="person in tuxedo">🤵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👰" title="person with veil">👰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤰" title="pregnant woman">🤰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤱" title="breast-feeding">🤱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👼" title="baby angel">👼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎅" title="Santa Claus">🎅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤶" title="Mrs. Claus">🤶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦸" title="superhero">🦸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦸‍♂️" title="man superhero">🦸‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦸‍♀️" title="woman superhero">🦸‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦹" title="supervillain">🦹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦹‍♂️" title="man supervillain">🦹‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦹‍♀️" title="woman supervillain">🦹‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧙" title="mage">🧙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧙‍♂️" title="man mage">🧙‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧙‍♀️" title="woman mage">🧙‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧚" title="fairy">🧚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧚‍♂️" title="man fairy">🧚‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧚‍♀️" title="woman fairy">🧚‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧛" title="vampire">🧛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧛‍♂️" title="man vampire">🧛‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧛‍♀️" title="woman vampire">🧛‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧜" title="merperson">🧜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧜‍♂️" title="merman">🧜‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧜‍♀️" title="mermaid">🧜‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧝" title="elf">🧝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧝‍♂️" title="man elf">🧝‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧝‍♀️" title="woman elf">🧝‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧞" title="genie">🧞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧞‍♂️" title="man genie">🧞‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧞‍♀️" title="woman genie">🧞‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧟" title="zombie">🧟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧟‍♂️" title="man zombie">🧟‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧟‍♀️" title="woman zombie">🧟‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💆" title="person getting massage">💆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💆‍♂️" title="man getting massage">💆‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💆‍♀️" title="woman getting massage">💆‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💇" title="person getting haircut">💇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💇‍♂️" title="man getting haircut">💇‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💇‍♀️" title="woman getting haircut">💇‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚶" title="person walking">🚶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚶‍♂️" title="man walking">🚶‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚶‍♀️" title="woman walking">🚶‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧍" title="person standing">🧍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧍‍♂️" title="man standing">🧍‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧍‍♀️" title="woman standing">🧍‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧎" title="person kneeling">🧎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧎‍♂️" title="man kneeling">🧎‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧎‍♀️" title="woman kneeling">🧎‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦯" title="person with white cane">🧑‍🦯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦯" title="man with white cane">👨‍🦯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦯" title="woman with white cane">👩‍🦯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦼" title="person in motorized wheelchair">🧑‍🦼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦼" title="man in motorized wheelchair">👨‍🦼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦼" title="woman in motorized wheelchair">👩‍🦼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🦽" title="person in manual wheelchair">🧑‍🦽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍🦽" title="man in manual wheelchair">👨‍🦽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍🦽" title="woman in manual wheelchair">👩‍🦽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏃" title="person running">🏃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏃‍♂️" title="man running">🏃‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏃‍♀️" title="woman running">🏃‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💃" title="woman dancing">💃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕺" title="man dancing">🕺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕴️" title="person in suit levitating">🕴️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👯" title="people with bunny ears">👯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👯‍♂️" title="men with bunny ears">👯‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👯‍♀️" title="women with bunny ears">👯‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧖" title="person in steamy room">🧖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧖‍♂️" title="man in steamy room">🧖‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧖‍♀️" title="woman in steamy room">🧖‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧗" title="person climbing">🧗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧗‍♂️" title="man climbing">🧗‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧗‍♀️" title="woman climbing">🧗‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤺" title="person fencing">🤺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏇" title="horse racing">🏇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛷️" title="skier">⛷️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏂" title="snowboarder">🏂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏌️" title="person golfing">🏌️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏌️‍♂️" title="man golfing">🏌️‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏌️‍♀️" title="woman golfing">🏌️‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏄" title="person surfing">🏄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏄‍♂️" title="man surfing">🏄‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏄‍♀️" title="woman surfing">🏄‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚣" title="person rowing boat">🚣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚣‍♂️" title="man rowing boat">🚣‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚣‍♀️" title="woman rowing boat">🚣‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏊" title="person swimming">🏊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏊‍♂️" title="man swimming">🏊‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏊‍♀️" title="woman swimming">🏊‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛹️" title="person bouncing ball">⛹️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛹️‍♂️" title="man bouncing ball">⛹️‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛹️‍♀️" title="woman bouncing ball">⛹️‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏋️" title="person lifting weights">🏋️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏋️‍♂️" title="man lifting weights">🏋️‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏋️‍♀️" title="woman lifting weights">🏋️‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚴" title="person biking">🚴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚴‍♂️" title="man biking">🚴‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚴‍♀️" title="woman biking">🚴‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚵" title="person mountain biking">🚵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚵‍♂️" title="man mountain biking">🚵‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚵‍♀️" title="woman mountain biking">🚵‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤸" title="person cartwheeling">🤸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤸‍♂️" title="man cartwheeling">🤸‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤸‍♀️" title="woman cartwheeling">🤸‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤼" title="people wrestling">🤼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤼‍♂️" title="men wrestling">🤼‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤼‍♀️" title="women wrestling">🤼‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤽" title="person playing water polo">🤽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤽‍♂️" title="man playing water polo">🤽‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤽‍♀️" title="woman playing water polo">🤽‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤾" title="person playing handball">🤾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤾‍♂️" title="man playing handball">🤾‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤾‍♀️" title="woman playing handball">🤾‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤹" title="person juggling">🤹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤹‍♂️" title="man juggling">🤹‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤹‍♀️" title="woman juggling">🤹‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧘" title="person in lotus position">🧘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧘‍♂️" title="man in lotus position">🧘‍♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧘‍♀️" title="woman in lotus position">🧘‍♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛀" title="person taking bath">🛀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛌" title="person in bed">🛌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧑‍🤝‍🧑" title="people holding hands">🧑‍🤝‍🧑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👭" title="women holding hands">👭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👫" title="woman and man holding hands">👫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👬" title="men holding hands">👬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💏" title="kiss">💏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💑" title="couple with heart">💑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👪" title="family">👪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👩‍👦" title="family: man, woman, boy">👨‍👩‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👩‍👧" title="family: man, woman, girl">👨‍👩‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👩‍👧‍👦" title="family: man, woman, girl, boy">👨‍👩‍👧‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👩‍👦‍👦" title="family: man, woman, boy, boy">👨‍👩‍👦‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👩‍👧‍👧" title="family: man, woman, girl, girl">👨‍👩‍👧‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👨‍👦" title="family: man, man, boy">👨‍👨‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👨‍👧" title="family: man, man, girl">👨‍👨‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👨‍👧‍👦" title="family: man, man, girl, boy">👨‍👨‍👧‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👨‍👦‍👦" title="family: man, man, boy, boy">👨‍👨‍👦‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👨‍👧‍👧" title="family: man, man, girl, girl">👨‍👨‍👧‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👩‍👦" title="family: woman, woman, boy">👩‍👩‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👩‍👧" title="family: woman, woman, girl">👩‍👩‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👩‍👧‍👦" title="family: woman, woman, girl, boy">👩‍👩‍👧‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👩‍👦‍👦" title="family: woman, woman, boy, boy">👩‍👩‍👦‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👩‍👧‍👧" title="family: woman, woman, girl, girl">👩‍👩‍👧‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👦" title="family: man, boy">👨‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👦‍👦" title="family: man, boy, boy">👨‍👦‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👧" title="family: man, girl">👨‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👧‍👦" title="family: man, girl, boy">👨‍👧‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👨‍👧‍👧" title="family: man, girl, girl">👨‍👧‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👦" title="family: woman, boy">👩‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👦‍👦" title="family: woman, boy, boy">👩‍👦‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👧" title="family: woman, girl">👩‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👧‍👦" title="family: woman, girl, boy">👩‍👧‍👦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👩‍👧‍👧" title="family: woman, girl, girl">👩‍👧‍👧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗣️" title="speaking head">🗣️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👤" title="bust in silhouette">👤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👥" title="busts in silhouette">👥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👣" title="footprints">👣</button></div><h2 class="emoji-picker__category-name">Animals &amp; Nature</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐵" title="monkey face">🐵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐒" title="monkey">🐒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦍" title="gorilla">🦍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦧" title="orangutan">🦧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐶" title="dog face">🐶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐕" title="dog">🐕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦮" title="guide dog">🦮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐕‍🦺" title="service dog">🐕‍🦺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐩" title="poodle">🐩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐺" title="wolf">🐺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦊" title="fox">🦊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦝" title="raccoon">🦝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐱" title="cat face">🐱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐈" title="cat">🐈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦁" title="lion">🦁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐯" title="tiger face">🐯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐅" title="tiger">🐅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐆" title="leopard">🐆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐴" title="horse face">🐴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐎" title="horse">🐎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦄" title="unicorn">🦄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦓" title="zebra">🦓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦌" title="deer">🦌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐮" title="cow face">🐮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐂" title="ox">🐂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐃" title="water buffalo">🐃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐄" title="cow">🐄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐷" title="pig face">🐷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐖" title="pig">🐖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐗" title="boar">🐗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐽" title="pig nose">🐽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐏" title="ram">🐏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐑" title="ewe">🐑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐐" title="goat">🐐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐪" title="camel">🐪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐫" title="two-hump camel">🐫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦙" title="llama">🦙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦒" title="giraffe">🦒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐘" title="elephant">🐘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦏" title="rhinoceros">🦏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦛" title="hippopotamus">🦛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐭" title="mouse face">🐭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐁" title="mouse">🐁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐀" title="rat">🐀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐹" title="hamster">🐹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐰" title="rabbit face">🐰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐇" title="rabbit">🐇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐿️" title="chipmunk">🐿️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦔" title="hedgehog">🦔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦇" title="bat">🦇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐻" title="bear">🐻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐨" title="koala">🐨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐼" title="panda">🐼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦥" title="sloth">🦥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦦" title="otter">🦦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦨" title="skunk">🦨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦘" title="kangaroo">🦘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦡" title="badger">🦡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐾" title="paw prints">🐾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦃" title="turkey">🦃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐔" title="chicken">🐔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐓" title="rooster">🐓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐣" title="hatching chick">🐣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐤" title="baby chick">🐤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐥" title="front-facing baby chick">🐥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐦" title="bird">🐦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐧" title="penguin">🐧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕊️" title="dove">🕊️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦅" title="eagle">🦅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦆" title="duck">🦆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦢" title="swan">🦢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦉" title="owl">🦉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦩" title="flamingo">🦩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦚" title="peacock">🦚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦜" title="parrot">🦜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐸" title="frog">🐸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐊" title="crocodile">🐊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐢" title="turtle">🐢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦎" title="lizard">🦎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐍" title="snake">🐍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐲" title="dragon face">🐲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐉" title="dragon">🐉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦕" title="sauropod">🦕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦖" title="T-Rex">🦖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐳" title="spouting whale">🐳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐋" title="whale">🐋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐬" title="dolphin">🐬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐟" title="fish">🐟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐠" title="tropical fish">🐠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐡" title="blowfish">🐡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦈" title="shark">🦈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐙" title="octopus">🐙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐚" title="spiral shell">🐚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐌" title="snail">🐌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦋" title="butterfly">🦋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐛" title="bug">🐛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐜" title="ant">🐜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐝" title="honeybee">🐝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🐞" title="lady beetle">🐞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦗" title="cricket">🦗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕷️" title="spider">🕷️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕸️" title="spider web">🕸️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦂" title="scorpion">🦂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦟" title="mosquito">🦟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦠" title="microbe">🦠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💐" title="bouquet">💐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌸" title="cherry blossom">🌸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💮" title="white flower">💮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏵️" title="rosette">🏵️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌹" title="rose">🌹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥀" title="wilted flower">🥀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌺" title="hibiscus">🌺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌻" title="sunflower">🌻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌼" title="blossom">🌼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌷" title="tulip">🌷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌱" title="seedling">🌱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌲" title="evergreen tree">🌲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌳" title="deciduous tree">🌳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌴" title="palm tree">🌴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌵" title="cactus">🌵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌾" title="sheaf of rice">🌾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌿" title="herb">🌿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☘️" title="shamrock">☘️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍀" title="four leaf clover">🍀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍁" title="maple leaf">🍁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍂" title="fallen leaf">🍂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍃" title="leaf fluttering in wind">🍃</button></div><h2 class="emoji-picker__category-name">Food &amp; Drink</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍇" title="grapes">🍇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍈" title="melon">🍈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍉" title="watermelon">🍉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍊" title="tangerine">🍊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍋" title="lemon">🍋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍌" title="banana">🍌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍍" title="pineapple">🍍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥭" title="mango">🥭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍎" title="red apple">🍎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍏" title="green apple">🍏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍐" title="pear">🍐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍑" title="peach">🍑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍒" title="cherries">🍒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍓" title="strawberry">🍓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥝" title="kiwi fruit">🥝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍅" title="tomato">🍅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥥" title="coconut">🥥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥑" title="avocado">🥑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍆" title="eggplant">🍆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥔" title="potato">🥔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥕" title="carrot">🥕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌽" title="ear of corn">🌽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌶️" title="hot pepper">🌶️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥒" title="cucumber">🥒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥬" title="leafy green">🥬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥦" title="broccoli">🥦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧄" title="garlic">🧄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧅" title="onion">🧅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍄" title="mushroom">🍄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥜" title="peanuts">🥜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌰" title="chestnut">🌰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍞" title="bread">🍞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥐" title="croissant">🥐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥖" title="baguette bread">🥖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥨" title="pretzel">🥨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥯" title="bagel">🥯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥞" title="pancakes">🥞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧇" title="waffle">🧇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧀" title="cheese wedge">🧀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍖" title="meat on bone">🍖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍗" title="poultry leg">🍗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥩" title="cut of meat">🥩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥓" title="bacon">🥓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍔" title="hamburger">🍔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍟" title="french fries">🍟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍕" title="pizza">🍕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌭" title="hot dog">🌭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥪" title="sandwich">🥪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌮" title="taco">🌮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌯" title="burrito">🌯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥙" title="stuffed flatbread">🥙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧆" title="falafel">🧆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥚" title="egg">🥚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍳" title="cooking">🍳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥘" title="shallow pan of food">🥘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍲" title="pot of food">🍲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥣" title="bowl with spoon">🥣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥗" title="green salad">🥗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍿" title="popcorn">🍿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧈" title="butter">🧈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧂" title="salt">🧂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥫" title="canned food">🥫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍱" title="bento box">🍱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍘" title="rice cracker">🍘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍙" title="rice ball">🍙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍚" title="cooked rice">🍚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍛" title="curry rice">🍛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍜" title="steaming bowl">🍜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍝" title="spaghetti">🍝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍠" title="roasted sweet potato">🍠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍢" title="oden">🍢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍣" title="sushi">🍣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍤" title="fried shrimp">🍤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍥" title="fish cake with swirl">🍥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥮" title="moon cake">🥮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍡" title="dango">🍡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥟" title="dumpling">🥟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥠" title="fortune cookie">🥠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥡" title="takeout box">🥡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦀" title="crab">🦀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦞" title="lobster">🦞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦐" title="shrimp">🦐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦑" title="squid">🦑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦪" title="oyster">🦪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍦" title="soft ice cream">🍦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍧" title="shaved ice">🍧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍨" title="ice cream">🍨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍩" title="doughnut">🍩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍪" title="cookie">🍪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎂" title="birthday cake">🎂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍰" title="shortcake">🍰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧁" title="cupcake">🧁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥧" title="pie">🥧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍫" title="chocolate bar">🍫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍬" title="candy">🍬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍭" title="lollipop">🍭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍮" title="custard">🍮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍯" title="honey pot">🍯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍼" title="baby bottle">🍼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥛" title="glass of milk">🥛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☕" title="hot beverage">☕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍵" title="teacup without handle">🍵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍶" title="sake">🍶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍾" title="bottle with popping cork">🍾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍷" title="wine glass">🍷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍸" title="cocktail glass">🍸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍹" title="tropical drink">🍹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍺" title="beer mug">🍺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍻" title="clinking beer mugs">🍻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥂" title="clinking glasses">🥂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥃" title="tumbler glass">🥃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥤" title="cup with straw">🥤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧃" title="beverage box">🧃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧉" title="mate">🧉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧊" title="ice">🧊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥢" title="chopsticks">🥢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍽️" title="fork and knife with plate">🍽️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🍴" title="fork and knife">🍴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥄" title="spoon">🥄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔪" title="kitchen knife">🔪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏺" title="amphora">🏺</button></div><h2 class="emoji-picker__category-name">Activities</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎃" title="jack-o-lantern">🎃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎄" title="Christmas tree">🎄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎆" title="fireworks">🎆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎇" title="sparkler">🎇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧨" title="firecracker">🧨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✨" title="sparkles">✨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎈" title="balloon">🎈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎉" title="party popper">🎉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎊" title="confetti ball">🎊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎋" title="tanabata tree">🎋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎍" title="pine decoration">🎍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎎" title="Japanese dolls">🎎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎏" title="carp streamer">🎏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎐" title="wind chime">🎐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎑" title="moon viewing ceremony">🎑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧧" title="red envelope">🧧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎀" title="ribbon">🎀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎁" title="wrapped gift">🎁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎗️" title="reminder ribbon">🎗️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎟️" title="admission tickets">🎟️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎫" title="ticket">🎫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎖️" title="military medal">🎖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏆" title="trophy">🏆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏅" title="sports medal">🏅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥇" title="1st place medal">🥇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥈" title="2nd place medal">🥈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥉" title="3rd place medal">🥉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚽" title="soccer ball">⚽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚾" title="baseball">⚾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥎" title="softball">🥎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏀" title="basketball">🏀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏐" title="volleyball">🏐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏈" title="american football">🏈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏉" title="rugby football">🏉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎾" title="tennis">🎾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥏" title="flying disc">🥏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎳" title="bowling">🎳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏏" title="cricket game">🏏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏑" title="field hockey">🏑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏒" title="ice hockey">🏒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥍" title="lacrosse">🥍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏓" title="ping pong">🏓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏸" title="badminton">🏸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥊" title="boxing glove">🥊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥋" title="martial arts uniform">🥋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥅" title="goal net">🥅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛳" title="flag in hole">⛳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛸️" title="ice skate">⛸️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎣" title="fishing pole">🎣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🤿" title="diving mask">🤿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎽" title="running shirt">🎽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎿" title="skis">🎿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛷" title="sled">🛷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥌" title="curling stone">🥌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎯" title="direct hit">🎯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪀" title="yo-yo">🪀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪁" title="kite">🪁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎱" title="pool 8 ball">🎱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔮" title="crystal ball">🔮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧿" title="nazar amulet">🧿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎮" title="video game">🎮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕹️" title="joystick">🕹️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎰" title="slot machine">🎰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎲" title="game die">🎲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧩" title="puzzle piece">🧩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧸" title="teddy bear">🧸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♠️" title="spade suit">♠️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♥️" title="heart suit">♥️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♦️" title="diamond suit">♦️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♣️" title="club suit">♣️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♟️" title="chess pawn">♟️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🃏" title="joker">🃏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🀄" title="mahjong red dragon">🀄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎴" title="flower playing cards">🎴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎭" title="performing arts">🎭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖼️" title="framed picture">🖼️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎨" title="artist palette">🎨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧵" title="thread">🧵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧶" title="yarn">🧶</button></div><h2 class="emoji-picker__category-name">Travel &amp; Places</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌍" title="globe showing Europe-Africa">🌍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌎" title="globe showing Americas">🌎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌏" title="globe showing Asia-Australia">🌏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌐" title="globe with meridians">🌐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗺️" title="world map">🗺️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗾" title="map of Japan">🗾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧭" title="compass">🧭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏔️" title="snow-capped mountain">🏔️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛰️" title="mountain">⛰️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌋" title="volcano">🌋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗻" title="mount fuji">🗻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏕️" title="camping">🏕️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏖️" title="beach with umbrella">🏖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏜️" title="desert">🏜️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏝️" title="desert island">🏝️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏞️" title="national park">🏞️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏟️" title="stadium">🏟️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏛️" title="classical building">🏛️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏗️" title="building construction">🏗️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧱" title="brick">🧱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏘️" title="houses">🏘️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏚️" title="derelict house">🏚️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏠" title="house">🏠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏡" title="house with garden">🏡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏢" title="office building">🏢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏣" title="Japanese post office">🏣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏤" title="post office">🏤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏥" title="hospital">🏥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏦" title="bank">🏦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏨" title="hotel">🏨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏩" title="love hotel">🏩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏪" title="convenience store">🏪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏫" title="school">🏫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏬" title="department store">🏬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏭" title="factory">🏭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏯" title="Japanese castle">🏯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏰" title="castle">🏰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💒" title="wedding">💒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗼" title="Tokyo tower">🗼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗽" title="Statue of Liberty">🗽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛪" title="church">⛪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕌" title="mosque">🕌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛕" title="hindu temple">🛕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕍" title="synagogue">🕍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛩️" title="shinto shrine">⛩️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕋" title="kaaba">🕋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛲" title="fountain">⛲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛺" title="tent">⛺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌁" title="foggy">🌁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌃" title="night with stars">🌃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏙️" title="cityscape">🏙️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌄" title="sunrise over mountains">🌄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌅" title="sunrise">🌅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌆" title="cityscape at dusk">🌆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌇" title="sunset">🌇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌉" title="bridge at night">🌉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♨️" title="hot springs">♨️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎠" title="carousel horse">🎠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎡" title="ferris wheel">🎡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎢" title="roller coaster">🎢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💈" title="barber pole">💈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎪" title="circus tent">🎪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚂" title="locomotive">🚂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚃" title="railway car">🚃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚄" title="high-speed train">🚄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚅" title="bullet train">🚅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚆" title="train">🚆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚇" title="metro">🚇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚈" title="light rail">🚈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚉" title="station">🚉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚊" title="tram">🚊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚝" title="monorail">🚝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚞" title="mountain railway">🚞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚋" title="tram car">🚋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚌" title="bus">🚌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚍" title="oncoming bus">🚍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚎" title="trolleybus">🚎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚐" title="minibus">🚐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚑" title="ambulance">🚑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚒" title="fire engine">🚒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚓" title="police car">🚓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚔" title="oncoming police car">🚔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚕" title="taxi">🚕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚖" title="oncoming taxi">🚖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚗" title="automobile">🚗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚘" title="oncoming automobile">🚘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚙" title="sport utility vehicle">🚙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚚" title="delivery truck">🚚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚛" title="articulated lorry">🚛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚜" title="tractor">🚜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏎️" title="racing car">🏎️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏍️" title="motorcycle">🏍️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛵" title="motor scooter">🛵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦽" title="manual wheelchair">🦽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦼" title="motorized wheelchair">🦼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛺" title="auto rickshaw">🛺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚲" title="bicycle">🚲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛴" title="kick scooter">🛴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛹" title="skateboard">🛹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚏" title="bus stop">🚏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛣️" title="motorway">🛣️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛤️" title="railway track">🛤️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛢️" title="oil drum">🛢️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛽" title="fuel pump">⛽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚨" title="police car light">🚨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚥" title="horizontal traffic light">🚥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚦" title="vertical traffic light">🚦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛑" title="stop sign">🛑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚧" title="construction">🚧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚓" title="anchor">⚓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛵" title="sailboat">⛵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛶" title="canoe">🛶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚤" title="speedboat">🚤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛳️" title="passenger ship">🛳️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛴️" title="ferry">⛴️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛥️" title="motor boat">🛥️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚢" title="ship">🚢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✈️" title="airplane">✈️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛩️" title="small airplane">🛩️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛫" title="airplane departure">🛫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛬" title="airplane arrival">🛬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪂" title="parachute">🪂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💺" title="seat">💺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚁" title="helicopter">🚁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚟" title="suspension railway">🚟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚠" title="mountain cableway">🚠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚡" title="aerial tramway">🚡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛰️" title="satellite">🛰️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚀" title="rocket">🚀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛸" title="flying saucer">🛸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛎️" title="bellhop bell">🛎️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧳" title="luggage">🧳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⌛" title="hourglass done">⌛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏳" title="hourglass not done">⏳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⌚" title="watch">⌚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏰" title="alarm clock">⏰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏱️" title="stopwatch">⏱️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏲️" title="timer clock">⏲️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕰️" title="mantelpiece clock">🕰️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕛" title="twelve o’clock">🕛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕧" title="twelve-thirty">🕧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕐" title="one o’clock">🕐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕜" title="one-thirty">🕜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕑" title="two o’clock">🕑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕝" title="two-thirty">🕝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕒" title="three o’clock">🕒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕞" title="three-thirty">🕞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕓" title="four o’clock">🕓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕟" title="four-thirty">🕟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕔" title="five o’clock">🕔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕠" title="five-thirty">🕠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕕" title="six o’clock">🕕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕡" title="six-thirty">🕡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕖" title="seven o’clock">🕖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕢" title="seven-thirty">🕢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕗" title="eight o’clock">🕗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕣" title="eight-thirty">🕣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕘" title="nine o’clock">🕘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕤" title="nine-thirty">🕤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕙" title="ten o’clock">🕙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕥" title="ten-thirty">🕥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕚" title="eleven o’clock">🕚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕦" title="eleven-thirty">🕦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌑" title="new moon">🌑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌒" title="waxing crescent moon">🌒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌓" title="first quarter moon">🌓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌔" title="waxing gibbous moon">🌔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌕" title="full moon">🌕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌖" title="waning gibbous moon">🌖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌗" title="last quarter moon">🌗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌘" title="waning crescent moon">🌘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌙" title="crescent moon">🌙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌚" title="new moon face">🌚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌛" title="first quarter moon face">🌛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌜" title="last quarter moon face">🌜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌡️" title="thermometer">🌡️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☀️" title="sun">☀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌝" title="full moon face">🌝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌞" title="sun with face">🌞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪐" title="ringed planet">🪐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⭐" title="star">⭐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌟" title="glowing star">🌟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌠" title="shooting star">🌠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌌" title="milky way">🌌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☁️" title="cloud">☁️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛅" title="sun behind cloud">⛅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛈️" title="cloud with lightning and rain">⛈️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌤️" title="sun behind small cloud">🌤️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌥️" title="sun behind large cloud">🌥️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌦️" title="sun behind rain cloud">🌦️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌧️" title="cloud with rain">🌧️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌨️" title="cloud with snow">🌨️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌩️" title="cloud with lightning">🌩️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌪️" title="tornado">🌪️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌫️" title="fog">🌫️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌬️" title="wind face">🌬️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌀" title="cyclone">🌀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌈" title="rainbow">🌈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌂" title="closed umbrella">🌂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☂️" title="umbrella">☂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☔" title="umbrella with rain drops">☔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛱️" title="umbrella on ground">⛱️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚡" title="high voltage">⚡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❄️" title="snowflake">❄️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☃️" title="snowman">☃️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛄" title="snowman without snow">⛄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☄️" title="comet">☄️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔥" title="fire">🔥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💧" title="droplet">💧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🌊" title="water wave">🌊</button></div><h2 class="emoji-picker__category-name">Objects</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👓" title="glasses">👓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕶️" title="sunglasses">🕶️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥽" title="goggles">🥽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥼" title="lab coat">🥼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦺" title="safety vest">🦺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👔" title="necktie">👔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👕" title="t-shirt">👕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👖" title="jeans">👖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧣" title="scarf">🧣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧤" title="gloves">🧤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧥" title="coat">🧥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧦" title="socks">🧦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👗" title="dress">👗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👘" title="kimono">👘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥻" title="sari">🥻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩱" title="one-piece swimsuit">🩱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩲" title="briefs">🩲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩳" title="shorts">🩳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👙" title="bikini">👙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👚" title="woman’s clothes">👚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👛" title="purse">👛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👜" title="handbag">👜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👝" title="clutch bag">👝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛍️" title="shopping bags">🛍️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎒" title="backpack">🎒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👞" title="man’s shoe">👞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👟" title="running shoe">👟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥾" title="hiking boot">🥾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥿" title="flat shoe">🥿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👠" title="high-heeled shoe">👠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👡" title="woman’s sandal">👡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩰" title="ballet shoes">🩰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👢" title="woman’s boot">👢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👑" title="crown">👑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="👒" title="woman’s hat">👒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎩" title="top hat">🎩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎓" title="graduation cap">🎓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧢" title="billed cap">🧢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛑️" title="rescue worker’s helmet">⛑️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📿" title="prayer beads">📿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💄" title="lipstick">💄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💍" title="ring">💍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💎" title="gem stone">💎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔇" title="muted speaker">🔇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔈" title="speaker low volume">🔈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔉" title="speaker medium volume">🔉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔊" title="speaker high volume">🔊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📢" title="loudspeaker">📢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📣" title="megaphone">📣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📯" title="postal horn">📯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔔" title="bell">🔔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔕" title="bell with slash">🔕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎼" title="musical score">🎼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎵" title="musical note">🎵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎶" title="musical notes">🎶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎙️" title="studio microphone">🎙️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎚️" title="level slider">🎚️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎛️" title="control knobs">🎛️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎤" title="microphone">🎤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎧" title="headphone">🎧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📻" title="radio">📻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎷" title="saxophone">🎷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎸" title="guitar">🎸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎹" title="musical keyboard">🎹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎺" title="trumpet">🎺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎻" title="violin">🎻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪕" title="banjo">🪕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🥁" title="drum">🥁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📱" title="mobile phone">📱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📲" title="mobile phone with arrow">📲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☎️" title="telephone">☎️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📞" title="telephone receiver">📞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📟" title="pager">📟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📠" title="fax machine">📠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔋" title="battery">🔋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔌" title="electric plug">🔌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💻" title="laptop">💻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖥️" title="desktop computer">🖥️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖨️" title="printer">🖨️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⌨️" title="keyboard">⌨️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖱️" title="computer mouse">🖱️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖲️" title="trackball">🖲️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💽" title="computer disk">💽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💾" title="floppy disk">💾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💿" title="optical disk">💿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📀" title="dvd">📀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧮" title="abacus">🧮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎥" title="movie camera">🎥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎞️" title="film frames">🎞️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📽️" title="film projector">📽️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎬" title="clapper board">🎬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📺" title="television">📺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📷" title="camera">📷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📸" title="camera with flash">📸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📹" title="video camera">📹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📼" title="videocassette">📼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔍" title="magnifying glass tilted left">🔍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔎" title="magnifying glass tilted right">🔎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕯️" title="candle">🕯️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💡" title="light bulb">💡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔦" title="flashlight">🔦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏮" title="red paper lantern">🏮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪔" title="diya lamp">🪔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📔" title="notebook with decorative cover">📔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📕" title="closed book">📕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📖" title="open book">📖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📗" title="green book">📗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📘" title="blue book">📘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📙" title="orange book">📙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📚" title="books">📚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📓" title="notebook">📓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📒" title="ledger">📒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📃" title="page with curl">📃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📜" title="scroll">📜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📄" title="page facing up">📄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📰" title="newspaper">📰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗞️" title="rolled-up newspaper">🗞️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📑" title="bookmark tabs">📑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔖" title="bookmark">🔖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏷️" title="label">🏷️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💰" title="money bag">💰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💴" title="yen banknote">💴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💵" title="dollar banknote">💵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💶" title="euro banknote">💶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💷" title="pound banknote">💷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💸" title="money with wings">💸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💳" title="credit card">💳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧾" title="receipt">🧾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💹" title="chart increasing with yen">💹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✉️" title="envelope">✉️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📧" title="e-mail">📧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📨" title="incoming envelope">📨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📩" title="envelope with arrow">📩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📤" title="outbox tray">📤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📥" title="inbox tray">📥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📦" title="package">📦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📫" title="closed mailbox with raised flag">📫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📪" title="closed mailbox with lowered flag">📪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📬" title="open mailbox with raised flag">📬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📭" title="open mailbox with lowered flag">📭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📮" title="postbox">📮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗳️" title="ballot box with ballot">🗳️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✏️" title="pencil">✏️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✒️" title="black nib">✒️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖋️" title="fountain pen">🖋️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖊️" title="pen">🖊️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖌️" title="paintbrush">🖌️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖍️" title="crayon">🖍️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📝" title="memo">📝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💼" title="briefcase">💼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📁" title="file folder">📁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📂" title="open file folder">📂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗂️" title="card index dividers">🗂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📅" title="calendar">📅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📆" title="tear-off calendar">📆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗒️" title="spiral notepad">🗒️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗓️" title="spiral calendar">🗓️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📇" title="card index">📇</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📈" title="chart increasing">📈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📉" title="chart decreasing">📉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📊" title="bar chart">📊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📋" title="clipboard">📋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📌" title="pushpin">📌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📍" title="round pushpin">📍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📎" title="paperclip">📎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🖇️" title="linked paperclips">🖇️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📏" title="straight ruler">📏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📐" title="triangular ruler">📐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✂️" title="scissors">✂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗃️" title="card file box">🗃️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗄️" title="file cabinet">🗄️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗑️" title="wastebasket">🗑️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔒" title="locked">🔒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔓" title="unlocked">🔓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔏" title="locked with pen">🔏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔐" title="locked with key">🔐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔑" title="key">🔑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗝️" title="old key">🗝️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔨" title="hammer">🔨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪓" title="axe">🪓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛏️" title="pick">⛏️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚒️" title="hammer and pick">⚒️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛠️" title="hammer and wrench">🛠️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗡️" title="dagger">🗡️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚔️" title="crossed swords">⚔️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔫" title="pistol">🔫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏹" title="bow and arrow">🏹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛡️" title="shield">🛡️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔧" title="wrench">🔧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔩" title="nut and bolt">🔩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚙️" title="gear">⚙️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗜️" title="clamp">🗜️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚖️" title="balance scale">⚖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🦯" title="white cane">🦯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔗" title="link">🔗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛓️" title="chains">⛓️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧰" title="toolbox">🧰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧲" title="magnet">🧲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚗️" title="alembic">⚗️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧪" title="test tube">🧪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧫" title="petri dish">🧫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧬" title="dna">🧬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔬" title="microscope">🔬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔭" title="telescope">🔭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📡" title="satellite antenna">📡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💉" title="syringe">💉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩸" title="drop of blood">🩸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💊" title="pill">💊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩹" title="adhesive bandage">🩹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🩺" title="stethoscope">🩺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚪" title="door">🚪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛏️" title="bed">🛏️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛋️" title="couch and lamp">🛋️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪑" title="chair">🪑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚽" title="toilet">🚽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚿" title="shower">🚿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛁" title="bathtub">🛁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🪒" title="razor">🪒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧴" title="lotion bottle">🧴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧷" title="safety pin">🧷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧹" title="broom">🧹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧺" title="basket">🧺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧻" title="roll of paper">🧻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧼" title="soap">🧼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧽" title="sponge">🧽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🧯" title="fire extinguisher">🧯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛒" title="shopping cart">🛒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚬" title="cigarette">🚬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚰️" title="coffin">⚰️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚱️" title="funeral urn">⚱️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🗿" title="moai">🗿</button></div><h2 class="emoji-picker__category-name">Symbols</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏧" title="ATM sign">🏧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚮" title="litter in bin sign">🚮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚰" title="potable water">🚰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♿" title="wheelchair symbol">♿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚹" title="men’s room">🚹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚺" title="women’s room">🚺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚻" title="restroom">🚻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚼" title="baby symbol">🚼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚾" title="water closet">🚾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛂" title="passport control">🛂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛃" title="customs">🛃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛄" title="baggage claim">🛄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛅" title="left luggage">🛅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚠️" title="warning">⚠️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚸" title="children crossing">🚸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛔" title="no entry">⛔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚫" title="prohibited">🚫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚳" title="no bicycles">🚳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚭" title="no smoking">🚭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚯" title="no littering">🚯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚱" title="non-potable water">🚱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚷" title="no pedestrians">🚷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📵" title="no mobile phones">📵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔞" title="no one under eighteen">🔞</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☢️" title="radioactive">☢️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☣️" title="biohazard">☣️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⬆️" title="up arrow">⬆️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↗️" title="up-right arrow">↗️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="➡️" title="right arrow">➡️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↘️" title="down-right arrow">↘️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⬇️" title="down arrow">⬇️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↙️" title="down-left arrow">↙️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⬅️" title="left arrow">⬅️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↖️" title="up-left arrow">↖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↕️" title="up-down arrow">↕️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↔️" title="left-right arrow">↔️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↩️" title="right arrow curving left">↩️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="↪️" title="left arrow curving right">↪️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⤴️" title="right arrow curving up">⤴️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⤵️" title="right arrow curving down">⤵️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔃" title="clockwise vertical arrows">🔃</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔄" title="counterclockwise arrows button">🔄</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔙" title="BACK arrow">🔙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔚" title="END arrow">🔚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔛" title="ON! arrow">🔛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔜" title="SOON arrow">🔜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔝" title="TOP arrow">🔝</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🛐" title="place of worship">🛐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚛️" title="atom symbol">⚛️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕉️" title="om">🕉️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✡️" title="star of David">✡️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☸️" title="wheel of dharma">☸️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☯️" title="yin yang">☯️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✝️" title="latin cross">✝️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☦️" title="orthodox cross">☦️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☪️" title="star and crescent">☪️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☮️" title="peace symbol">☮️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🕎" title="menorah">🕎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔯" title="dotted six-pointed star">🔯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♈" title="Aries">♈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♉" title="Taurus">♉</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♊" title="Gemini">♊</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♋" title="Cancer">♋</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♌" title="Leo">♌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♍" title="Virgo">♍</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♎" title="Libra">♎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♏" title="Scorpio">♏</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♐" title="Sagittarius">♐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♑" title="Capricorn">♑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♒" title="Aquarius">♒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♓" title="Pisces">♓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⛎" title="Ophiuchus">⛎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔀" title="shuffle tracks button">🔀</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔁" title="repeat button">🔁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔂" title="repeat single button">🔂</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="▶️" title="play button">▶️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏩" title="fast-forward button">⏩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏭️" title="next track button">⏭️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏯️" title="play or pause button">⏯️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="◀️" title="reverse button">◀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏪" title="fast reverse button">⏪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏮️" title="last track button">⏮️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔼" title="upwards button">🔼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏫" title="fast up button">⏫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔽" title="downwards button">🔽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏬" title="fast down button">⏬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏸️" title="pause button">⏸️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏹️" title="stop button">⏹️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏺️" title="record button">⏺️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⏏️" title="eject button">⏏️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎦" title="cinema">🎦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔅" title="dim button">🔅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔆" title="bright button">🔆</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📶" title="antenna bars">📶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📳" title="vibration mode">📳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📴" title="mobile phone off">📴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♀️" title="female sign">♀️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♂️" title="male sign">♂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✖️" title="multiply">✖️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="➕" title="plus">➕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="➖" title="minus">➖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="➗" title="divide">➗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♾️" title="infinity">♾️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="‼️" title="double exclamation mark">‼️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⁉️" title="exclamation question mark">⁉️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❓" title="question mark">❓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❔" title="white question mark">❔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❕" title="white exclamation mark">❕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❗" title="exclamation mark">❗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="〰️" title="wavy dash">〰️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💱" title="currency exchange">💱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💲" title="heavy dollar sign">💲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚕️" title="medical symbol">⚕️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="♻️" title="recycling symbol">♻️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚜️" title="fleur-de-lis">⚜️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔱" title="trident emblem">🔱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="📛" title="name badge">📛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔰" title="Japanese symbol for beginner">🔰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⭕" title="hollow red circle">⭕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✅" title="check mark button">✅</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="☑️" title="check box with check">☑️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✔️" title="check mark">✔️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❌" title="cross mark">❌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❎" title="cross mark button">❎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="➰" title="curly loop">➰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="➿" title="double curly loop">➿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="〽️" title="part alternation mark">〽️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✳️" title="eight-spoked asterisk">✳️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="✴️" title="eight-pointed star">✴️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="❇️" title="sparkle">❇️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="©️" title="copyright">©️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="®️" title="registered">®️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="™️" title="trade mark">™️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="#️⃣" title="keycap: #">#️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="*️⃣" title="keycap: *">*️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="0️⃣" title="keycap: 0">0️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="1️⃣" title="keycap: 1">1️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="2️⃣" title="keycap: 2">2️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="3️⃣" title="keycap: 3">3️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="4️⃣" title="keycap: 4">4️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="5️⃣" title="keycap: 5">5️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="6️⃣" title="keycap: 6">6️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="7️⃣" title="keycap: 7">7️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="8️⃣" title="keycap: 8">8️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="9️⃣" title="keycap: 9">9️⃣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔟" title="keycap: 10">🔟</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔠" title="input latin uppercase">🔠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔡" title="input latin lowercase">🔡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔢" title="input numbers">🔢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔣" title="input symbols">🔣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔤" title="input latin letters">🔤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🅰️" title="A button (blood type)">🅰️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆎" title="AB button (blood type)">🆎</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🅱️" title="B button (blood type)">🅱️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆑" title="CL button">🆑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆒" title="COOL button">🆒</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆓" title="FREE button">🆓</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="ℹ️" title="information">ℹ️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆔" title="ID button">🆔</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="Ⓜ️" title="circled M">Ⓜ️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆕" title="NEW button">🆕</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆖" title="NG button">🆖</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🅾️" title="O button (blood type)">🅾️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆗" title="OK button">🆗</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🅿️" title="P button">🅿️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆘" title="SOS button">🆘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆙" title="UP! button">🆙</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🆚" title="VS button">🆚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈁" title="Japanese “here” button">🈁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈂️" title="Japanese “service charge” button">🈂️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈷️" title="Japanese “monthly amount” button">🈷️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈶" title="Japanese “not free of charge” button">🈶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈯" title="Japanese “reserved” button">🈯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🉐" title="Japanese “bargain” button">🉐</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈹" title="Japanese “discount” button">🈹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈚" title="Japanese “free of charge” button">🈚</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈲" title="Japanese “prohibited” button">🈲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🉑" title="Japanese “acceptable” button">🉑</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈸" title="Japanese “application” button">🈸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈴" title="Japanese “passing grade” button">🈴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈳" title="Japanese “vacancy” button">🈳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="㊗️" title="Japanese “congratulations” button">㊗️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="㊙️" title="Japanese “secret” button">㊙️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈺" title="Japanese “open for business” button">🈺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🈵" title="Japanese “no vacancy” button">🈵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔴" title="red circle">🔴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟠" title="orange circle">🟠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟡" title="yellow circle">🟡</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟢" title="green circle">🟢</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔵" title="blue circle">🔵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟣" title="purple circle">🟣</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟤" title="brown circle">🟤</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚫" title="black circle">⚫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⚪" title="white circle">⚪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟥" title="red square">🟥</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟧" title="orange square">🟧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟨" title="yellow square">🟨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟩" title="green square">🟩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟦" title="blue square">🟦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟪" title="purple square">🟪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🟫" title="brown square">🟫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⬛" title="black large square">⬛</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="⬜" title="white large square">⬜</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="◼️" title="black medium square">◼️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="◻️" title="white medium square">◻️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="◾" title="black medium-small square">◾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="◽" title="white medium-small square">◽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="▪️" title="black small square">▪️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="▫️" title="white small square">▫️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔶" title="large orange diamond">🔶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔷" title="large blue diamond">🔷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔸" title="small orange diamond">🔸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔹" title="small blue diamond">🔹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔺" title="red triangle pointed up">🔺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔻" title="red triangle pointed down">🔻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="💠" title="diamond with a dot">💠</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔘" title="radio button">🔘</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔳" title="white square button">🔳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🔲" title="black square button">🔲</button></div><h2 class="emoji-picker__category-name">Flags</h2><div class="emoji-picker__container"><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏁" title="chequered flag">🏁</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🚩" title="triangular flag">🚩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🎌" title="crossed flags">🎌</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏴" title="black flag">🏴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏳️" title="white flag">🏳️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏳️‍🌈" title="rainbow flag">🏳️‍🌈</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏴‍☠️" title="pirate flag">🏴‍☠️</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇨" title="flag: Ascension Island">🇦🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇩" title="flag: Andorra">🇦🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇪" title="flag: United Arab Emirates">🇦🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇫" title="flag: Afghanistan">🇦🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇬" title="flag: Antigua &amp; Barbuda">🇦🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇮" title="flag: Anguilla">🇦🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇱" title="flag: Albania">🇦🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇲" title="flag: Armenia">🇦🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇴" title="flag: Angola">🇦🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇶" title="flag: Antarctica">🇦🇶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇷" title="flag: Argentina">🇦🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇸" title="flag: American Samoa">🇦🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇹" title="flag: Austria">🇦🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇺" title="flag: Australia">🇦🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇼" title="flag: Aruba">🇦🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇽" title="flag: Åland Islands">🇦🇽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇦🇿" title="flag: Azerbaijan">🇦🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇦" title="flag: Bosnia &amp; Herzegovina">🇧🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇧" title="flag: Barbados">🇧🇧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇩" title="flag: Bangladesh">🇧🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇪" title="flag: Belgium">🇧🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇫" title="flag: Burkina Faso">🇧🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇬" title="flag: Bulgaria">🇧🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇭" title="flag: Bahrain">🇧🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇮" title="flag: Burundi">🇧🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇯" title="flag: Benin">🇧🇯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇱" title="flag: St. Barthélemy">🇧🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇲" title="flag: Bermuda">🇧🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇳" title="flag: Brunei">🇧🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇴" title="flag: Bolivia">🇧🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇶" title="flag: Caribbean Netherlands">🇧🇶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇷" title="flag: Brazil">🇧🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇸" title="flag: Bahamas">🇧🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇹" title="flag: Bhutan">🇧🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇻" title="flag: Bouvet Island">🇧🇻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇼" title="flag: Botswana">🇧🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇾" title="flag: Belarus">🇧🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇧🇿" title="flag: Belize">🇧🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇦" title="flag: Canada">🇨🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇨" title="flag: Cocos (Keeling) Islands">🇨🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇩" title="flag: Congo - Kinshasa">🇨🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇫" title="flag: Central African Republic">🇨🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇬" title="flag: Congo - Brazzaville">🇨🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇭" title="flag: Switzerland">🇨🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇮" title="flag: Côte d’Ivoire">🇨🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇰" title="flag: Cook Islands">🇨🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇱" title="flag: Chile">🇨🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇲" title="flag: Cameroon">🇨🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇳" title="flag: China">🇨🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇴" title="flag: Colombia">🇨🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇵" title="flag: Clipperton Island">🇨🇵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇷" title="flag: Costa Rica">🇨🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇺" title="flag: Cuba">🇨🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇻" title="flag: Cape Verde">🇨🇻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇼" title="flag: Curaçao">🇨🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇽" title="flag: Christmas Island">🇨🇽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇾" title="flag: Cyprus">🇨🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇨🇿" title="flag: Czechia">🇨🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇪" title="flag: Germany">🇩🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇬" title="flag: Diego Garcia">🇩🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇯" title="flag: Djibouti">🇩🇯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇰" title="flag: Denmark">🇩🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇲" title="flag: Dominica">🇩🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇴" title="flag: Dominican Republic">🇩🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇩🇿" title="flag: Algeria">🇩🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇦" title="flag: Ceuta &amp; Melilla">🇪🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇨" title="flag: Ecuador">🇪🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇪" title="flag: Estonia">🇪🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇬" title="flag: Egypt">🇪🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇭" title="flag: Western Sahara">🇪🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇷" title="flag: Eritrea">🇪🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇸" title="flag: Spain">🇪🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇹" title="flag: Ethiopia">🇪🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇪🇺" title="flag: European Union">🇪🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇫🇮" title="flag: Finland">🇫🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇫🇯" title="flag: Fiji">🇫🇯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇫🇰" title="flag: Falkland Islands">🇫🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇫🇲" title="flag: Micronesia">🇫🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇫🇴" title="flag: Faroe Islands">🇫🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇫🇷" title="flag: France">🇫🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇦" title="flag: Gabon">🇬🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇧" title="flag: United Kingdom">🇬🇧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇩" title="flag: Grenada">🇬🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇪" title="flag: Georgia">🇬🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇫" title="flag: French Guiana">🇬🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇬" title="flag: Guernsey">🇬🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇭" title="flag: Ghana">🇬🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇮" title="flag: Gibraltar">🇬🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇱" title="flag: Greenland">🇬🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇲" title="flag: Gambia">🇬🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇳" title="flag: Guinea">🇬🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇵" title="flag: Guadeloupe">🇬🇵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇶" title="flag: Equatorial Guinea">🇬🇶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇷" title="flag: Greece">🇬🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇸" title="flag: South Georgia &amp; South Sandwich Islands">🇬🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇹" title="flag: Guatemala">🇬🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇺" title="flag: Guam">🇬🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇼" title="flag: Guinea-Bissau">🇬🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇬🇾" title="flag: Guyana">🇬🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇭🇰" title="flag: Hong Kong SAR China">🇭🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇭🇲" title="flag: Heard &amp; McDonald Islands">🇭🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇭🇳" title="flag: Honduras">🇭🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇭🇷" title="flag: Croatia">🇭🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇭🇹" title="flag: Haiti">🇭🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇭🇺" title="flag: Hungary">🇭🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇨" title="flag: Canary Islands">🇮🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇩" title="flag: Indonesia">🇮🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇪" title="flag: Ireland">🇮🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇱" title="flag: Israel">🇮🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇲" title="flag: Isle of Man">🇮🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇳" title="flag: India">🇮🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇴" title="flag: British Indian Ocean Territory">🇮🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇶" title="flag: Iraq">🇮🇶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇷" title="flag: Iran">🇮🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇸" title="flag: Iceland">🇮🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇮🇹" title="flag: Italy">🇮🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇯🇪" title="flag: Jersey">🇯🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇯🇲" title="flag: Jamaica">🇯🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇯🇴" title="flag: Jordan">🇯🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇯🇵" title="flag: Japan">🇯🇵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇪" title="flag: Kenya">🇰🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇬" title="flag: Kyrgyzstan">🇰🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇭" title="flag: Cambodia">🇰🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇮" title="flag: Kiribati">🇰🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇲" title="flag: Comoros">🇰🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇳" title="flag: St. Kitts &amp; Nevis">🇰🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇵" title="flag: North Korea">🇰🇵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇷" title="flag: South Korea">🇰🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇼" title="flag: Kuwait">🇰🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇾" title="flag: Cayman Islands">🇰🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇰🇿" title="flag: Kazakhstan">🇰🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇦" title="flag: Laos">🇱🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇧" title="flag: Lebanon">🇱🇧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇨" title="flag: St. Lucia">🇱🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇮" title="flag: Liechtenstein">🇱🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇰" title="flag: Sri Lanka">🇱🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇷" title="flag: Liberia">🇱🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇸" title="flag: Lesotho">🇱🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇹" title="flag: Lithuania">🇱🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇺" title="flag: Luxembourg">🇱🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇻" title="flag: Latvia">🇱🇻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇱🇾" title="flag: Libya">🇱🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇦" title="flag: Morocco">🇲🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇨" title="flag: Monaco">🇲🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇩" title="flag: Moldova">🇲🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇪" title="flag: Montenegro">🇲🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇫" title="flag: St. Martin">🇲🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇬" title="flag: Madagascar">🇲🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇭" title="flag: Marshall Islands">🇲🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇰" title="flag: North Macedonia">🇲🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇱" title="flag: Mali">🇲🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇲" title="flag: Myanmar (Burma)">🇲🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇳" title="flag: Mongolia">🇲🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇴" title="flag: Macao SAR China">🇲🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇵" title="flag: Northern Mariana Islands">🇲🇵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇶" title="flag: Martinique">🇲🇶</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇷" title="flag: Mauritania">🇲🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇸" title="flag: Montserrat">🇲🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇹" title="flag: Malta">🇲🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇺" title="flag: Mauritius">🇲🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇻" title="flag: Maldives">🇲🇻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇼" title="flag: Malawi">🇲🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇽" title="flag: Mexico">🇲🇽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇾" title="flag: Malaysia">🇲🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇲🇿" title="flag: Mozambique">🇲🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇦" title="flag: Namibia">🇳🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇨" title="flag: New Caledonia">🇳🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇪" title="flag: Niger">🇳🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇫" title="flag: Norfolk Island">🇳🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇬" title="flag: Nigeria">🇳🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇮" title="flag: Nicaragua">🇳🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇱" title="flag: Netherlands">🇳🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇴" title="flag: Norway">🇳🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇵" title="flag: Nepal">🇳🇵</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇷" title="flag: Nauru">🇳🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇺" title="flag: Niue">🇳🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇳🇿" title="flag: New Zealand">🇳🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇴🇲" title="flag: Oman">🇴🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇦" title="flag: Panama">🇵🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇪" title="flag: Peru">🇵🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇫" title="flag: French Polynesia">🇵🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇬" title="flag: Papua New Guinea">🇵🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇭" title="flag: Philippines">🇵🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇰" title="flag: Pakistan">🇵🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇱" title="flag: Poland">🇵🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇲" title="flag: St. Pierre &amp; Miquelon">🇵🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇳" title="flag: Pitcairn Islands">🇵🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇷" title="flag: Puerto Rico">🇵🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇸" title="flag: Palestinian Territories">🇵🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇹" title="flag: Portugal">🇵🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇼" title="flag: Palau">🇵🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇵🇾" title="flag: Paraguay">🇵🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇶🇦" title="flag: Qatar">🇶🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇷🇪" title="flag: Réunion">🇷🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇷🇴" title="flag: Romania">🇷🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇷🇸" title="flag: Serbia">🇷🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇷🇺" title="flag: Russia">🇷🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇷🇼" title="flag: Rwanda">🇷🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇦" title="flag: Saudi Arabia">🇸🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇧" title="flag: Solomon Islands">🇸🇧</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇨" title="flag: Seychelles">🇸🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇩" title="flag: Sudan">🇸🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇪" title="flag: Sweden">🇸🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇬" title="flag: Singapore">🇸🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇭" title="flag: St. Helena">🇸🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇮" title="flag: Slovenia">🇸🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇯" title="flag: Svalbard &amp; Jan Mayen">🇸🇯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇰" title="flag: Slovakia">🇸🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇱" title="flag: Sierra Leone">🇸🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇲" title="flag: San Marino">🇸🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇳" title="flag: Senegal">🇸🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇴" title="flag: Somalia">🇸🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇷" title="flag: Suriname">🇸🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇸" title="flag: South Sudan">🇸🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇹" title="flag: São Tomé &amp; Príncipe">🇸🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇻" title="flag: El Salvador">🇸🇻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇽" title="flag: Sint Maarten">🇸🇽</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇾" title="flag: Syria">🇸🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇸🇿" title="flag: Eswatini">🇸🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇦" title="flag: Tristan da Cunha">🇹🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇨" title="flag: Turks &amp; Caicos Islands">🇹🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇩" title="flag: Chad">🇹🇩</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇫" title="flag: French Southern Territories">🇹🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇬" title="flag: Togo">🇹🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇭" title="flag: Thailand">🇹🇭</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇯" title="flag: Tajikistan">🇹🇯</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇰" title="flag: Tokelau">🇹🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇱" title="flag: Timor-Leste">🇹🇱</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇲" title="flag: Turkmenistan">🇹🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇳" title="flag: Tunisia">🇹🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇴" title="flag: Tonga">🇹🇴</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇷" title="flag: Turkey">🇹🇷</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇹" title="flag: Trinidad &amp; Tobago">🇹🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇻" title="flag: Tuvalu">🇹🇻</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇼" title="flag: Taiwan">🇹🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇹🇿" title="flag: Tanzania">🇹🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇦" title="flag: Ukraine">🇺🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇬" title="flag: Uganda">🇺🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇲" title="flag: U.S. Outlying Islands">🇺🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇳" title="flag: United Nations">🇺🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇸" title="flag: United States">🇺🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇾" title="flag: Uruguay">🇺🇾</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇺🇿" title="flag: Uzbekistan">🇺🇿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇦" title="flag: Vatican City">🇻🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇨" title="flag: St. Vincent &amp; Grenadines">🇻🇨</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇪" title="flag: Venezuela">🇻🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇬" title="flag: British Virgin Islands">🇻🇬</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇮" title="flag: U.S. Virgin Islands">🇻🇮</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇳" title="flag: Vietnam">🇻🇳</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇻🇺" title="flag: Vanuatu">🇻🇺</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇼🇫" title="flag: Wallis &amp; Futuna">🇼🇫</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇼🇸" title="flag: Samoa">🇼🇸</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇽🇰" title="flag: Kosovo">🇽🇰</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇾🇪" title="flag: Yemen">🇾🇪</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇾🇹" title="flag: Mayotte">🇾🇹</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇿🇦" title="flag: South Africa">🇿🇦</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇿🇲" title="flag: Zambia">🇿🇲</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🇿🇼" title="flag: Zimbabwe">🇿🇼</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏴󠁧󠁢󠁥󠁮󠁧󠁿" title="flag: England">🏴󠁧󠁢󠁥󠁮󠁧󠁿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏴󠁧󠁢󠁳󠁣󠁴󠁿" title="flag: Scotland">🏴󠁧󠁢󠁳󠁣󠁴󠁿</button><button class="emoji-picker__emoji" tabindex="-1" data-emoji="🏴󠁧󠁢󠁷󠁬󠁳󠁿" title="flag: Wales">🏴󠁧󠁢󠁷󠁬󠁳󠁿</button></div></div></div></div></div></div><input type="file" multiple="multiple" class="dz-hidden-input" tabindex="-1" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
    
</body>