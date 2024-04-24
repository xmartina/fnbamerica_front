<?php
const rootDir = '/home/multistream6/domains/fnbamerica.com/public_html/';
require_once rootDir . 'config/config.php';
require_once rootDir . 'header.php';
?>
<!-- Hero Section Here -->
<section class="hero-section hero-1">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-bg" data-background="assets/img/hero/hero1.jpg">
                    <div data-animation="fadeInRight" data-delay="2.3s" class="arrow-shape">
                        <img src="assets/img/hero/arrow-shape.png" alt="arrow-shape">
                    </div>
                    <div data-animation="fadeInRight" data-delay="2.6s" class="arrow-shape-2">
                        <img src="assets/img/hero/arrow-shape2.png" alt="arrow-shape">
                    </div>
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-7 col-lg-7">
                                <div class="hero-content">
                                    <h1 data-animation="fadeInUp" data-delay="1.3s">
                                        Effortless Financial Management
                                    </h1>
                                    <h3 data-animation="fadeInUp" data-delay="1.5s">
                                        25+ Years Of Experience In Consulting Services
                                    </h3>
                                    <div class="hero-button">
                                        <a href="<?=$login_url?>" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn">
                                            Login to My Account
                                        </a>
                                        <div class="d-sm-inline video-play-btn"  data-animation="fadeInUp" data-delay="1.7s">
                                            <a href="#" class="video-popup play-video" tabindex="-1"><i class="fas fa-play"></i></a>
                                            <span class="ms-3 d-line">Watch Video</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" data-background="assets/img/hero/hero2.jpg">
                    <div data-animation="fadeInRight" data-delay="2.3s" class="arrow-shape">
                        <img src="assets/img/hero/arrow-shape.png" alt="arrow-shape">
                    </div>
                    <div data-animation="fadeInRight" data-delay="2.6s" class="arrow-shape-2">
                        <img src="assets/img/hero/arrow-shape2.png" alt="arrow-shape">
                    </div>
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-content">
                                    <h1 data-animation="fadeInUp" data-delay="1.3s">
                                        Empowering Your Financial Future
                                    </h1>
                                    <h3 data-animation="fadeInUp" data-delay="1.5s">
                                        25+ Years Of Experience In Consulting Services
                                    </h3>
                                    <div class="hero-button">
                                        <a href="<?=$signup_url?>" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn">
                                            Create an Account
                                        </a>
                                        <div class="d-sm-inline video-play-btn"  data-animation="fadeInUp" data-delay="1.7s">
                                            <a href="#" class="video-popup play-video" tabindex="-1"><i class="fas fa-play"></i></a>
                                            <span class="ms-3 d-line">Watch Video</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-bg" data-background="assets/img/hero/hero3.jpg">
                    <div data-animation="fadeInRight" data-delay="2.3s" class="arrow-shape">
                        <img src="assets/img/hero/arrow-shape.png" alt="arrow-shape">
                    </div>
                    <div data-animation="fadeInRight" data-delay="2.6s" class="arrow-shape-2">
                        <img src="assets/img/hero/arrow-shape2.png" alt="arrow-shape">
                    </div>
                    <div class="container">
                        <div class="row g-4">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-content">
                                    <h1 data-animation="fadeInUp" data-delay="1.3s">
                                        Secure Banking Solutions
                                    </h1>
                                    <h3 data-animation="fadeInUp" data-delay="1.5s">
                                        25+ Years Of Experience In Consulting Services
                                    </h3>
                                    <div class="hero-button">
                                        <a href="<?=$login_url?>" data-animation="fadeInUp" data-delay="1.7s" class="theme-btn">
                                            Login to My Account
                                        </a>
                                        <div class="d-sm-inline video-play-btn"  data-animation="fadeInUp" data-delay="1.7s">
                                            <a href="#" class="video-popup play-video" tabindex="-1"><i class="fas fa-play"></i></a>
                                            <span class="ms-3 d-line">Watch Video</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="arry-button">
            <button class="arry-prev hero-arry-prev"><i class="fal fa-arrow-right"></i></button>
            <button class="arry-next hero-arry-next"><i class="fal fa-arrow-left"></i></button>
        </div>
    </div>
</section>

