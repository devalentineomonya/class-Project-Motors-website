<?php
session_start();
include_once 'php\config\connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/scrollreveal"></script>
<!-- Add Swiper library -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">


    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/about.css">
</head>

<body>
    <div class="upper home-upper not-found-upper login-upper hire-upper buy-upper contact-upper about-upper">
        <div class="navbar-container">
            <div class="logo-container">
                <div class="custom-logo">
                    <a href="/"><img src="../images/siteImages/logo.png" alt="Logo"></a>

                </div>
            </div>
            <nav class="navbar">
                <ul class="nav-d-flex">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/hire" class="nav-link">Hire Car</a></li>
                    <li class="nav-item"><a href="/buy" class="nav-link">Buy Car</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
                    <?php
                    if (isset($_SESSION["currentUser"])) {
                        echo '<li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>';
                    } else {
                        echo '<li class="nav-item"><a href="/login" class="nav-link">Login</a></li>';
                    }
                    ?>
                </ul>
            </nav>
            <div class="nav-search" id="openSearchOverlay">
                <button><img src="../images/siteImages/search.png" alt=""></button>
            </div>
        </div>
        <div class="bottom-section">
            <h1 class="h1top"></h1>
        </div>
    </div>

    <div class="mobile-navbar-overlay" id="sidebarOverlay">
        <div class="close" id="closeSidebarOverlay">
            <img src="../images/siteImages/close.png" alt="">
        </div>
    </div>
    <nav class="mobile-nav">
        <div class="mobile-navbar-container" id="scrollTarget">
            <div class="mobile-logo">
                <img src="../images/siteImages/logo.png" alt="">
            </div>

            <div class="mobile-menu" id="openSidebarOverlay">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
        </div>
        <ul class="mobile-nav-d-flex" id="mobileSidebar">
            <li>
                <p>MENU</p>
            </li>
            <hr>
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/hire" class="nav-link">Hire Car</a></li>
            <li class="nav-item"><a href="/buy" class="nav-link">Buy Car</a></li>
            <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
            <?php
            if (isset($_SESSION["currentUser"])) {
                echo '<li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>';
            } else {
                echo '<li class="nav-item"><a href="/login" class="nav-link">Login</a></li>';
            }
            ?>
            <div class="mobile-search">
                <div class="search">
                    <form action="/search" method="get">
                        <div>
                            <img src="../images/siteImages/search-dark.png" alt="">
                            <input type="text" placeholder="Type to search..." name="s">
                        </div>
                    </form>
                </div>
            </div>
        </ul>
    </nav>

    <div class="search-overlay" id="searchOverlay">
        <div class="close" id="closeSearchOverlay">
            <img src="../images/siteImages/close.png" alt="">
        </div>
        <div class="search-content closed" id="searchContent">
            <form action="/search" method="get">
                <img src="../images/siteImages/search.png" alt="">
                <input type="text" placeholder="Type To Search..." name="s" id="search">
            </form>
        </div>
    </div>