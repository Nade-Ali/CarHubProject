@extends("frontend.layouts.main")
@section("main-container")

<head>


    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/animate.min.css">

    <link rel="stylesheet" type="text/css" href="frontend/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="frontend/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="frontend/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="frontend/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="frontend/css/slick.css">
    <link rel="stylesheet" type="text/css"  href="frontend/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css"  href="frontend/css/jnoty.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="frontend/css/sidebar.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="frontend/css/skins/red.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="frontend/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="frontend/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
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
                    <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
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
                <li><a href="#" class="active">Services <em class="fa fa-chevron-down"></em></a>
                    <ul>

                        <li><a href="services.blade.php">Services 2</a></li>
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
            <h1>Services</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Services</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- services-2 start -->
<div class="services content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Our <span>Services</span></h1>
            <p>Explore our comprehensive services tailored to meet all your automotive needs</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-support-2"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Free Support</a>
                        </h5>
                        <p>"24/7 free support: Your car queries answered instantly. Expert guidance at your fingertips. Drive worry-free with our dedicated assistance."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-speed"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Super Fast</a>
                        </h5>
                        <p>"Experience the thrill of super-fast acceleration. Get behind the wheel and feel the power of cutting-edge performance technology."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-motor"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Repairing</a>
                        </h5>
                        <p>"Trust our skilled technicians to handle all your car repair needs. From routine maintenance to major repairs, we've got you covered.".</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-air-conditioner"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">AIR conditioning</a>
                        </h5>
                        <p>"Keep cool on the road with our professional air conditioning services. Stay comfortable during your journey, no matter the weather."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-fuel"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Oil Change</a>
                        </h5>
                        <p>"Ensure peak performance with our efficient oil change services. Extend your engine's lifespan and enjoy smooth, worry-free driving."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-wheel"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Engine Repair</a>
                        </h5>
                        <p>"Revitalize your ride with our expert engine change services. Upgrade to optimal performance and reliability for a smoother driving experience."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-car-2"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Dealership</a>
                        </h5>
                        <p>"Discover a trusted dealership committed to providing top-quality vehicles, exceptional service, and unbeatable value. Your satisfaction is our priority."</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="service-info-2">
                    <div class="icon">
                        <i class="flaticon-lock"></i>
                    </div>
                    <div class="detail">
                        <h5>
                            <a href="services-details.php">Security</a>
                        </h5>
                        <p>"Drive with peace of mind knowing your vehicle is equipped with state-of-the-art security features to keep you and your belongings safe."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services-2 end -->

<!-- Counters strat -->
<div class="counters-3 bg-grea-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 border-l border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-car"></i>
                    </div>
                    <h1 class="counter">967</h1>
                    <p>Total Cars</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-blog"></i>
                    </div>
                    <h1 class="counter">1276</h1>
                    <p>Dealer Reviews</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-user"></i>
                    </div>
                    <h1 class="counter">396</h1>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 border-r">
                <div class="counter-box-3">
                    <div class="icon">
                        <i class="flaticon-medal"></i>
                    </div>
                    <h1 class="counter">177</h1>
                    <p>Awards Winning</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Service center strat -->

<!-- Service center end -->