<!-- Feature Section Here -->
<section class="feature-section ralt fix section-bg section-padding">
    <div class="left-shape wow tpfadeLeft" data-wow-delay=".3s">
        <img src="assets/img/feature/arrow-shape.png" alt="shape-img">
    </div>
    <div class="left-shape-2 wow tpfadeLeft" data-wow-delay=".5s">
        <img src="assets/img/feature/arrow-shape2.png" alt="shape-img">
    </div>
    <div class="right-shape">
        <img src="assets/img/feature/dot-shape.png" alt="shape-img">
    </div>
    <div class="container">
        <h6 class="sub-title text-center wow fadeInUp" data-wow-delay=".2s">
            Unlocking Growth Exploring the Powerhouse Features of Our Business Solutions
        </h6>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="feature-single-box">
                    <div class="box">
                        <h5>
                            01
                        </h5>
                    </div>
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon1.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4>
                            <a href="service-details.html">
                                Dedicated Team
                                Member
                            </a>
                        </h4>
                        <p>
                            Empowering businesses to reach new heights together.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="feature-single-box active">
                    <div class="box">
                        <h5>
                            02
                        </h5>
                    </div>
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon2.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4>
                            <a href="service-details.html">
                                Quality Business
                                Consulting Services
                            </a>
                        </h4>
                        <p>
                            Building strong financial foundations for your success.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="feature-single-box">
                    <div class="box">
                        <h5>
                            03
                        </h5>
                    </div>
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon3.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4>
                            <a href="service-details.html">
                                Fast Growing Sells
                                Development
                            </a>
                        </h4>
                        <p>
                            Your trusted partner for tailored banking solutions.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="feature-single-box">
                    <div class="box">
                        <h5>
                            04
                        </h5>
                    </div>
                    <div class="icon">
                        <img src="assets/img/feature-icon/icon4.svg" alt="icon-img">
                    </div>
                    <div class="content mt-4">
                        <h4>
                            <a href="service-details.html">
                                Innovative Ideas
                                Customer Assistance
                            </a>
                        </h4>
                        <p>
                            Driving innovation to shape your financial future.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section Here -->
<section class="about-section fix section-padding">
    <div class="container">
        <div class="single-about-1">
            <div class="row">
                <div class="col-xl-5 col-lg-6 wow tpfadeLeft" data-wow-delay=".4s">
                    <div class="about-image">
                        <img src="assets/img/about/about1.jpg" alt="about-img">
                        <div class="client-img">
                            <img src="assets/img/about/client.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 mt-5 mt-lg-0 wow tpfadeRight" data-wow-delay=".8s">
                    <div class="about-content">
                        <div class="section-title-content">
                                    <span>
                                    About Company
                                    </span>
                            <h2>
                                Welcome to First National Bank of America
                            </h2>
                        </div>
                        <h3>
                            Unlocking Growth Exploring the Powerhouse Features <br> of Our <a href="#">Financial Solutions</a>
                        </h3>
                        <p class="text">
                            At First National Bank of America, we're more than just a bank. We're your ally in achieving your financial goals. With a commitment to excellence and personalized service, we offer a wide range of banking solutions designed to meet your needs.
                        </p>
                        <div class="about-info mt-5">
                            <a href="about" class="theme-btn bg-style-2">Learn More Us</a>
                            <div class="customer-img">
                                <img src="assets/img/about/customer.jpg" alt="customer-img">
                                <h6>
                                    5m+ Trusted <br>
                                    Global Customers
                                </h6>
                            </div>
                        </div>
                        <div class="counter-item">
                            <div class="counter-box">
                                <h2><span class="count">35</span>k+</h2>
                                <p>Project Complete</p>
                            </div>
                            <div class="counter-box">
                                <h2><span class="count">28</span>+</h2>
                                <p>Years Of Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Section Here -->
