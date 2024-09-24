<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?> | LearnHub</title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="/assets/styles/profile-styles.css">
    <link rel="stylesheet" href="/assets/styles/main.css">
    <link rel="stylesheet" href="/assets/styles/header.css">

    <link rel="stylesheet" href="/assets/main.css">
    <!-- Link to Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Archivo:wght@700&display=swap" rel="stylesheet">

</head>

<body>

    <div class="header">
        <div class="left-section">
            <div class="hamburger-menu-container">
                <!-- <img class="hamburger-menu" src="/assets/icons/hamburger-menu.svg" height="30px" /> -->
                <svg class="hamburger-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>
            </div>
            <a href="/">

                <img class="site-logo" src="/assets/icons/lernhub-logo.png" />
            </a>

            <ul class="desktop-menu">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
        <div class="middle-section">
            <input class="search-bar" type="text" name="search" placeholder="Search Course...">
            <button class="search-button"> <img class="search-icon" src="/assets/icons/search.svg">
                <div class="tooltip">Search</div>
            </button>


        </div>
        <div class="right-section">
            <div class="upload-icon-container">

                <svg class="upload-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m0-3-3-3m0 0-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                </svg>
                <div class="tooltip">Create course request</div>
            </div>

            <div class="notification-icon-container">
                <svg class="notification-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
                <div class="tooltip">Notifications</div>

                <div class="notification-count">3</div>

            </div>
            <div class="user-picture-container">
                <img class="current-user-picture" src="/assets/icons/my-channel.jpeg" alt="User Profile">
                <div class="dropdown-content">
                    <a href="/profile">Profile</a>
                    <a href="/logout">Logout</a>
                </div>
                <div class="tooltip">Profile</div>
            </div>
            <!-- Side Menu for smaller screens -->
        </div>
    </div>
    <div class="side-menu">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Help</a></li>
        </ul>
    </div>

    <script>
        // JavaScript to toggle the side menu
        document.querySelector('.hamburger-menu').addEventListener('click', function() {
            document.querySelector('.side-menu').classList.toggle('active');
        });
    </script>