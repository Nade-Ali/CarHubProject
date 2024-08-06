@extends("frontend.layouts.main")
@section("main-container")

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NX5VQP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- Top header start -->

<!-- Top header end -->

<!-- Main header start -->

<!-- Main header end -->

<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="frontend/img/logos/black-logo.png" alt="logo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="#" class="pt0">Index <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="index.php">Index 1</a></li>
                        <li><a href="index-2.php">Index 2</a></li>
                        <li><a href="index-3.php">Index 3</a></li>
                        <li><a href="index-4.php">Index 4</a></li>
                        <li><a href="index-5.php">Index 5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Car Listing <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="car-list-rightside.php">List Right Sidebar</a></li>
                                <li><a href="car-list-leftsidebar.php">List Left Sidebar</a></li>
                                <li><a href="car-list-fullWidth.php">List FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="car-grid-rightside.php">Grid Right Sidebar</a></li>
                                <li><a href="car-grid-leftside.php">Grid Left Sidebar</a></li>
                                <li><a href="car-grid-fullWidth.php">Grid FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Car Details <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="car-details.php">Car Details 1</a></li>
                                <li><a href="car-details-2.php">Car Details 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="active">Pages <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="team-detail.php">Team Details</a></li>
                        <li><a href="car-comparison.php">Car Compare</a></li>
                        <li><a href="search-brand.php">Car Brands</a></li>
                        <li><a href="pricing-tables.php">Pricing Tables</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="typography.php">Typography</a></li>
                        <li><a href="elements.php">Elements</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="icon.php">Icons</a></li>
                        <li><a href="coming-soon.php">Coming Soon</a></li>
                        <li><a href="404.php">Error Page</a></li>
                        <li>
                            <a href="#">Login <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="signup.php">Register</a></li>
                                <li><a href="forgot-password.php">Forgot Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Shop <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="shop-list.php">Shop List</a></li>
                        <li><a href="shop-cart.php">Shop Cart</a></li>
                        <li><a href="shop-checkout.php">Shop Checkout</a></li>
                        <li><a href="shop-details.php">Shop Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Services <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="services-2.php">Services 2</a></li>
                        <li><a href="services-details.php">Services Details</a></li>
                    </ul>
                </li>
                <li><a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="blog-post.php">Blog Post</a></li>
                        <li><a href="blog-sidebar.php">Blog Sidebar</a></li>
                        <li><a href="blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li>
                    <a href="#full-page-search">
                        <i class="fa fa-search"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="get-in-touch-box d-flex mb-2">
                <i class="flaticon-phone"></i>
                <a href="tel:0477-0477-8556-552">0477 8556 552</a>
            </div>
            <div class="get-in-touch-box d-flex mb-2">
                <i class="flaticon-mail"></i>
                <div class="media-body">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
            <div class="get-in-touch-box d-flex">
                <i class="flaticon-earth"></i>
                <div class="media-body">
                    <a href="#">info@themevessel.com</a>
                </div>
            </div>
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>About Us</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Service center strat -->
<div class="about-car content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="about-car-photo">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="frontend/img/car/car-1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="frontend/img/car/car-2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="frontend/img/car/car-3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 align-self-center">
                <div class="best-used-car">
                    <h3>Welcome to <span>Auto Car</span></h3>
                    <p>Welcome to Auto Car, your premier destination for all things automotive! Whether you're in the market for a sleek sedan, rugged SUV, or powerful truck, we've got you covered. With our extensive inventory of top-quality vehicles, finding your dream car has never been easier.</p>
                    <p class="mb-0">At Auto Car, we prioritize customer satisfaction above all else. Our knowledgeable staff is dedicated to providing you with exceptional service and expert guidance every step of the way. From browsing our inventory to securing financing, we're here to make your car buying experience smooth and stress-free.

Explore our website to discover our latest offerings and start your journey towards owning the perfect vehicle today!</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service center end -->

<!-- Service section start -->
<div class="service-section content-area bg-grea-4">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>What Are You <span>Looking For</span></h1>
            <p>" Find your dream car today!"</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-shield"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Highly  Secured</a>
                        </h5>
                        <p>"Experience peace of mind with Car House: Uncompromising security for your automotive transactions. Browse with confidence today!"</p>
                        <a href="services-2.php" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-deal"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Trusted Agents</a>
                        </h5>
                        <p>"Verified agents: Your trusted companions in car buying. Simplifying choices, ensuring satisfaction. #TrustworthyExperts"</p>
                        <a href="services-2.php" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-money"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Get an Offer</a>
                        </h5>
                        <p>"Get an unbeatable offer now! Instant cash for your car. Hassle-free process. Sell with confidence today!"</p>
                        <a href="services-2.php" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Free Support</a>
                        </h5>
                        <p>"24/7 free support: Your car queries answered instantly. Expert guidance at your fingertips. Drive worry-free!"</p>
                        <a href="services-2.php" class="read-more">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service section end -->

<!-- Counters strat -->
<div class="counters-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-car"></i>
                    </div>
                    <div class="detail align-self-center">
                        <h2 class="counter">475</h2>
                        <h5>Total Cars</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-blog"></i>
                    </div>
                    <div class="detail">
                        <h2 class="counter">1402</h2>
                        <h5>Dealer Reviews</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <div class="detail">
                        <h2 class="counter">252</h2>
                        <h5>Happy Clients</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-box-2">
                    <div class="icon">
                        <i class="flaticon-medal"></i>
                    </div>
                    <div class="detail">
                        <h2 class="counter">555</h2>
                        <h5>Awards Winning</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Our team start -->