<section class="service-section fix section-padding pt-0">
    <div class="service-single-wrapper">
        <div class="container">
            <div class="section-title">
                        <span class="wow fadeInUp">
                        Service We Provide
                        </span>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">
                    Modern Banking Service to <br>
                    Grow Business
                </h2>
            </div>
            <div class="swiper service-wrapper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-service-style-1">
                            <div class="service-image">
                                <img src="assets/img/service/service1.jpg" alt="service-img">
                            </div>
                            <div class="content">
                                <div class="d-flex">
                                    <div class="icon">
                                        <img src="assets/img/service/icon/icon1.svg" alt="icon-img">
                                    </div>
                                    <div class="service-title">
                                        <h3>
                                            <a href="#">
                                                Financial Planning
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <p>
                                    Tailored strategies for secure financial futures, personalized to you.
                                </p>
                                <a href="#" class="theme-btn-2  mt-3">
                                    Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-service-style-1">
                            <div class="service-image">
                                <img src="assets/img/service/service2.jpg" alt="service-img">
                            </div>
                            <div class="content">
                                <div class="d-flex">
                                    <div class="icon">
                                        <img src="assets/img/service/icon/icon2.svg" alt="icon-img">
                                    </div>
                                    <div class="service-title">
                                        <h3>
                                            <a href="#">
                                                Business Loans
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <p>
                                    Fueling growth with flexible financing options, empowering your business ambitions.
                                </p>
                                <a href="#" class="theme-btn-2  mt-3">
                                    Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-service-style-1">
                            <div class="service-image">
                                <img src="assets/img/service/service3.jpg" alt="service-img">
                            </div>
                            <div class="content">
                                <div class="d-flex">
                                    <div class="icon">
                                        <img src="assets/img/service/icon/icon3.svg" alt="icon-img">
                                    </div>
                                    <div class="service-title">
                                        <h3>
                                            <a href="#">
                                                Online Banking
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <p>
                                    24/7 access to manage your finances anytime, anywhere with ease.
                                </p>
                                <a href="#" class="theme-btn-2  mt-3">
                                    Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-service-style-1">
                            <div class="service-image">
                                <img src="assets/img/service/service1.jpg" alt="service-img">
                            </div>
                            <div class="content">
                                <div class="d-flex">
                                    <div class="icon">
                                        <img src="assets/img/service/icon/icon1.svg" alt="icon-img">
                                    </div>
                                    <div class="service-title">
                                        <h3>
                                            <a href="#">
                                                Investment Management
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                                <p>
                                    Maximizing returns through expert guidance and diversified portfolios for wealth growth.
                                </p>
                                <a href="#" class="theme-btn-2  mt-3">
                                    Read More<i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-dot text-center pt-5">
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section Here -->
<section class="why-choose-us fix section-bg-2 ralt section-padding pt-0">
    <div class="dot-shape">
        <img src="assets/img/choose-us/dot.png" alt="img">
    </div>
    <div class="circle-shape float-bob-y">
        <img src="assets/img/choose-us/circle.png" alt="img">
    </div>
    <div class="line-shape">
        <img src="assets/img/choose-us/line.png" alt="img">
    </div>
    <div class="arrow-shape wow tpfadeRight" data-wow-delay=".3s">
        <img src="assets/img/choose-us/arrow.png" alt="img">
    </div>
    <div class="arrow-shape-2 wow tpfadeRight" data-wow-delay=".5s">
        <img src="assets/img/choose-us/arrow2.png" alt="img">
    </div>
    <div class="container">
        <div class="choose-us-wrapper">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-delay=".4s">
                    <div class="choose-us-content">
                        <div class="section-title-content">
                                    <span>
                                    Get Know Why Us
                                    </span>
                            <h2>
                                Strategic Edge Advisors
                                Innovating Your Business
                                Landscape
                            </h2>
                        </div>
                        <p>
                            At First National Bank of America, we stand out for our unwavering commitment to our customers. Here's why you should choose us
                        </p>
                        <div class="circle-progress-bar-wrapper d-flex">
                            <div class="single-circle-bar">
                                <div class="circle-bar" data-percent="65" data-duration="1000">
                                </div>
                                <div class="content">
                                    <h5>Trusted Expertise</h5>
                                    <p class="mt-3">
                                        With years of experience in the banking industry, we provide knowledgeable guidance to help you navigate your financial journey.
                                    </p>
                                </div>
                            </div>
                            <div class="single-circle-bar">
                                <div class="circle-bar" data-percent="78" data-duration="1000">
                                </div>
                                <div class="content">
                                    <h5>Personalized Service</h5>
                                    <p class="mt-3">
                                        We understand that every customer is unique. That's why we offer tailored solutions to meet your specific needs and goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 mt-5 mt-lg-0">
                    <div class="choose-image ralt">
                        <img src="assets/img/choose-us/choose.png" alt="choose-img">
                        <div class="icon-box">
                            <img src="assets/img/choose-us/icon.png" alt="img">
                        </div>
                        <div class="report-image">
                            <img src="assets/img/choose-us/report.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section Here -->
