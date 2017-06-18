<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <title><?php bloginfo() ?><?php wp_title(' - ', true, 'left')?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="<?php bloginfo('charset')?>">
    
    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/slider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/font-awesome/css/font-awesome.min.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/style.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Oleo+Script:400,700" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/html5shiv.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>
<body class="<?php body_class()?>">

<?php global $carhouse;?>

<!-- Top header start -->
<header class="top-header hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="list-inline">
                    <li>
                        <a href="tel:+55-417-634-7071"><i class="fa fa-phone pr-5 pl-10"></i>  <?php echo $carhouse['opt_header_phone'];?></a>
                    </li>
                    <li>
                        <a href="mailto:sales@carhouse.com">
                            <i class="fa fa-envelope-o pr-5 pl-10"></i><?php echo $carhouse['opt_header_email'];?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="top-buttons">
                    <a href="signup.html" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-user pr-10"></i> Sign Up</a>
                    <a href="login.html" class="btn btn-grey btn-sm text-uppercase"><i class="fa fa-lock pr-10"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start-->
<div class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only"><?php echo $carhouse['opt_site_name'];?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand-logo" href="index.html">
                    <img src="<?php echo $carhouse['opt_header_logo']['url'];?>" alt="<?php echo $carhouse['opt_site_name'];?>">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--<ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" class="active">Home</a></li>
                    <li class="dropdown">
                        <a href="car_list.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Car Listing<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="car_list.html">Car List (Right Sidebar)</a></li>
                            <li><a href="car_list_2.html">Car List (Left Sidebar)</a> </li>
                            <li><a href="car_grid.html">Car Grid (Right Sidebar)</a></li>
                            <li><a href="car_grid_2.html">Car Grid (Left Sidebar)</a></li>
                            <li><a href="car_details.html">Car Details</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="login.html" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                            <li><a href="404.html">404</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="dropdown">
                        <a href="car_list.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="with-right-sidebar.html">With Right Sidebar</a></li>
                            <li><a href="fullwidth.html">Fullwidth</a></li>
                            <li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>-->
                <?php
                wp_nav_menu(array(
                    'menu' => 'Header Menu', // Do not fall back to first non-empty menu.
                    'theme_location' => '__no_such_location',
                    'fallback_cb' => false
                ));

                ?>
            </div>
            <!-- /.navbar-collapse -->
            <!-- /.container -->
        </nav>
    </div>
</div>
<!-- Main header end-->

<?php if(is_home() || is_front_page()):?>
<!-- banner start-->
<div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active item-1">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <h1>WE ARE WHEEL</h1>
                        <h2>Porsche 911 turbo</h2>
                        <h4>Attract, High Performance, &amp; Convert<br>Outstanding Technology Combined</h4>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <h1>Explore <span>Your Dream</span></h1>
                        <h4>business from your</h4>
                        <div class="Website-text">Car House</div>
                    </div>
                </div>
            </div>
            <div class="item item-3">
                <div class="container">
                    <div class="banner-slider-inner-1">
                        <h1><span>wow Factor?</span><br>Standard</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="slider-mover-left" aria-hidden="true">
             <img src="<?php echo get_template_directory_uri()?>/assets/img/png/left-chevron.png" alt="left-chevron">
          </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/png/right-chevron.png" alt="right-chevron">
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- banner end-->
<?php endif;?>