<div class="our-team content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Executive <span>Team</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
        <div class="row">
            <div class="featured-slider slide-box-btn slider" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slide slide-box">
                    <div class="team-1">
                        <div class="photo">
                            <img src="frontend/img/avatar/avatar-12.jpg" alt="team-1" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="team-detail.php">Brandon Miller</a></h4>
                            <p>Manager</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="team-1">
                        <div class="photo">
                            <img src="frontend/img/avatar/avatar-9.jpg" alt="team-1" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="team-detail.php">Michelle Nelson</a></h4>
                            <p>Support Manager</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="team-1">
                        <div class="photo">
                            <img src="frontend/img/avatar/avatar-10.jpg" alt="team-1" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="team-detail.php">Martin Smith</a></h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="team-1">
                        <div class="photo">
                            <img src="frontend/img/avatar/avatar-11.jpg" alt="team-1" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="team-detail.php">Stone Carolyn</a></h4>
                            <p>Creative Director</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="team-1">
                        <div class="photo">
                            <img src="frontend/img/avatar/avatar-10.jpg" alt="team-1" class="img-fluid">
                            <div class="overlay">
                                <div class="border">
                                    <div class="icon-holder">
                                        <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="icon-holder">
                                        <a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h4><a href="team-detail.php">Martin Smith</a></h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our team end -->

<!-- Testimonial 2 start -->
<div class="testimonial-2 content-area-5">
    <div class="container">
        <div class="main-title">
            <h1>Why Clients <span>Love Us</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
        </div>
        <div class="row">
            <div class="featured-slider slide-box-btn slider" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slide slide-box">
                    <div class="testimonial-info">
                        <div class="user-section">
                            <div class="user-thumb">
                                <img src="frontend/img/avatar/avatar-1.jpg" alt="testimonial">
                                <div class="icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="user-name">
                                <h5>Michelle Nelson</h5>
                                <p>Consultant</p>
                            </div>
                        </div>
                        <div class="text">
                            <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit. send or receive any amount of money .Lorem ipsum dolor sit amet consectetur."</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="testimonial-info">
                        <div class="user-section">
                            <div class="user-thumb">
                                <img src="frontend/img/avatar/avatar-2.jpg" alt="testimonial">
                                <div class="icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="user-name">
                                <h5>Anne Brady</h5>
                                <p>Web Designer, Uk</p>
                            </div>
                        </div>
                        <div class="text">
                            <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit. send or receive any amount of money .Lorem ipsum dolor sit amet consectetur."</p>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="testimonial-info">
                        <div class="user-section">
                            <div class="user-thumb">
                                <img src="frontend/img/avatar/avatar-3.jpg" alt="testimonial">
                                <div class="icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                            </div>
                            <div class="user-name">
                                <h5>Carolyn Stone</h5>
                                <p>Designer</p>
                            </div>
                        </div>
                        <div class="text">
                            <p>"Bitcoin is one of the most important inventions in all of human history. For the first time ever, anyone can send or receive any amount of money .Lorem ipsum dolor sit amet consectetur adipisicing elit. send or receive any amount of money .Lorem ipsum dolor sit amet consectetur."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->

<!-- Partners strat -->
<div class="partners">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="custom-slider slide-box-btn">
                    <div class="custom-box"><img src="frontend/img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-2.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-3.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-4.png" alt="brand" class="img-fluid"></div>
                    <div class="custom-box"><img src="frontend/img/brand/brand-1.png" alt="brand" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->

<!-- Footer start -->


<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="https://storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-2-html/HTML/main/index.php#" class="search-header">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="frontend/js/jquery-2.2.0.min.js"></script>
<script src="frontend/js/popper.min.js"></script>
<script src="frontend/js/bootstrap.bundle.min.js"></script>
<script  src="frontend/js/bootstrap-submenu.js"></script>
<script  src="frontend/js/rangeslider.js"></script>
<script  src="frontend/js/jquery.mb.YTPlayer.js"></script>
<script  src="frontend/js/bootstrap-select.min.js"></script>
<script  src="frontend/js/jquery.easing.1.3.js"></script>
<script  src="frontend/js/jquery.scrollUp.js"></script>
<script  src="frontend/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="frontend/js/dropzone.js"></script>
<script  src="frontend/js/slick.min.js"></script>
<script  src="frontend/js/jquery.filterizr.js"></script>
<script  src="frontend/js/jquery.magnific-popup.min.js"></script>
<script  src="frontend/js/jquery.countdown.js"></script>
<script  src="frontend/js/jquery.mousewheel.min.js"></script>
<script  src="frontend/js/lightgallery-all.js"></script>
<script  src="frontend/js/jnoty.js"></script>
<script  src="frontend/js/sidebar.js"></script>
<script  src="frontend/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="frontend/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="frontend/js/ie10-viewport-bug-workaround.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/carhouse-2-html/HTML/main/about.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Apr 2024 20:53:42 GMT -->
</html>
