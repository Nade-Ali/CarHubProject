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
                    <a href="#" class="active">Car Listing <em class="fa fa-chevron-down"></em></a>
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
            <a href="{{url('https://web.facebook.com/home.php')}}" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="{{url('https://x.com/login?mx=2')}}" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="{{url('https://www.rentcars247.com/')}}" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="{{url('https://www.linkedin.com/feed/')}}" class="linkedin-bg">
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
            <h1>Car Listing</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>
                <li class="active">Car Listing</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Featured car start -->
<div class="featured-car content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search2">
                        <h3 class="sidebar-title">Search your desire car</h3>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="brand">
                                    <option>Brand</option>
                                    <option>Any</option>
                                    <option>New</option>
                                    <option>Semi-New</option>
                                    <option>Damaged</option>
                                    <option>Used</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>Location</option>
                                    <option>Sahiwal</option>
                                    <option>Rawalpindi</option>
                                    <option>Arifwala</option>
                                    <option>Karachi</option>
                                    <option>Islamabad</option>
                                    <option>Lahore</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="year">
                                    <option>Year</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                    <option>2019</option>
                                    <option>2020</option>
                                    <option>2021</option>
                                    <option>2022</option>
                                    <option>2023</option>
                                    <option>2024</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="category">
                                    <option>Category</option>
                                    <option>Luxury Car</option>
                                    <option>Pickup Truck</option>
                                    <option>Minivan</option>
                                    <option>Truck</option>
                                    <option>Sports Car</option>
                                    <option>Wagon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="transmission">
                                    <option>Transmission</option>
                                    <option>Automatic</option>
                                    <option>Manual</option>
                                    <option>Tiptronic</option>
                                </select>
                            </div>
                            <div class="range-slider clearfix">
                                <label>Price</label>
                                <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="PKR" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button type="button" class="btn btn-primary btn-4 btn-lg btn-w-100">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Brands start -->
                    <div class="widget brands">
                        <h3 class="sidebar-title">Brands</h3>
                        <form method="GET">
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">
                                    Audi
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">
                                    BMW
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">
                                    Mercedes benz
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">
                                    Lamborghini Huracán
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">
                                    Buick
                                </label>
                            </div>
                            <div class="checkbox checkbox-theme checkbox-circle">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">
                                    Bugatti
                                </label>
                            </div>
                        </form>
                    </div>
                    <!-- Posts By Category Start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Category</h3>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Luxury <span>(45)</span></a></li>
                            <li><a href="#">Pickup Truck <span>(21)</span> </a></li>
                            <li><a href="#">Sports Car <span>(19)</span></a></li>
                            <li><a href="#">Automakers <span>(22) </span></a></li>
                            <li><a href="#">Wagon <span>(9) </span></a></li>
                        </ul>
                    </div>
                    <!-- Latest tweet start -->
                    <div class="widget latest-tweet">
                        <h3 class="sidebar-title">Tweet</h3>
                        <P><a href="#">"Follow us on Twitter for the latest updates, car news, tips, and exclusive deals. Stay connected with us for all things automotive!"</P>
                    </div>
                    <!-- Question start -->
                    <div class="widget question widget-3">
                        <div class="social-list clearfix">
                            <ul>
                                <li><a href="{{url('https://web.facebook.com/home.php')}}" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{url('https://x.com/login?mx=2')}}" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{url('https://www.rentcars247.com/')}}" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                                <li><a href="{{url('https://www.linkedin.com/feed/')}}" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar clearfix">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-12">
                            <div class="sorting-options2">
                                <h5>Showing Cars List </h5>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <div class="sorting-options">
                                <a href="car-grid-leftside.php" class="change-view-btn active-view-btn float-right"><i class="fa fa-th-large"></i></a>
                            </div>
                            <div class="sorting-options-3">
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Default Order</option>
                                    <option>Price High to Low</option>
                                    <option>Price: Low to High</option>
                                    <option>Newest Properties</option>
                                    <option>Oldest Properties</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-1">
                            <div class="tag-2 bg-active">For Rent</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.php">Ferrari Red Car</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-3">
                            <div class="tag-2 bg-active">For Rent</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.php">Volkswagen Scirocco 2016</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-4">
                            <div class="tag-2 bg-active">For Sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.php">Lamborghini</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-1">
                            <div class="tag-2 bg-active">For Rent</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.php">Ferrari Red Car</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-3">
                            <div class="tag-2 bg-active">For Rent</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.php">Volkswagen Scirocco 2016</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="car-box-4 car-photo-4">
                            <div class="tag-2 bg-active">For Sale</div>
                            <div class="ling-section">
                                <h3>
                                    <a href="car-details.php">Lamborghini</a>
                                </h3>
                                <ul class="facilities-list clearfix">
                                    <li><i class="flaticon-fuel"></i> Petrol</li>
                                    <li><i class="flaticon-way"></i> 4,000 km</li>
                                    <li><i class="flaticon-manual-transmission"></i> Manual</li>
                                    <li><i class="flaticon-car"></i> Sport</li>
                                    <li><i class="flaticon-gear"></i> white</li>
                                    <li><i class="flaticon-calendar-1"></i> 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page navigation start -->
            </div>
        </div>
    </div>
</div>
<!-- Featured car end -->

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

<!-- Car Overview Modal -->
<div class="car-model-2">
    <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog" aria-labelledby="carOverviewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-title" id="carOverviewModalLabel">
                        <h4>Explore Your Dream Car</h4>
                        <h5><i class="flaticon-pin"></i> 123 Kathal St. Tampa City,</h5>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row modal-raw">
                        <div class="col-lg-6 modal-left">
                            <div class="item active">
                                <img src="frontend/img/car-13.jpg" alt="best-car" class="img-fluid modalLabel-1">
                                <img src="frontend/img/car-14.jpg" alt="best-car" class="img-fluid modalLabel-2">
                                <div class="sobuz">
                                    <div class="price-box">
                                        <span class="del-2">PKR 100000.00</span>
                                    </div>
                                    <div class="ratings-2">
                                        <span class="ratings-box">4.5/5</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        ( 7 Reviews )
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 modal-right">
                            <div class="modal-right-content">
                                <section>
                                    <h3>Features</h3>
                                    <div class="features">
                                        <ul class="bullets">
                                            <li>Cruise Control</li>
                                            <li>Airbags</li>
                                            <li>Air Conditioning</li>
                                            <li>Alarm System</li>
                                            <li>Audio Interface</li>
                                            <li>CDR Audio</li>
                                            <li>Seat Heating</li>
                                            <li>ParkAssist</li>
                                        </ul>
                                    </div>
                                </section>
                                <section>
                                    <h3>Overview</h3>
                                    <ul class="bullets">
                                        <li>Model</li>
                                        <li>Year</li>
                                        <li>Condition</li>
                                        <li>Price</li>
                                        <li>Audi</li>
                                        <li>2020</li>
                                        <li>Brand New</li>
                                        <li>PKR 50,000</li>
                                    </ul>
                                </section>
                                <div class="description">
                                    <h3>Description</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                                    <a href="car-details.php" class="btn btn-md btn-round btn-theme">Show Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
