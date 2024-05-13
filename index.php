<?php
session_start();
$isAdmin = $_SESSION['user']['userStatus'] === 1;
session_write_close();
?>


<?php
$system['address'] = 'https://' . $_SERVER['SERVER_NAME'] . '/';
$system['currentPath'] = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">

    <title>Messenger - 0.0.1</title>

    <!-- Favicon -->
    <style type="text/css">
        svg:not(:root).svg-inline--fa {
            overflow: visible;
        }

        .svg-inline--fa {
            display: inline-block;
            font-size: inherit;
            height: 1em;
            overflow: visible;
            vertical-align: -0.125em;
        }

        .svg-inline--fa.fa-lg {
            vertical-align: -0.225em;
        }

        .svg-inline--fa.fa-w-1 {
            width: 0.0625em;
        }

        .svg-inline--fa.fa-w-2 {
            width: 0.125em;
        }

        .svg-inline--fa.fa-w-3 {
            width: 0.1875em;
        }

        .svg-inline--fa.fa-w-4 {
            width: 0.25em;
        }

        .svg-inline--fa.fa-w-5 {
            width: 0.3125em;
        }

        .svg-inline--fa.fa-w-6 {
            width: 0.375em;
        }

        .svg-inline--fa.fa-w-7 {
            width: 0.4375em;
        }

        .svg-inline--fa.fa-w-8 {
            width: 0.5em;
        }

        .svg-inline--fa.fa-w-9 {
            width: 0.5625em;
        }

        .svg-inline--fa.fa-w-10 {
            width: 0.625em;
        }

        .svg-inline--fa.fa-w-11 {
            width: 0.6875em;
        }

        .svg-inline--fa.fa-w-12 {
            width: 0.75em;
        }

        .svg-inline--fa.fa-w-13 {
            width: 0.8125em;
        }

        .svg-inline--fa.fa-w-14 {
            width: 0.875em;
        }

        .svg-inline--fa.fa-w-15 {
            width: 0.9375em;
        }

        .svg-inline--fa.fa-w-16 {
            width: 1em;
        }

        .svg-inline--fa.fa-w-17 {
            width: 1.0625em;
        }

        .svg-inline--fa.fa-w-18 {
            width: 1.125em;
        }

        .svg-inline--fa.fa-w-19 {
            width: 1.1875em;
        }

        .svg-inline--fa.fa-w-20 {
            width: 1.25em;
        }

        .svg-inline--fa.fa-pull-left {
            margin-right: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-pull-right {
            margin-left: 0.3em;
            width: auto;
        }

        .svg-inline--fa.fa-border {
            height: 1.5em;
        }

        .svg-inline--fa.fa-li {
            width: 2em;
        }

        .svg-inline--fa.fa-fw {
            width: 1.25em;
        }

        .fa-layers svg.svg-inline--fa {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .fa-layers {
            display: inline-block;
            height: 1em;
            position: relative;
            text-align: center;
            vertical-align: -0.125em;
            width: 1em;
        }

        .fa-layers svg.svg-inline--fa {
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter,
        .fa-layers-text {
            display: inline-block;
            position: absolute;
            text-align: center;
        }

        .fa-layers-text {
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transform-origin: center center;
            transform-origin: center center;
        }

        .fa-layers-counter {
            background-color: #ff253a;
            border-radius: 1em;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            height: 1.5em;
            line-height: 1;
            max-width: 5em;
            min-width: 1.5em;
            overflow: hidden;
            padding: 0.25em;
            right: 0;
            text-overflow: ellipsis;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-bottom-right {
            bottom: 0;
            right: 0;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom right;
            transform-origin: bottom right;
        }

        .fa-layers-bottom-left {
            bottom: 0;
            left: 0;
            right: auto;
            top: auto;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: bottom left;
            transform-origin: bottom left;
        }

        .fa-layers-top-right {
            right: 0;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top right;
            transform-origin: top right;
        }

        .fa-layers-top-left {
            left: 0;
            right: auto;
            top: 0;
            -webkit-transform: scale(0.25);
            transform: scale(0.25);
            -webkit-transform-origin: top left;
            transform-origin: top left;
        }

        .fa-lg {
            font-size: 1.3333333333em;
            line-height: 0.75em;
            vertical-align: -0.0667em;
        }

        .fa-xs {
            font-size: 0.75em;
        }

        .fa-sm {
            font-size: 0.875em;
        }

        .fa-1x {
            font-size: 1em;
        }

        .fa-2x {
            font-size: 2em;
        }

        .fa-3x {
            font-size: 3em;
        }

        .fa-4x {
            font-size: 4em;
        }

        .fa-5x {
            font-size: 5em;
        }

        .fa-6x {
            font-size: 6em;
        }

        .fa-7x {
            font-size: 7em;
        }

        .fa-8x {
            font-size: 8em;
        }

        .fa-9x {
            font-size: 9em;
        }

        .fa-10x {
            font-size: 10em;
        }

        .fa-fw {
            text-align: center;
            width: 1.25em;
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0;
        }

        .fa-ul>li {
            position: relative;
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit;
        }

        .fa-border {
            border: solid 0.08em #eee;
            border-radius: 0.1em;
            padding: 0.2em 0.25em 0.15em;
        }

        .fa-pull-left {
            float: left;
        }

        .fa-pull-right {
            float: right;
        }

        .fa.fa-pull-left,
        .fas.fa-pull-left,
        .far.fa-pull-left,
        .fal.fa-pull-left,
        .fab.fa-pull-left {
            margin-right: 0.3em;
        }

        .fa.fa-pull-right,
        .fas.fa-pull-right,
        .far.fa-pull-right,
        .fal.fa-pull-right,
        .fab.fa-pull-right {
            margin-left: 0.3em;
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s infinite linear;
            animation: fa-spin 2s infinite linear;
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s infinite steps(8);
            animation: fa-spin 1s infinite steps(8);
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg);
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scale(-1, 1);
            transform: scale(-1, 1);
        }

        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(1, -1);
            transform: scale(1, -1);
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
            -webkit-transform: scale(-1, -1);
            transform: scale(-1, -1);
        }

        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-flip-both {
            -webkit-filter: none;
            filter: none;
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            position: relative;
            width: 2.5em;
        }

        .fa-stack-1x,
        .fa-stack-2x {
            bottom: 0;
            left: 0;
            margin: auto;
            position: absolute;
            right: 0;
            top: 0;
        }

        .svg-inline--fa.fa-stack-1x {
            height: 1em;
            width: 1.25em;
        }

        .svg-inline--fa.fa-stack-2x {
            height: 2em;
            width: 2.5em;
        }

        .fa-inverse {
            color: #fff;
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }

        .svg-inline--fa .fa-primary {
            fill: var(--fa-primary-color, currentColor);
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa .fa-secondary {
            fill: var(--fa-secondary-color, currentColor);
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-primary {
            opacity: 0.4;
            opacity: var(--fa-secondary-opacity, 0.4);
        }

        .svg-inline--fa.fa-swap-opacity .fa-secondary {
            opacity: 1;
            opacity: var(--fa-primary-opacity, 1);
        }

        .svg-inline--fa mask .fa-primary,
        .svg-inline--fa mask .fa-secondary {
            fill: black;
        }

        .fad.fa-inverse {
            color: #fff;
        }
    </style>
    <link rel="shortcut icon" href="./assets/img/favicon/favicon.ico" type="image/x-icon">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Template CSS -->
    <link class="css-lt" rel="stylesheet" href="<?= $system['address'] ?>template.bundle.css" media="(prefers-color-scheme: light)">
    <link class="css-dk" rel="stylesheet" href="<?= $system['address'] ?>template.dark.bundle.css" media="(prefers-color-scheme: dark)">

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
            <a href="https://localhost/logout.php">Logout</a>
            <!-- Nav items -->
            <ul class="d-flex nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center align-items-center w-100 py-4 py-lg-2 px-lg-3" role="tablist">
                <!-- Invisible item to center nav vertically -->
                <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
                    <a class="nav-link py-0 py-lg-8" href="#" title="">
                        <div class="icon icon-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </div>
                    </a>
                </li>

                <!-- New chat -->
                <li class="nav-item">
                    <a class="nav-link py-0 py-lg-8" id="tab-create-chat" href="#tab-content-create-chat" title="Create chat" data-bs-toggle="tab" role="tab">
                        <div class="icon icon-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                <path d="M12 20h9"></path>
                                <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                            </svg>
                        </div>
                    </a>
                </li>

                <!-- Friends -->
                <li class="nav-item">
                    <a class="nav-link py-0 py-lg-8" id="tab-friends" href="#tab-content-friends" title="Friends" data-bs-toggle="tab" role="tab">
                        <div class="icon icon-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                    </a>
                </li>

                <!-- Chats -->
                <li class="nav-item">
                    <a class="nav-link active py-0 py-lg-8" id="tab-chats" href="#tab-content-chats" title="Chats" data-bs-toggle="tab" role="tab" onclick="changeToChats()">
                        <div class="icon icon-xl icon-badged">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            <div class="badge badge-circle bg-primary">
                                <span class="newMessages"></span>
                            </div>
                        </div>
                    </a>
                </li>


                <!-- Notification -->
                <?php if ($isAdmin) { ?>
                    <li class="nav-item">
                        <a class="nav-link py-0 py-lg-8" id="tab-notifications" href="#tab-content-notifications" title="Notifications" data-bs-toggle="tab" role="tab">
                            <div class="icon icon-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg>
                            </div>
                        </a>
                    </li>
                <?php } ?>

                <!-- Support -->
                <li class="nav-item d-none d-xl-block flex-xl-grow-1">
                    <a class="nav-link py-0 py-lg-8" id="tab-support" href="#tab-content-support" title="Support" data-bs-toggle="tab" role="tab">
                        <div class="icon icon-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                            </svg>
                        </div>
                    </a>
                </li>


                <!-- logout -->

                <!-- Switcher -->
                <li class="nav-item  d-xl-block">
                    <a class="switcher-btn nav-link py-0 py-lg-8" title="Themes">
                        <div class="switcher-icon switcher-icon-dark icon icon-xl " data-theme-mode="dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>
                        </div>
                        <div class="switcher-icon switcher-icon-light icon icon-xl " data-theme-mode="light">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>
                        </div>
                    </a>
                </li>

                <!-- Settings -->
                <?php if ($isAdmin) { ?>
                <li class="nav-item">
                    <a class="nav-link py-0 py-lg-8" id="tab-settings" href="#tab-content-settings" title="Settings" data-bs-toggle="tab" role="tab" onclick="changeToSettings()">
                        <div class="icon icon-xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                </path>
                            </svg>
                        </div>
                    </a>
                </li>
                <?php } ?>

                <!-- Profile -->
                <li class="nav-item d-none d-xl-block">
                    <a href="#" class="nav-link p-0 mt-lg-2" data-bs-toggle="modal" data-bs-target="#modal-profile">
                        <div class="avatar avatar-online mx-auto">
                            <img class="avatar-img" src="https://avatar.iran.liara.run/public/boy?username=Ash" alt="">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                            <circle cx="11" cy="11" r="8"></circle>
                                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                        </svg>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74">
                                                        <defs>
                                                            <style>
                                                                .cls-2 {
                                                                    fill: #fff;
                                                                    opacity: 0.1;
                                                                }
                                                            </style>
                                                        </defs>
                                                        <g>
                                                            <g>
                                                                <path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z">
                                                                </path>
                                                                <path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z">
                                                                </path>
                                                                <path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z">
                                                                </path>
                                                                <circle class="cls-2" cx="94.5" cy="57.5" r="22.5">
                                                                </circle>
                                                                <path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>

                                                <div class="profile-body p-0">
                                                    <div class="avatar avatar-lg">
                                                        <span class="avatar-text bg-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                                                </rect>
                                                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                                <polyline points="21 15 16 10 5 21"></polyline>
                                                            </svg>
                                                        </span>

                                                        <div class="badge badge-lg badge-circle bg-primary border-outline position-absolute bottom-0 end-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            </svg>
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
                                                                <label for="floatingTextarea">What's your
                                                                    purpose?</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-center mt-4 px-6">
                                            <small class="text-muted me-auto">Enter chat name and add an optional
                                                photo.</small>
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
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                                </svg>
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

                                                                <img class="avatar-img" src="" alt="">


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
                                            <!-- Card -->
                                            <!-- Card -->
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
                                            <!-- Card -->
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
                                            <!-- Card -->
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                        <polyline points="9 18 15 12 9 6"></polyline>
                                    </svg>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="8.5" cy="7" r="4"></circle>
                                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                                </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card -->
                                    <!-- Card -->
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card -->
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
                                                    <h5><a href="#">Mila White</a></h5>
                                                    <p>last seen a long time ago</p>
                                                </div>

                                                <div class="col-auto">
                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- Card -->
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
                                                    <h5><a href="#">William Wright</a></h5>
                                                    <p>online</p>
                                                </div>

                                                <div class="col-auto">
                                                    <!-- Dropdown -->
                                                    <div class="dropdown">
                                                        <a class="icon text-muted" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                                <circle cx="12" cy="12" r="1"></circle>
                                                                <circle cx="12" cy="5" r="1"></circle>
                                                                <circle cx="12" cy="19" r="1"></circle>
                                                            </svg>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">New message</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit contact</a>
                                                            </li>
                                                            <li>
                                                                <hr class="dropdown-divider">
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item text-danger" href="#">Block
                                                                    user</a>
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

                <div class="tab-pane fade h-100 show" id="tab-content-settings" role="tabpanel">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar">
                            <div class="container py-8">

                                <!-- Title -->
                                <div class="mb-8">
                                    <h2 class="fw-bold m-0">Settings</h2>
                                </div>


                                <!-- Account -->
                                <div class="mt-8">
                                    <div class="d-flex align-items-center mb-4 px-6">
                                        <small class="text-muted me-auto">Account</small>
                                    </div>

                                    <div class="card border-0">
                                        <div class="card-body py-2">
                                            <!-- Accordion -->
                                            <div class="accordion accordion-flush" id="accordion-profile">

                                                <!-- Switch -->
                                                <div class="accordion-item">
                                                    <div class="accordion-header">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <h5>Appearance</h5>
                                                                <p>Choose light or dark theme</p>
                                                            </div>
                                                            <div class="col-auto">
                                                                <li class="nav-item  d-xl-block">
                                                                    <a class="switcher-btn nav-link py-0 py-lg-8" title="Themes">
                                                                        <div class="switcher-icon switcher-icon-dark icon icon-xl d-none" data-theme-mode="dark">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                                                                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="switcher-icon switcher-icon-light icon icon-xl d-none" data-theme-mode="light">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                                                                <circle cx="12" cy="12" r="5"></circle>
                                                                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                                                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                                                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                                                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                                                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                                                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                                                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                                                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                                                            </svg>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Account -->

                                <!-- Notifications -->
                                <div class="mt-8">
                                    <div class="d-flex align-items-center my-4 px-6">
                                        <small class="text-muted me-auto">Chat</small>
                                    </div>

                                    <!-- Accordion -->
                                    <div class="card border-0">
                                        <div class="card-body py-2">
                                            <div class="accordion accordion-flush" id="accordion-notifications">
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="accordion-notifications-1">
                                                        <a href="#" class="accordion-button text-reset collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-notifications-body-1" aria-expanded="false" aria-controls="accordion-notifications-body-1">
                                                            <div>
                                                                <h5>Chat settings</h5>
                                                                <p>Set custom chat settings for users</p>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div id="accordion-notifications-body-1" class="accordion-collapse collapse" aria-labelledby="accordion-notifications-1" data-parent="#accordion-notifications">
                                                        <div class="accordion-body">
                                                        </div>
                                                        <div class="accordion-body">
                                                            <div class="row align-items-center">
                                                                <div class="col">
                                                                    <h5>Messages</h5>
                                                                    <p>Amount of messages in chat</p>
                                                                </div>

                                                                <div class="col-auto">
                                                                    <input type="number" class="chatAmount form-control" style="width: 6rem;" min="1" max="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-block btn-sm btn-primary w-100 saveBtn">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notifications -->

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
                                    <span class="isAdmin"></span><br>
                                    <span class="heartBeatStatus"></span>
                                </div>

                                <!-- Search -->
                                <div class="mb-6">
                                    <form action="#">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <div class="icon icon-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg>
                                                </div>
                                            </div>

                                            <input type="text" class="form-control form-control-lg ps-0" placeholder="Search messages or users" aria-label="Search for messages or users...">
                                        </div>
                                    </form>
                                </div>

                                <!-- Chats -->
                                <div class="card-list userList">
                                    <!-- Card -->

                                </div>
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
                                    <h2 class="fw-bold m-0">Heartbeats</h2>
                                </div>
                                <div class="card-list mt-8">
                                    <!-- Card -->
                                    <div class="card border-0 mb-5">
                                        <div class="card-body" onclick="changeHartBeat('online')">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="changeHartBeat" id="online" value="online">
                                                <label class="form-check-label" for="setHartBeatOnline">
                                                    Online
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0 mb-5">
                                        <div class="card-body" onclick="changeHartBeat('away')">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="changeHartBeat" id="away" value="away">
                                                <label class="form-check-label" for="setHartBeatAway">
                                                    Away
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0 mb-5">
                                        <div class="card-body" onclick="changeHartBeat('offline')">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="changeHartBeat" id="offline" value="offline" checked>
                                                <label class="form-check-label" for="setHartBeatOffline">
                                                    Offline
                                                </label>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                            <circle cx="11" cy="11" r="8"></circle>
                                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                        </svg>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                            <polyline points="9 18 15 12 9 6"></polyline>
                                                        </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                                                <polyline points="9 18 15 12 9 6"></polyline>
                                                            </svg>
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                            <circle cx="11" cy="11" r="8"></circle>
                                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                        </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                                                </rect>
                                                                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                                <polyline points="21 15 16 10 5 21"></polyline>
                                                            </svg>
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
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                                                                </path>
                                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                                <line x1="21" y1="12" x2="9" y2="12"></line>
                                                            </svg>
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
                                                                    <a class="switcher-btn text-reset" title="Themes">
                                                                        <div class="switcher-icon switcher-icon-dark icon icon-lg" data-theme-mode="dark">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
                                                                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z">
                                                                                </path>
                                                                            </svg>
                                                                        </div>
                                                                        <div class="switcher-icon switcher-icon-light icon icon-lg" data-theme-mode="light">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun">
                                                                                <circle cx="12" cy="12" r="5"></circle>
                                                                                <line x1="12" y1="1" x2="12" y2="3">
                                                                                </line>
                                                                                <line x1="12" y1="21" x2="12" y2="23">
                                                                                </line>
                                                                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                                                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                                                                <line x1="1" y1="12" x2="3" y2="12">
                                                                                </line>
                                                                                <line x1="21" y1="12" x2="23" y2="12">
                                                                                </line>
                                                                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                                                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                                                            </svg>
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
                                                                        <label for="profile-current-password">Current
                                                                            Password</label>
                                                                    </div>

                                                                    <div class="form-floating mb-6">
                                                                        <input type="password" class="form-control" id="profile-new-password" placeholder="New password" autocomplete="">
                                                                        <label for="profile-new-password">New
                                                                            password</label>
                                                                    </div>

                                                                    <div class="form-floating mb-6">
                                                                        <input type="password" class="form-control" id="profile-verify-password" placeholder="Verify Password" autocomplete="">
                                                                        <label for="profile-verify-password">Verify
                                                                            Password</label>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                                                        <line x1="18" y1="20" x2="18" y2="10"></line>
                                                        <line x1="12" y1="20" x2="12" y2="4"></line>
                                                        <line x1="6" y1="20" x2="6" y2="14"></line>
                                                    </svg>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                        <polyline points="16 17 21 12 16 7"></polyline>
                                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                                    </svg>
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
        <main class="main">
            <div class="container h-100">

                <div class="d-flex flex-column h-100 justify-content-center text-center">
                    <div class="mb-6">
                        <span class="icon icon-xl text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                        </span>
                    </div>

                    <p class="text-muted">Pick a person from left menu, <br> and start your conversation.</p>
                </div>

            </div>
        </main>
        <main class="main is-visible d-none" data-dropzone-area="">
            <div class="container h-100">

                <div class="d-flex flex-column h-100 position-relative">
                    <!-- Chat: Header -->
                    <div class="chat-header border-bottom py-4 py-lg-7">
                        <div class="row align-items-center">

                            <!-- Mobile: close -->
                            <div class="col-2 d-xl-none mobileClose">
                                <a class="icon icon-lg text-muted " href="#" data-toggle-chat="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                        <polyline points="15 18 9 12 15 6"></polyline>
                                    </svg>
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
                                                    <img class="avatar-img" src="https://avatar.iran.liara.run/public/boy?username=Ash" alt="">
                                                </div>
                                            </div>

                                            <div class="col overflow-hidden">
                                                <h5 class="text-truncate chatName"></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Title -->

                                    <!-- Toolbar -->
                                    <div class="col-xl-6 d-none d-xl-block">
                                        <div class="row align-items-center justify-content-end gx-6">
                                            <div class="col-auto">
                                                <a href="#" class="icon icon-lg text-muted" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-more-group" aria-controls="offcanvas-more-group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                </a>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
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
                            <div class="py-6 py-lg-12 finalBody">
                            </div>
                        </div>
                    </div>
                    <!-- Chat: Content -->


                    <!-- Chat: Footer -->
                    <div class="chat-footer pb-3 pb-lg-7 position-absolute bottom-0 start-0">
                        <!-- Chat: Files -->
                        <div class="dz-preview bg-dark " id="dz-preview-row" data-horizontal-scroll="">
                        </div>
                        <!-- Chat: Files -->

                        <!-- Chat: Form -->
                        <form class="chat-form rounded-pill bg-dark" data-emoji-form="">
                            <div class="row align-items-center gx-0">
                                <div class="col-auto">
                                    <a href="#" class="btn btn-icon btn-link text-body rounded-circle dz-clickable" id="dz-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip">
                                            <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                            </path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="col">
                                    <div class="input-group">
                                        <textarea class="form-control px-0 messageInput js-chat-message-input" placeholder="Type your message..." rows="1" data-emoji-input="" data-autosize="true" style="overflow: hidden; overflow-wrap: break-word; resize: none; height: 47px;"></textarea>
                                        <a href="#" class="input-group-text text-body pe-0" data-emoji-btn="">
                                            <span class="icon icon-lg">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smile">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                                    <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                                    <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="col-auto">
                                    <button class="btn btn-icon btn-primary rounded-circle ms-5 sendBtn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                                            <line x1="22" y1="2" x2="11" y2="13"></line>
                                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                        </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74">
                                <defs>
                                    <style>
                                        .cls-2 {
                                            fill: #fff;
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <g>
                                    <g>
                                        <path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path>
                                        <path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z">
                                        </path>
                                        <path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z">
                                        </path>
                                        <circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle>
                                        <path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path>
                                    </g>
                                </g>
                            </svg>

                            <div class="position-absolute top-0 start-0 p-5">
                                <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="profile-body">
                            <div class="avatar avatar-lg">
                                <span class="avatar-text bg-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74">
                                <defs>
                                    <style>
                                        .cls-2 {
                                            fill: #fff;
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <g>
                                    <g>
                                        <path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path>
                                        <path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z">
                                        </path>
                                        <path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z">
                                        </path>
                                        <circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle>
                                        <path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path>
                                    </g>
                                </g>
                            </svg>

                            <div class="position-absolute top-0 start-0 py-6 px-5">
                                <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="profile-body">
                            <div class="avatar avatar-xl">
                                <img class="avatar-img" src="" alt="#">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                            <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 400 140.74">
                                <defs>
                                    <style>
                                        .cls-2 {
                                            fill: #fff;
                                            opacity: 0.1;
                                        }
                                    </style>
                                </defs>
                                <g>
                                    <g>
                                        <path d="M400,125A1278.49,1278.49,0,0,1,0,125V0H400Z"></path>
                                        <path class="cls-2" d="M361.13,128c.07.83.15,1.65.27,2.46h0Q380.73,128,400,125V87l-1,0a38,38,0,0,0-38,38c0,.86,0,1.71.09,2.55C361.11,127.72,361.12,127.88,361.13,128Z">
                                        </path>
                                        <path class="cls-2" d="M12.14,119.53c.07.79.15,1.57.26,2.34v0c.13.84.28,1.66.46,2.48l.07.3c.18.8.39,1.59.62,2.37h0q33.09,4.88,66.36,8,.58-1,1.09-2l.09-.18a36.35,36.35,0,0,0,1.81-4.24l.08-.24q.33-.94.6-1.9l.12-.41a36.26,36.26,0,0,0,.91-4.42c0-.19,0-.37.07-.56q.11-.86.18-1.73c0-.21,0-.42,0-.63,0-.75.08-1.51.08-2.28a36.5,36.5,0,0,0-73,0c0,.83,0,1.64.09,2.45C12.1,119.15,12.12,119.34,12.14,119.53Z">
                                        </path>
                                        <circle class="cls-2" cx="94.5" cy="57.5" r="22.5"></circle>
                                        <path class="cls-2" d="M276,0a43,43,0,0,0,43,43A43,43,0,0,0,362,0Z"></path>
                                    </g>
                                </g>
                            </svg>

                            <div class="position-absolute top-0 start-0 p-5">
                                <button type="button" class="btn-close btn-close-white btn-close-arrow opacity-100" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        </div>

                        <div class="profile-body">
                            <div class="avatar avatar-xl">
                                <img class="avatar-img" src="" alt="#">

                                <a href="#" class="badge badge-lg badge-circle bg-primary text-white border-outline position-absolute bottom-0 end-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="2" y1="12" x2="22" y2="12"></line>
                                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                            </path>
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                                            <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                    <circle cx="12" cy="12" r="1"></circle>
                                    <circle cx="12" cy="5" r="1"></circle>
                                    <circle cx="12" cy="19" r="1"></circle>
                                </svg>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Download
                                        <div class="icon ms-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download-cloud">
                                                <polyline points="8 17 12 21 16 17"></polyline>
                                                <line x1="12" y1="12" x2="12" y2="21"></line>
                                                <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        Share
                                        <div class="icon ms-auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                                <circle cx="18" cy="5" r="3"></circle>
                                                <circle cx="6" cy="12" r="3"></circle>
                                                <circle cx="18" cy="19" r="3"></circle>
                                                <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                                <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                            </svg>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
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
    <script src="<?= $system['address'] ?>vendor.js"></script>
    <script src="<?= $system['address'] ?>template.js"></script>
    <script SYSTEM_ADDRESS='<?= $system['address'] ?>' src="<?= $system['address'] ?>script.js"></script>
</body>