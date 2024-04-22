<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?=$site_name?>">
    <!-- Page title -->
    <title><?=$site_name?> - <?=$site_des?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
    <!-- Bootstrap min.css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font Awesome.css -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Magnific Popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- MeanMenu.css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Swiper Bundle.css -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- Nice Select.css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Main.css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="style.css">
    <!-- template main style css file -->
</head>

<body>
<!-- Preloader Section Here -->
<div id="preloader" class="preloader">
    <div class="animation-preloader">
        <div class="spinner style-2">
        </div>
        <div class="txt-loading">
                    <span data-text-preloader="F" class="letters-loading">
                    F
                    </span>
            <span data-text-preloader="N" class="letters-loading">
                    N
                    </span>
            <span data-text-preloader="B" class="letters-loading">
                    B
                    </span>
            <span data-text-preloader="A" class="letters-loading">
                    A
                    </span>
            <span data-text-preloader="M" class="letters-loading">
                    M
                    </span>
            <span data-text-preloader="E" class="letters-loading">
                    E
                    </span>
            <span data-text-preloader="R" class="letters-loading">
                    R
                    </span>
            <span data-text-preloader="I" class="letters-loading">
                    I
                    </span>
            <span data-text-preloader="C" class="letters-loading">
                    C
                    </span>
            <span data-text-preloader="A" class="letters-loading">
                    A
                    </span>
        </div>
        <p class="text-center">Loading</p>
    </div>
    <div class="loader">
        <div class="row">
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader-section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>

<!-- Header Top Section Here -->
<header class="main-header main-header-1">
    <div class="main-logo">
        <a href="/">
            <img src="assets/img/logo/logo.png" alt="logo-image">
        </a>
    </div>
    <div class="main-button">
        <a href="/contact" class="theme-btn header-btn">
            Free Consulting
        </a>
    </div>
    <div class="containr">
        <div class="header-top ralt">
            <div class="container">
                <div class="top-header-items">
                    <ul class="contact-list">
                        <li>
                            <i class="far fa-envelope"></i><?$site_email?>
                        </li>
                        <li>
                            <i class="far fa-map-marker-alt"></i> <?$site_address?>
                        </li>
                    </ul>
                    <div class="header-right">
                        <ul class="contact-list">
                            <li>
                                <i class="fal fa-clock"></i>Mod-friday, 09am -05pm
                            </li>
                        </ul>
                        <ul class="social-icon">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav Menu Start -->
        <div class="header-menu-area sticky-header">
            <div class="container">
                <div class="header-menu-items">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-9 col-md-6">
                            <div class="logo-1">
                                <a href="/">
                                    <img src="assets/img/logo/logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="menu">
                                <div class="sticky-logo">
                                    <a href="/">
                                        <img src="assets/img/logo/logo.png" alt="logo-img">
                                    </a>
                                </div>
                                <nav id="main-menu" class="main-menu">
                                    <ul>
                                        <li class=" active">
                                            <a href="/">Home</a>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="services.html">Service</a></li>
                                        <li><a href="projects.html">Projects</a></li>
                                        <li class="dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="team-details.html">Team Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="news.html">News</a>
                                            <ul class="submenu">
                                                <li><a href="news.html">News</a></li>
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="menu-components">
                                <div class="contact-info-items">
                                    <div class="icon">
                                        <i class="far fa-phone-volume"></i>
                                    </div>
                                    <div class="content">
                                        <p>Urgent Call</p>
                                        <h6>+296 358 700 88</h6>
                                    </div>
                                </div>
                                <div class="header-dots">
                                    <button id="openButton">
                                        <img src="assets/img/logo/bar.png" alt="dots">
                                    </button>
                                </div>
                            </div>
                            <div class="mobile-menu-bar d-xl-none text-end">
                                <a href="#" class="mobile-menu-toggle-btn"><i class="fal fa-bars"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Menu Sidebar Section Start -->