<section class="choose-us-wrapper-2 fix section-padding">
    <div class="circle-shape-2 float-bob-y">
        <img src="assets/img/choose-us/circle2.png" alt="circle-shape">
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5">
                <div class="choose-us-image">
                    <img src="assets/img/choose-us/choose2.jpg" alt="choose-img">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 mt-5 mt-lg-0">
                <div class="choose-us-content">
                    <div class="section-title-content">
                                <span class="wow fadeInUp">Why Us</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">
                            Transforming Vision into
                            Business Success
                        </h2>
                    </div>
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        Empowering Entrepreneurs Every Step of the Way
                    </p>
                    <div class="row g-4 mt-4">
                        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon-items">
                                <div class="icon">
                                    <img src="assets/img/choose-us/icon/icon1.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>
                                        Strategic Financial Guidance
                                    </h4>
                                    <p>
                                        Our seasoned advisors offer strategic insights to align your vision with financial success.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon-items">
                                <div class="icon">
                                    <img src="assets/img/choose-us/icon/icon2.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>
                                        Tailored Funding Solutions
                                    </h4>
                                    <p>
                                        Unlock growth potential with customized financing options tailored to your business goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                            <div class="icon-items">
                                <div class="icon">
                                    <img src="assets/img/choose-us/icon/icon3.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>
                                        Innovative Digital Tools
                                    </h4>
                                    <p>
                                        Harness cutting-edge technology to streamline operations and drive business efficiency.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                            <div class="icon-items">
                                <div class="icon">
                                    <img src="assets/img/choose-us/icon/icon4.svg" alt="icon-img">
                                </div>
                                <div class="content">
                                    <h4>
                                        Community Partnership Initiatives
                                    </h4>
                                    <p>
                                        oin us in community-focused endeavors to expand networks and foster business connections.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Section Here -->
<section class="project-section ralt section-bg section-padding">
    <div class="dot-shape">
        <img src="assets/img/project/dot.png" alt="dot-shape">
    </div>
    <div class="arrow-shape wow tpfadeRight" data-wow-delay=".3s">
        <img src="assets/img/project/arrow-shape.png" alt="arrow-shape">
    </div>
    <div class="arrow-shape-2 wow tpfadeRight" data-wow-delay=".5s">
        <img src="assets/img/project/arrow-shape2.png" alt="arrow-shape">
    </div>
    <div class="line-shape">
        <img src="assets/img/project/line.png" alt="line-shape">
    </div>
    <div class="container">
        <div class="section-title">
                    <span class="wow fadeInUp">
                    Popular Projects
                    </span>
            <h2 class="title wow fadeInUp" data-wow-delay=".3s">
                Explore Our Latest Projects
            </h2>
        </div>
        <div class="swiper project-wrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="single-project-style-1">
                        <div class="project-image">
                            <img src="assets/img/project/project1.jpg" alt="project-img">
                        </div>
                        <div class="project-content">
                            <div class="arrow-shape">
                                <img src="assets/img/project/arrow.png" alt="arrow-img">
                            </div>
                            <div class="icon">
                                <img src="assets/img/project/icon/icon1.svg" alt="icon-img">
                            </div>
                            <p>
                                Business Growth
                            </p>
                            <h3>
                                <a href="#">
                                    Community Outreach Expansion Program
                                </a>
                            </h3>
                            <a href="#" class="theme-btn-2  mt-3">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-project-style-1">
                        <div class="project-image">
                            <img src="assets/img/project/project2.jpg" alt="project-img">
                        </div>
                        <div class="project-content">
                            <div class="arrow-shape">
                                <img src="assets/img/project/arrow.png" alt="arrow-img">
                            </div>
                            <div class="icon">
                                <img src="assets/img/project/icon/icon2.svg" alt="icon-img">
                            </div>
                            <p>
                                Marketing Strategy
                            </p>
                            <h3>
                                <a href="#">
                                    Skyline Heights Redevelopment
                                </a>
                            </h3>
                            <a href="#" class="theme-btn-2  mt-3">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-project-style-1">
                        <div class="project-image">
                            <img src="assets/img/project/project1.jpg" alt="project-img">
                        </div>
                        <div class="project-content">
                            <div class="arrow-shape">
                                <img src="assets/img/project/arrow.png" alt="arrow-img">
                            </div>
                            <div class="icon">
                                <img src="assets/img/project/icon/icon1.svg" alt="icon-img">
                            </div>
                            <p>
                                Business Growth
                            </p>
                            <h3>
                                <a href="#">
                                    Sustainable Energy Solutions Initiative
                                </a>
                            </h3>
                            <a href="#" class="theme-btn-2  mt-3">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="single-project-style-1">
                        <div class="project-image">
                            <img src="assets/img/project/project2.jpg" alt="project-img">
                        </div>
                        <div class="project-content">
                            <div class="arrow-shape">
                                <img src="assets/img/project/arrow.png" alt="arrow-img">
                            </div>
                            <div class="icon">
                                <img src="assets/img/project/icon/icon2.svg" alt="icon-img">
                            </div>
                            <p>
                                Marketing Strategy
                            </p>
                            <h3>
                                <a href="#">
                                    Digital Banking Platform Enhancement
                                </a>
                            </h3>
                            <a href="#" class="theme-btn-2  mt-3">
                                Read More<i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-dot text-center pt-5">
                <div class="dot"></div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Section Here -->
