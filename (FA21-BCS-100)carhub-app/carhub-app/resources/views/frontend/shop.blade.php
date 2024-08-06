@extends("frontend.layouts.main")
@section("main-container")


<head>


    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/magnific-popup.css">
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
    <link rel="shortcut icon" href="frontend/frontend/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="frontend/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="frontend/js/ie-emulation-modes-warning.js"></script>
    <style>
        .shop-box {
            width:100% !important;
            height:60% !important;
        }
    </style>
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
                <li><a href="#" class="active">Shop <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a href="/shop">Shop </a></li>
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
            <h1>Shop </h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Shop </li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Shop list start -->
<div class="shop-list content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-4">
                    <h4>Shop List</h4>
                    <p>Here you can find original spare parts of your vehicle. </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Car Brakes</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img-2.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Car Rims</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img-3.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Car Wheel</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img-4.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Air Compressor</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img-2.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Car Rims</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Car Brakes</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img-4.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Air Compressor</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="shop-box">
                    <div class="shop-photo">
                        <img class="shop-theme img-fluid" src="frontend/img/shop/img-3.jpg" alt="img">
                        <div class="overlay">
                            <div class="text-section">
                                <a href="shop-details.php" class="btn add-btn">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="shop-info">
                        <h4>
                            <a href="shop-details.php">Car Wheel</a>
                        </h4>
                        <div class="sale-price">
                            <span class="del"><del>$950.00</del></span><span>$770.00</span>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop list end -->

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