<div class="menu-sidebar-area">
    <div class="menu-sidebar-wrapper">
        <div class="menu-sidebar-close">
            <button class="menu-sidebar-close-btn" id="menu_sidebar_close_btn">
                <i class="fal fa-times"></i>
            </button>
        </div>
        <div class="menu-sidebar-content">
            <div class="menu-sidebar-logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo.png" alt="logo">
                </a>
            </div>
            <div class="mobile-nav-menu"></div>
            <div class="info-main-items">
                <div class="info-title">
                    <h4>contact Info</h4>
                </div>
                <div class="contact-info-items d-flex align-items-center">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="content">
                        <h5>Our Location</h5>
                        <p>55 Main Street,2nd block, New York</p>
                    </div>
                </div>
                <div class="contact-info-items d-flex align-items-center">
                    <div class="icon">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h5>Email Address</h5>
                        <p>infofinland@gmail.com</p>
                    </div>
                </div>
                <div class="contact-info-items d-flex align-items-center">
                    <div class="icon">
                        <i class="fal fa-clock"></i>
                    </div>
                    <div class="content">
                        <h5>Opening Hours:</h5>
                        <p>Mod-friday, 09am -05pm</p>
                    </div>
                </div>
                <div class="contact-info-items d-flex align-items-center">
                    <div class="icon">
                        <i class="far fa-phone"></i>
                    </div>
                    <div class="content">
                        <h5>Make A Call</h5>
                        <p>+296 358 700 88</p>
                    </div>
                </div>
            </div>
            <a href="contact.html" class="theme-btn mt-5">
                contact us
            </a>
            <ul class="social-icon">
                <li>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Sidebar Area Here -->
<div id="targetElement" class="side_bar slideInRight side_bar_hidden">
    <div class="side_bar_overlay"></div>
    <div class="logo mb-50">
        <img src="assets/img/logo/footer-logo.png" alt="logo">
    </div>
    <p>
        Quis autem veumure repreh volu tate velit esse niholestiae conseua veillum dolorem eum fugiat voluta nulla pariatur systems ways
    </p>
    <div class="info mt-50">
        <div class="icon__item">
            <div class="icon">
                <i class="far fa-map-marker-alt"></i>
            </div>
            <div class="content">
                <p>Location</p>
                <h6>Main Street, Melbourne, Australia</h6>
            </div>
        </div>
        <div class="icon__item">
            <div class="icon">
                <i class="fal fa-envelope"></i>
            </div>
            <div class="content">
                <p>Email Address</p>
                <h6>Support@gmail.com</h6>
            </div>
        </div>
        <div class="icon__item">
            <div class="icon">
                <i class="far fa-phone"></i>
            </div>
            <div class="content">
                <p>Make A Call</p>
                <h6>+000 (123) 456 88</h6>
            </div>
        </div>
        <div class="icon__item">
            <div class="icon">
                <i class="fal fa-clock"></i>
            </div>
            <div class="content">
                <p>Opening Hours:</p>
                <h6>Mon-Fri 8am-5pm</h6>
            </div>
        </div>
    </div>
    <div class="single-gallery mt-40">
        <div class="gallery-wrap">
            <div class="gallery-item">
                <div class="thumb">
                    <img src="assets/img/gallery/gallery1.png" alt="gallery__img">
                    <div class="icon">
                        <i class="far fa-plus"></i>
                    </div>
                </div>
                <div class="thumb">
                    <img src="assets/img/gallery/gallery2.png" alt="gallery__img">
                    <div class="icon">
                        <i class="far fa-plus"></i>
                    </div>
                </div>
                <div class="thumb">
                    <img src="assets/img/gallery/gallery3.png" alt="gallery__img">
                    <div class="icon">
                        <i class="far fa-plus"></i>
                    </div>
                </div>
            </div>
            <div class="gallery-item">
                <div class="thumb">
                    <img src="assets/img/gallery/gallery4.png" alt="gallery__img">
                    <div class="icon">
                        <i class="far fa-plus"></i>
                    </div>
                </div>
                <div class="thumb">
                    <img src="assets/img/gallery/gallery5.png" alt="gallery__img">
                    <div class="icon">
                        <i class="far fa-plus"></i>
                    </div>
                </div>
                <div class="thumb">
                    <img src="assets/img/gallery/gallery6.png" alt="gallery__img">
                    <div class="icon">
                        <i class="far fa-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="closeButton" class="text-white"><i class="fas fa-times"></i></button>
</div>