<section class="counter-wrapper section-padding">
    <div class="arrow-shape wow fadeInLeft" data-wow-delay=".3s">
        <img src="assets/img/counter/arrow-shape.png" alt="arrow-shape">
    </div>
    <div class="arrow-shape-2 wow fadeInLeft" data-wow-delay=".5s">
        <img src="assets/img/counter/arrow-shape2.png" alt="arrow-shape">
    </div>
    <div class="arrow-shape-3 wow fadeInRight" data-wow-delay=".3s">
        <img src="assets/img/counter/arrow-shape3.png" alt="arrow-shape">
    </div>
    <div class="arrow-shape-4 wow fadeInRight" data-wow-delay=".5s">
        <img src="assets/img/counter/arrow-shape4.png" alt="arrow-shape">
    </div>
    <div class="container">
        <div class="counter-main-items">
            <div class="single-counter-items wow fadeInUp" data-wow-delay=".2s">
                <div class="icon">
                    <img src="assets/img/counter/icon1.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h2>
                        <span class="count">35</span>
                        k+
                    </h2>
                    <h6>
                        Project Complete
                    </h6>
                </div>
            </div>
            <div class="single-counter-items wow fadeInUp" data-wow-delay=".4s">
                <div class="icon">
                    <img src="assets/img/counter/icon2.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h2>
                        <span class="count">25</span>
                        +
                    </h2>
                    <h6>
                        Years Of Experience
                    </h6>
                </div>
            </div>
            <div class="single-counter-items wow fadeInUp" data-wow-delay=".6s">
                <div class="icon">
                    <img src="assets/img/counter/icon3.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h2>
                        <span class="count">96</span>
                        +
                    </h2>
                    <h6>
                        Awards Winning
                    </h6>
                </div>
            </div>
            <div class="single-counter-items wow fadeInUp" data-wow-delay=".8s">
                <div class="icon">
                    <img src="assets/img/counter/icon4.svg" alt="icon-img">
                </div>
                <div class="content">
                    <h2>
                        <span class="count">96</span>
                        +
                    </h2>
                    <h6>
                        Team Members
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- News Blog Section Here -->
<section class="news-section fix ralt section-bg-2 section-padding">
    <div class="arrow-shape wow tpfadeLeft" data-wow-delay=".4s">
        <img src="assets/img/news/arrow-shape.png" alt="arrow-shape">
    </div>
    <div class="circle-shape float-bob-y">
        <img src="assets/img/news/circle-shape.png" alt="arrow-shape">
    </div>
    <div class="container">
        <div class="section-title">
                    <span class="wow fadeInUp">
                    Latest News & Blog
                    </span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                Get Every Business News & Blog
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                <div class="single-news-style-1">
                    <div class="news-image">
                        <img src="assets/img/news/news1.jpg" alt="news-img">
                        <div class="post-cat">
                            <a href="#" class="cat-name">Consulting</a>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="author-item mb-3">
                            <ul>
                                <li><i class="fal fa-calendar-alt"></i>Jan 25, 2024</li>
                            </ul>
                            <div class="post-author d-flex align-items-center">
                                <img src="assets/img/news/author.jpg" alt="author-img">
                                <p>David L. Davis</p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">
                                Navigating Market Volatility: Strategies for Stability
                            </a>
                        </h3>
                        <p>
                            Explore actionable insights on how businesses can adapt and thrive amidst market fluctuations, ensuring stability and growth in uncertain times.
                        </p>
                        <a href="#" class="theme-btn-2  mt-3">
                            Read More<i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="single-news-style-1">
                    <div class="news-image">
                        <img src="assets/img/news/news2.jpg" alt="news-img">
                        <div class="post-cat">
                            <a href="#" class="cat-name">Consulting</a>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="author-item mb-3">
                            <ul>
                                <li><i class="fal fa-calendar-alt"></i>Mar 1, 2024</li>
                            </ul>
                            <div class="post-author d-flex align-items-center">
                                <img src="assets/img/news/author.jpg" alt="author-img">
                                <p>David L. Davis</p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">
                                Unlocking the Power of Data: Leveraging Analytics for Business Success
                            </a>
                        </h3>
                        <p>
                            Delve into the world of data analytics and learn how harnessing data-driven insights can drive informed decision-making and propel business growth in today's digital landscape.
                        </p>
                        <a href="#" class="theme-btn-2  mt-3">
                            Read More<i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="single-news-style-1">
                    <div class="news-image">
                        <img src="assets/img/news/news3.jpg" alt="news-img">
                        <div class="post-cat">
                            <a href="#" class="cat-name">Consulting</a>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="author-item mb-3">
                            <ul>
                                <li><i class="fal fa-calendar-alt"></i>Feb 18, 2024</li>
                            </ul>
                            <div class="post-author d-flex align-items-center">
                                <img src="assets/img/news/author.jpg" alt="author-img">
                                <p>David L. Davis</p>
                            </div>
                        </div>
                        <h3>
                            <a href="#">
                                Building Resilience: Strategies for Business Continuity
                            </a>
                        </h3>
                        <p>
                            Discover practical tips and best practices for fortifying your business against unforeseen challenges, ensuring resilience and continuity in the face of adversity.
                        </p>
                        <a href="#" class="theme-btn-2  mt-3">
                            Read More<i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Logo Section Here -->