<!-- Testimonial 2 start -->
<div class="testimonial-2 content-area-5">
    <div class="container col-pad">
        <div class="main-title">
            <h1>Why Clients <span>Love Us</span></h1>
            <p>"Our clients love us for our dedication to exceptional service, top-quality vehicles, and commitment to their satisfaction. Experience the difference today!"</p>
        </div>
        <div class="featured-slider slide-box-btn slider" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
            <div class="slide slide-box">
                <div class="testimonial-info">
                    <div class="user-section">
                        <div class="user-thumb">
                            <img src="frontend/img/avatar/avatar-11.jpg" alt="testimonial">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="user-name">
                            <h5>Syed Nade Ali</h5>
                            <p>Consultant</p>
                        </div>
                    </div>
                    <div class="text">
                        <p>Welcome to our car enthusiast's paradise! Explore a sleek, user-friendly design that showcases the latest models, detailed specifications, and stunning visuals. Dive into a seamless browsing experience tailored to fuel your automotive passion.</p>
                    </div>
                </div>
            </div>
            <div class="slide slide-box">
                <div class="testimonial-info">
                    <div class="user-section">
                        <div class="user-thumb">
                            <img src="frontend/img/avatar/nade.jpg" alt="testimonial">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="user-name">
                            <h5>Nade</h5>
                            <p>Web Designer, Lhr</p>
                        </div>
                    </div>
                    <div class="text">
                        <p>Welcome to Car Hub, your ultimate destination for all things automotive! Explore our vast collection of cars, compare features, and find your perfect ride with ease. Let us drive you into the future of car shopping with innovative tools and personalized service.</p>
                    </div>
                </div>
            </div>
            <div class="slide slide-box">
                <div class="testimonial-info">
                    <div class="user-section">
                        <div class="user-thumb">
                            <img src="frontend/img/avatar/syed-1.jpg" alt="testimonial">
                            <div class="icon">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="user-name">
                            <h5>Ali</h5>
                            <p>Designer</p>
                        </div>
                    </div>
                    <div class="text">
                        <p>Welcome to our car enthusiast's paradise! Explore a sleek, user-friendly design that showcases the latest models, detailed specifications, and stunning visuals. Dive into a seamless browsing experience tailored to fuel your automotive passion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 2 end -->

<!-- Contact 2 start -->
<div class="contact-2 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Service <span>Schedule</span></h1>
            <p>"Stay on track with our convenient service schedule. Never miss an important maintenance appointment and keep your car running smoothly."</p>
        </div>
        <form action="/services" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floating-full-name" placeholder="Full Name" name="name" required>
                                <label for="floating-full-name">Full Name</label>
                            </div>
                            @if ($errors->has('name'))
                            <span class="text-danger">
                                {{$errors->first('name')}}
                            </span>
                        @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floating-email-address" placeholder="Email Address" name="email" required>
                                <label for="floating-email-address">Email address</label>
                            </div>
                            @if ($errors->has('email'))
                            <span class="text-danger">
                                {{$errors->first('email')}}
                            </span>
                        @endif
                        </div>

                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floating-subject" placeholder="Subject" name="subject" required>
                                <label for="floating-subject">Subject</label>
                            </div>
                            @if ($errors->has('subject'))
                            <span class="text-danger">
                                {{$errors->first('subject')}}
                            </span>
                        @endif
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floating-phone-Number" placeholder="Phone Number" name="phone" required>
                                <label for="floating-phone-Number">Phone Number</label>
                            </div>
                            @if ($errors->has('phone'))
                                    <span class="text-danger">
                                        {{$errors->first('phone')}}
                                    </span>
                                @endif
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="message"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>

                            @if ($errors->has('message'))
                            <span class="text-danger">
                                {{$errors->first('message')}}
                            </span>
                        @endif
                        </div>
                        <div class="col-md-12">
                            <div class="send-btn text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-4 btn-lg">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-2">
                        <div class="ci-box d-flex mb-3">
                            <div class="icon">
                                <i class="flaticon-phone"></i>
                            </div>
                            <div class="detail">
                                <h5>Phone:</h5>
                                <p><a href="#">042-4553322</a></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex  mb-3">
                            <div class="icon">
                                <i class="flaticon-mail"></i>
                            </div>
                            <div class="detail">
                                <h5>Email:</h5>
                                <p><a href="#">info@nadeali.com</a></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex  mb-3">
                            <div class="icon">
                                <i class="flaticon-earth"></i>
                            </div>
                            <div class="detail">
                                <h5>Web:</h5>
                                <p><a href="#">info@nadeali.com</a></p>
                            </div>
                        </div>
                        <div class="ci-box d-flex">
                            <div class="icon">
                                <i class="flaticon-fax"></i>
                            </div>
                            <div class="detail">
                                <h5>Fax:</h5>
                                <p><a href="#">+92321-9383933</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact 2 end -->

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

</html>