<section class="brand-section ralt section-padding section-bg-2 pt-0">
    <div class="arrow-shape wow tpfadeRight" data-wow-delay=".4s">
        <img src="assets/img/brand/arrow-shape.png" alt="arrow-shape">
    </div>
    <div class="container">
        <div class="single-brand-style-1">
            <h6 class="wow fadeInUp" data-wow-delay=".3s">
                Our Trusted Partners
            </h6>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="assets/img/brand/logo1.png" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="assets/img/brand/logo2.png" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="assets/img/brand/logo3.png" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="assets/img/brand/logo4.png" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-logo">
                            <img src="assets/img/brand/logo5.png" alt="brand-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Here -->
<section class="contact-section section-padding pb-0 fix ralt">
    <div class="dot-shape">
        <img src="assets/img/contact/dot.png" alt="dot-img">
    </div>
    <div class="frame-shape">
        <img src="assets/img/contact/frame.png" alt="frame-img">
    </div>
    <div class="frame-shape-2">
        <img src="assets/img/contact/frame.png" alt="frame-img">
    </div>
    <div class="container">
        <div class="single-contact-us">
            <div class="row justify-content-between">
                <div class="col-xxl-5 col-xl-5 col-lg-6">
                    <div class="section-title-content">
                                <span class="wow fadeInLeft">
                                Get Consultations
                                </span>
                        <h2 class="wow fadeInLeft" data-wow-delay=".2">
                            We Are Ready to Help
                            Your Business Grow
                        </h2>
                    </div>
                    <p class="wow fadeInLeft" data-wow-delay=".4">
                        We value your input and are here to address any questions,
                        concerns, or feedback you may have
                    </p>
                    <div class="contact-info-item d-flex align-items-center wow fadeInLeft" data-wow-delay=".2s">
                        <i class="far fa-envelope"></i>
                        <div class="content">
                            <p>
                                Email Us
                            </p>
                            <h3>
                                <?=$site_email;?>
                            </h3>
                        </div>
                    </div>
                    <div class="contact-info-item d-flex align-items-center wow fadeInLeft" data-wow-delay=".4s">
                        <i class="far fa-phone-alt"></i>
                        <div class="content">
                            <p>
                                Call Us
                            </p>
                            <h3>
                                <?=$site_number;?>
                            </h3>
                        </div>
                    </div>
                    <div class="contact-info-item d-flex align-items-center wow fadeInLeft" data-wow-delay=".6s">
                        <i class="far fa-map-marker-alt"></i>
                        <div class="content">
                            <p>
                                Location
                            </p>
                            <h3>
                                <?=$site_address;?>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-8 wow tpfadeRight" data-wow-delay=".8s">
                    <div class="contact-image">
                        <img src="assets/img/contact/contact.png" alt="contact-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once rootDir . 'footer.php'; ?>