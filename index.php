<?php

function sanitize_output($buffer) {

    $search = array(
        '/\>[^\S ]+/s', // strip whitespaces after tags, except space
        '/[^\S ]+\</s', // strip whitespaces before tags, except space
        '/(\s)+/s'       // shorten multiple whitespace sequences
    );

    $replace = array(
        '>',
        '<',
        '\\1'
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- Page title -->
        <title>WebTronix</title>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.png">

        <!-- Style -->
        <link rel="stylesheet" href="css/theme.css">

        <link rel="stylesheet" href="css/theme-mariner.css" title="theme-mariner">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.0/css/bootstrap-slider.min.css">
    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <p style="position: absolute; top:48%;text-align: center;left:47%; color:white;font-weight: bold;"><<span style="color:#3274CD">Web</span><span style="color:#ED9E02">Tronix</span>/></p>
            <div class="loader"></div>
        </div>
        <!-- /Preloader -->

        <!-- Header -->
        <header id="home" class="header">

            <!-- Navigation -->
            <nav id="navigation" class="navbar navbar-underline affix">

                <!-- Company Information -->
                <div class="information hidden-sm hidden-xs">
                    <div class="container">
                        <div class="row">

                            <!-- Feedback -->
                            <div class="col-md-12">
                                <div class="pull-right">
                                    <a href="#"><span class="fa fa-mail_alt"></span> info@webtronix.com</a>
                                    <a href="#"><span class="fa fa-phone"></span> +1 987 123 456</a>
                                    <a href="#contact" class="smooth-scroll" style="background-color:#3274cd; color:white;"><span class="fa fa-phone"></span> Request for Qoute</a>
                                </div>
                            </div>
                            <!-- /Feedback -->

                            <!-- Social -->
                            <div class="col-md-5">
                                <ul class="social">
                                    <li><a href="#" class="fa fa-fw fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-fw fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-fw fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-fw fa-dribbble"></a></li>
                                    <li><a href="#" class="fa fa-fw fa-pinterest"></a></li>
                                </ul>
                            </div>
                            <!-- /Social -->

                        </div>
                    </div>
                </div>
                <!-- /Company Information -->

                <div class="container">

                    <div class="row">
                        <div class="col-md-12">

                            <!-- Navigation Header -->
                            <div class="navbar-header">

                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false" aria-controls="main-menu">

                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>

                                </button>
                                <!-- /Toggle Button -->

                                <!-- Brand -->
                                <a href="#" class="brand">

                                    <!-- Logo Big -->
                                    <img src="images/webtronix-logo.png" class="logo-big" alt="">
                                    <!-- /Logo Big -->

                                    <!-- Logo Small -->
                                    <img src="images/webtronix-logo.png" class="logo-small" alt="">
                                    <!-- /Logo Small -->

                                </a>
                                <!-- /Brand -->

                            </div>
                            <!-- /Navigation Header -->

                            <!-- Navigation -->
                            <div id="main-menu" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="services.html">Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Blog</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-left-sidebar.html">Post List - Left Sidebar</a></li>
                                            <li><a href="blog.html">Post List - Right Sidebar</a></li>
                                            <li><a href="single-post.html">Single Post</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Portfolio</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-2-col.html">2 Columns</a></li>
                                            <li><a href="portfolio-3-col.html">3 Columns</a></li>
                                            <li><a href="portfolio.html">4 Columns</a></li>
                                            <li><a href="single-project.html">Project Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- /Navigation -->

                        </div>
                    </div>

                </div>
            </nav>
            <!-- /Navigation -->

        </header>
        <!-- /Header -->

        <!-- Slider -->
        <div class="slider owl-carousel owl-theme">

            <!-- /Slide -->
            <!-- Slide -->
            <div class="item mask" style="background: url(images/slide1.jpg) no-repeat center top / cover;" data-stellar-background-ratio="0.4">

                <div class="container height-100p">
                    <div class="row height-100p">

                        <div class="col-sm-6 col-md-6 height-100p bounceInLeft wow" data-wow-duration="1.3s" data-wow-delay="0.3s" data-stellar-ratio="0.7">
                            <div class="vertical-middle">
                                <h1 class="text-white wttext">< <span class="text-theme">Web</span><span style="color:#f7a400">Tronix</span> /></h1>
                                <div class="text-white h4">
                                    We are here to bring your app ideas into real life. Weather you're a start-up business or just looking online to sale your e-commerce from wordpress to an iphone app.
                                </div>
                                <a href="#about" class="smooth-scroll btn btn-theme flowbtn">The flow goes like</a>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-md-offset-2 height-100p bounceInRight wow" data-wow-duration="1.3s" data-stellar-ratio="0.8">
                            <div class="vertical-middle">
                                <img src="images/technologies_watermark.png" class="puzzle img-responsive technologies" alt="web-tronix providing technologies in angularjs php and mysql">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /Slide -->

        </div>
        <!-- /Slider -->

        <!-- /Slider -->

        <!-- Main -->
        <main class="main-container">

            <!-- Section: About -->
            <section id="about" class="section">
                <div class="container">



                    <!-- Section Header -->
                    <div class="row" style="display: none">
                        <div class="col-md-6 col-md-offset-3">
                            <header class="text-center">
                                <h2 class="section-title">About <span class="text-theme">Us</span></h2>
                                <p class="section-subtitle">It is a long established fact that a reader</p>
                            </header>
                        </div>
                    </div>
                    <!-- /Section Header -->

                    <div class="row">

                        <!-- Feature Block -->
                        <div class="technologies mockup col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeIn;">
                            <!--                    <span class="icon_link_alt icon"></span>-->
                            <img src="images/1stbox.png" />
                            <div class="h3 title">Mockup</div>
                            <p class="description">
                                The flow starts with the blue prints, mockups, 
                            </p>

                        </div>
                        <div id="mockup" class="mylightbox" style="display:none;">
                            <div class="container">
                                <button class="btn-link closebtn pull-right" style="color:white;font-size:400%;">&times;</button>
                                <div class="row text-center innerLightBox">
                                    <div class="col-md-12 col-sm-12">
                                        <u><h1 style="color:white;"><strong>MockUp's</strong></h1></u>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="card card-5">
                                                <img src="images/f6528422e01e2169fd721f0b96a4de44.jpg" class="img-responsive"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p style="margin-top:5px;">
                                                <strong>
                                                    lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->



                        <!-- Feature Block -->
                        <div class="technologies hardcode col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <!--                    <span class="icon_mobile icon"></span>-->
                            <img src="images/2ndbox.png" />
                            <div class="h3 title">Hard Code < /> </div>
                            <p class="description">
                                It is a long established fact that a reader will be distracted by the readable content of a page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
                            </p>
                            <!--                    <a href="#" class="btn btn-theme">Read more</a>-->
                        </div>
                        <div id="hardcode" class="mylightbox" style="display:none;">
                            <div class="container">
                                <button class="btn-link closebtn pull-right" style="color:white;font-size:400%;">&times;</button>
                                <div class="row text-center innerLightBox">
                                    <div class="col-md-12 col-sm-12" style="padding:10px;">
                                        <u><h1 style="color:white;"><strong>Hard Code</strong></h1></u>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="card card-5">
                                                <img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p style="margin-top:5px;">
                                                <strong>
                                                    lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                        <!-- Feature Block -->
                        <div class="technologies finished col-sm-4 feature fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.8s; animation-name: fadeIn;">
                            <!--                    <span class="icon_pens icon"></span>-->
                            <img src="images/3rdbox.png" />
                            <div class="h3 title">Finished Product</div>
                            <p class="description">
                                It is a long established fact that a reader will be distracted by the readable content of a page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
                            </p>
                            <!--                    <a href="#" class="btn btn-theme">Read more</a>-->
                        </div>
                        <div id="finished" class="mylightbox" style="display:none;">
                            <div class="container">
                                <button class="btn-link closebtn pull-right" style="color:white;font-size:400%;">&times;</button>
                                <div class="row text-center innerLightBox">
                                    <div class="col-md-12 col-sm-12" style="padding:10px;">
                                        <u>
                                            <h1 style="color:white;"><strong>Finished to go live</strong></h1>
                                        </u>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="card card-5">
                                                <img src="images/flat-wallpaper-20.jpg" class="img-responsive"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p style="margin-top:5px;">
                                                <strong>
                                                    lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                    </div>
                </div>
            </section>
            <!-- /Section: About -->

            <!-- Section: Projects -->


            <section id="projects" class="section-small bg-parallax-1">
                <div class="container">

                    <!-- Section Header -->
                    <div class="row">

                        <div class="col-md-12">
                            <header class="text-center">
                                <h2 class="section-title nr"><span class="text-theme">Latest</span> Projects</h2>
                                <p class="section-subtitle">It is a long established fact that a reader</p>
                            </header>
                        </div>

                        <div class="col-md-6">

                        </div>

                    </div>
                    <!-- /Section Header -->

                    <!-- Section Content -->
                    <div class="row mt">

                        <div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeIn;">
                            <a href="#" class="project1"><img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive card card-5 technologies"/></a>
                        </div>
                        <div id="project1" class="mylightbox" style="display:none;">
                            <div class="container">
                                <button class="btn-link closebtn pull-right" style="font-size:400%;">&times;</button>
                                <div class="row text-center innerLightBox">
                                    <div class="col-md-12 col-sm-12">
                                        <u><h1><strong>Project 1</strong></h1></u>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="card card-5">
                                                <img src="images/f6528422e01e2169fd721f0b96a4de44.jpg" class="img-responsive"/>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <p style="margin-top:5px;">
                                                <strong>
                                                    lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups lots and lots ov text here about mockups 
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.2s; animation-name: fadeIn;">
                            <a href="#"><img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive card card-5 technologies"/></a>
                        </div>

                        <div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.4s; animation-name: fadeIn;">
                            <a href="#"><img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive card card-5 technologies"/></a>
                        </div>

                        <div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.6s; animation-name: fadeIn;">
                            <a href="#"><img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive card card-5 technologies"/></a>
                        </div>

                        <div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 0.8s; animation-name: fadeIn;">
                            <a href="#"><img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive card card-5 technologies"/></a>
                        </div>

                        <div class="col-md-4 col-sm-6 fadeIn wow" data-wow-duration="1.3s" data-wow-delay="1.0s" style="visibility: visible; animation-duration: 1.3s; animation-delay: 1s; animation-name: fadeIn;">
                            <a href="#"><img src="images/bdf8695857520740279ad0da73cb8be4.jpg" class="img-responsive card card-5 technologies"/></a>
                        </div>

                    </div>
                    <!-- /Section content -->

                </div>
            </section>
            <!-- /Section: Projects -->




            <!-- Section: More Features -->
            <section id="more-features" class="section hidden-xs">
                <div class="container">

                    <!-- Section Header -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <header class="text-center">
                                <h2 class="section-title nr">Our <span class="text-theme">Services</span></h2>
                                <p class="section-subtitle">It is a long established fact that a reader</p>
                            </header>
                        </div>
                    </div>
                    <!-- /Section Header -->

                    <!-- Section Content -->
                    <div class="row section-content zoomIn wow" style="visibility: hidden; animation-name: none;">

                        <!-- Feature Block -->
                        <div class="col-md-2 col-sm-6 more-feature">
                            <div class="sg-flip-container" data-link="services/html5-applications/" ontouchstart="this.classList.toggle('hover');">
                                <div class="sg-flip-container" data-link="services/digital-strategy/" ontouchstart="this.classList.toggle('hover');">
                                    <div class="sg-flipper">
                                        <div class="sg-front">
                                            <h5><a href="/services/digital-strategy/">Digital Strategy</a></h5>
                                            <img src="images/svg/strategy-icon.svg" alt="Digital Strategy for mobile app development and web app development in San Diego">
                                        </div>
                                        <div class="sg-back">
                                            <p>It all starts with strategy and our team of product, research, and design experts is the bedrock for every partner.</p>
                                            <a href="services/digital-strategy/">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                        <!-- Feature Block -->
                        <div class="col-md-2 col-sm-6 more-feature">
                            <div class="sg-flip-container" data-link="services/digital-strategy/" ontouchstart="this.classList.toggle('hover');">
                                <div class="sg-flip-container" data-link="services/beacon-technology/">
                                    <div class="sg-flipper">
                                        <div class="sg-front">
                                            <h5><a href="services/beacon-technology/">Emerging Tech</a></h5>
                                            <img src="images/svg/emerging-tech-icon.svg" alt="San Diego top application development company to your service for emerging technology apps">
                                        </div>
                                        <div class="sg-back">
                                            <p>Whether it’s wearables, VR, connected devices, beacons, or something under our NDAs—we can tackle it.</p>
                                            <a href="services/beacon-technology/">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                        <!-- Feature Block -->
                        <div class="col-md-2 col-sm-6 more-feature">
                            <div class="sg-flip-container" data-link="services/user-experience/">
                                <div class="sg-flipper">
                                    <div class="sg-front">
                                        <h5><a href="/services/user-experience/">User Experience</a></h5>
                                        <img src="images/svg/ux-icon.svg" class="img-responsive" alt="Web design company by webtronix specializing in user experience ">
                                    </div>
                                    <div class="sg-back">
                                        <p>Design is at the center of everything we do. Driven by user journeys, our team creates beautiful, practical products that delight</p>
                                        <a href="services/user-experience/">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                        <!-- Feature Block -->
                        <div class="col-md-2 col-sm-6 more-feature">
                            <div class="sg-flip-container" data-link="services/mobile-applications/">
                                <div class="sg-flipper">
                                    <div href="/services/mobile-applications/">
                                        <div class="sg-front">
                                            <h5><a href="services/mobile-applications/">Mobile</a></h5>
                                            <img class="mobile-icon" src="images/svg/mobile-development.svg" class="img-responsive" alt="Mobile application development by webtronix">
                                        </div>
                                    </div>
                                    <div href="/services/mobile-applications/">
                                        <div class="sg-back">
                                            <p>Our mobile team brings functional, intuitive experiences to life across iOS, Android and Windows – using native code and Xamarin.</p>
                                            <a href="/services/mobile-applications/">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                        <!-- Feature Block -->
                        <div class="col-md-2 col-sm-6 more-feature">
                            <div class="sg-flip-container" data-link="services/html5-applications/">
                                <div class="sg-flipper">
                                    <div class="sg-front">
                                        <h5><a href="services/html5-applications/">Web Development</a></h5>
                                        <img src="images/svg/web-development-icon.svg" class="img-responsive" alt="Full-stack web application development by webtronix">
                                    </div>
                                    <div class="sg-back">
                                        <p>Full-stack web development that spans from front-end to service layers and client side architecture.</p>
                                        <a href="services/html5-applications/">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                        <!-- Feature Block -->
                        <div class="col-md-2 col-sm-6 more-feature">
                            <div class="sg-flip-container" data-link="services/service-oriented-architecture/">
                                <div class="sg-flipper">
                                    <div class="sg-front">
                                        <h5><a href="services/service-oriented-architecture/">Cloud Computing</a></h5>
                                        <img src="images/svg/back-end-icon.svg"  class="img-responsive" alt="Cloud computing and architecture for mobile app development and web app development by webtronix">
                                    </div>
                                    <div class="sg-back">
                                        <p>The hard work that makes every great front-end experience possible with underlying code and service layers.</p>
                                        <a href="services/service-oriented-architecture/">Learn more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Feature Block -->

                    </div>
                    <!-- /Section Content -->

                </div>
            </section>

            <!-- Flying paper plane-->
            <div class="flyingplane bg-parallax-5">

                <div class="spacer s2"></div>
                <div class="spacer s0" id="trigger"></div>
                <div id="target">
                    <img id="plane" src="images/example_bezier.png">
                    <div class="container">
                        <div id="slideshow">
                            <div>
                                <h1 style="color:white;">Think Big!</h1>
                            </div>
                            <div>
                                <h1 style="color:white;">Think Bigger !</h1>
                            </div>
                            <div>
                                <h1 style="color:white;">Think  <strong>< <span style="color:#336699">web</span><span style="color:#F7A400">Tronix</span> /></strong></h1>
                            </div>
                        </div>
                        <br/><br/>
                    </div>
                </div>
                <div class="spacer s2"></div>
            </div>
            <!-- flying paper plane ends-->


            <section id="more-features" class="section bg-light-gray">
                <div class="container">

                    <!-- Section Header -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <header class="text-center">
                                <h2 class="section-title nr">Needed <span class="text-theme">Replaced</span></h2>
                                <p class="section-subtitle">This place is required in anyway ... do not remove !</p>
                            </header>
                        </div>
                    </div>
                    <!-- /Section Header -->

                </div>
            </section>
            <!-- /Section: More Features -->

            <!-- Section: Statistics -->
            <section id="statistics" class="section bg-parallax-2">
                <div class="container">

                    <div class="row">

                        <!-- Statistic Block -->
                        <div class="col-sm-3 col-xs-6 stat">
                            <img src="images/angularjs.png" class="zoomIn wow technologies" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none;  width:128px;">
                            <div class="number animate-number h2" data-value="180"> </div> <span style="color:white;">Projects</span>
                            <h4 class="title bounceInUp wow" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none;">Angular JS</h4>
                        </div>
                        <!-- /Statistic Block -->

                        <!-- Statistic Block -->
                        <div class="col-sm-3 col-xs-6 stat">
                            <img src="images/php5.png" class="zoomIn wow technologies" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none; width:128px;">
                            <div class="number animate-number h2" data-value="1806"></div><span style="color:white;">Projects</span>
                            <h4 class="title bounceInUp wow" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none;">PHP & MYSQL</h4>
                        </div>
                        <!-- /Statistic Block -->

                        <!-- Statistic Block -->
                        <div class="col-sm-3 col-xs-6 stat">
                            <img src="images/wordpress-icon.png" class="zoomIn wow technologies" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none; width:128px;">
                            <div class="number animate-number h2" data-value="238"></div><span style="color:white;">Projects</span>
                            <h4 class="title bounceInUp wow" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none;">WordPress</h4>
                        </div>
                        <!-- /Statistic Block -->

                        <!-- Statistic Block -->
                        <div class="col-sm-3 col-xs-6 stat">
                            <img src="images/Firebase_16-logo.png" class="zoomIn wow technologies" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none; width:128px;">
                            <div class="number animate-number h2" data-value="3485"></div><span style="color:white;">Projects</span>
                            <h4 class="title bounceInUp wow" data-wow-duration="0.7s" style="visibility: hidden; animation-duration: 0.7s; animation-name: none;">Firebase</h4>
                        </div>
                        <!-- /Statistic Block -->

                    </div>

                </div>
            </section>
            <!-- /Section: Statistics -->

            <!-- Section: Best Features -->
            <section id="beast-features" class="section">
                <div class="container">

                    <!-- Section Header -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <header class="text-center">
                                <h2 class="section-title nr">Why <span class="text-theme">us?</span></h2>
                                <p class="section-subtitle">Because we belive in making your ideas into a real app</p>
                            </header>
                        </div>
                    </div>
                    <!-- /Section Header -->

                    <!-- Section Content -->
                    <div class="row section-content">


                        <div class="col-md-12">
                            <link rel="stylesheet" href="http://techlinqs.com/html/aristotle/css/responsive.css">

                            <h3 class="text-center">Our Process goes like :</h3>
                            <section class="tc-padding o-featured-courses white-bg">
                                <div class="container">

                                    <!-- Courses Cirlec Slider -->
                                    <div class="cirlec-slider">
                                        <div class="cirlec-slider-bg" style="background: url(http://techlinqs.com/html/aristotle/images/bg-border.png) no-repeat center center;">

                                            <!-- f courses -->
                                            <div class="f-courses style-top active">
                                                <div class="f-courses-img"><img src="http://techlinqs.com/html/aristotle/images/courses/img-1-1.jpg" class="img-responsive" alt=""></div>
                                                <span class="name-tag style-1 position-center-y"><strong>Plan</strong></span>
                                                <div class="f-courses-detail h-white p-white">
                                                    <h4 style="color:white;">Professional web designer training</h4>
                                                    <p style="color:white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                                    <a class="btn" href="#">View more</a>
                                                    <img class="angle-bg" src="http://techlinqs.com/html/aristotle/images/angle-bg.png" alt="">
                                                </div>
                                            </div>
                                            <!-- f courses -->

                                            <!-- f courses -->
                                            <div class="f-courses style-bottom">
                                                <div class="f-courses-img"><img src="http://techlinqs.com/html/aristotle/images/courses/img-1-2.jpg" class="img-responsive" alt=""></div>
                                                <span class="name-tag style-2 position-center-x"><strong>Design</strong></span>
                                                <div class="f-courses-detail h-white p-white">
                                                    <h4 style="color:white;">Professional web designer training</h4>
                                                    <p style="color:white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                                    <a class="btn" href="#">View more</a>
                                                    <img class="angle-bg" src="http://techlinqs.com/html/aristotle/images/angle-bg.png" alt="">
                                                </div>
                                            </div>
                                            <!-- f courses -->

                                            <!-- f courses -->
                                            <div class="f-courses style-left">
                                                <div class="f-courses-img"><img src="http://techlinqs.com/html/aristotle/images/courses/img-1-3.jpg" class="img-responsive" alt=""></div>
                                                <span class="name-tag style-3 position-center-y"><strong>Dev</strong></span>
                                                <div class="f-courses-detail h-white p-white">
                                                    <h4 style="color:white;">Professional web designer training</h4>
                                                    <p style="color:white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                                    <a class="btn" href="#">View more</a>
                                                    <img class="angle-bg" src="http://techlinqs.com/html/aristotle/images/angle-bg.png" alt="">
                                                </div>
                                            </div>
                                            <!-- f courses -->

                                            <!-- f courses -->
                                            <div class="f-courses style-top">
                                                <div class="f-courses-img"><img src="http://techlinqs.com/html/aristotle/images/courses/img-1-4.jpg" class="img-responsive" alt=""></div>
                                                <span class="name-tag style-4 position-center-x"><strong>Launch</strong></span>
                                                <div class="f-courses-detail h-white p-white">
                                                    <h4 style="color:white;">Professional web designer training</h4>
                                                    <p style="color:white;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                                                    <a class="btn" href="#">View more</a>
                                                    <img class="angle-bg" src="http://techlinqs.com/html/aristotle/images/angle-bg.png" alt="">
                                                </div>
                                            </div>
                                            <!-- f courses -->
                                        </div>
                                    </div>
                                    <!-- Courses Cirlec Slider -->
                                </div>
                            </section>

                            <!-- /Section Image -->

                        </div>
                        <!-- /Section Content -->

                    </div>
            </section>
            <!-- /Section: Best Features -->

            <!-- Section: Testimonials -->
            <section id="testimonials" class="section-small bg-light-gray" style="background-color:#E6E6E6">
                <div class="container">

                    <!-- Section Header -->
                    <div class="row">

                        <div class="col-md-12 zoomIn wow">
                            <header>
                                <h2 class="section-title">Upgrade your <span class="text-theme">Car</span> today</h2>
                                <p class="section-subtitle">Why you should keep your web apps update with latest technologies?
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to </p>
                                <br />
                                <p>Why you should keep your web apps update with latest technologies?
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to </p>
                                <br />
                                <p>Why you should keep your web apps update with latest technologies?
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to 
                                    Keeping up with the technologies is one of the things you need to </p>
                            </header>
                        </div>
                        <!--                        <div class="col-md-6 zoomIn wow">
                                                    <img src="images/Free_Retro_Car_Icons_Set_by_Vitaliy.gif" style="padding:20px;" class="img-responsive" />
                                                </div>-->
                        <style>

                            .carsgif{
                                position:absolute;
                                top:0;
                                animation-name: drive;
                                animation-duration: 3s;
                                animation-fill-mode: both;
                                animation-iteration-count: infinite;
                                animation-timing-function: cubic-bezier(0,.77,1,.28);
                            }

                            @keyframes drive{
                                from{ transform: translateX(1200px) }
                                to{ transform: translateX(-700px) }
                            }

                        </style>
                        <div class="clearfix"></div>
                        <h2 class="section-title text-center nr">Keep your <span class="text-theme">upgrades</span> moving <span class="text-theme">forward</span></h2>
                        <div class="col-md-12 zoomIn wow" style="margin-bottom:50%;">
                            <img src="images/Free_Retro_Car_Icons_Set_by_Vitaliy.gif" class="img-responsive carsgif"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /Section Header -->
                    <div class="clearfix"></div>
                </div>
            </section>
            <!-- /Section: Testimonials -->
            <div style="background-color: #E6E6E6;">
                <div class="col-md-12 hidden-lg" style="padding-bottom: 18%;"></div>
            </div>

            <!-- Section: Contact -->
            <section id="contact" class="section bg-parallax-3">
                <div class="container">

                    <!-- Section Header -->
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <header class="text-center">
                                <h2 class="section-title nr">Request a qoute for your <span class="text-theme">App</span></h2>
                                <p class="section-subtitle" style="color:white;">Get your app made today ... </p>
                                <br />
                                <style>
                                    .circle{
                                        border-radius: 500px;
                                        height:200px;
                                        width: 200px;
                                        font-size:30px;
                                        font-weight: 800;
                                        padding-top:30px;
                                        transition: background 1s, transform 0.3s 0.3s linear;
                                    }
                                    .circle:hover{
                                        transform: rotate(360deg);
                                    }
                                    .flowbtn:hover {
                                        -webkit-animation: shake 1s;
                                        animation: shake 1s;
                                    }
                                </style>

                                <a href="#about" class="btn btn-theme circle" data-toggle="modal" data-target=".bs-example-modal-lg">Request <br />or <br />Qoute</a>
                            </header>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Get a quick instant qoute</h4>
                                </div>
                                <div class="modal-body">




                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label"
                                                   for="inputName" >Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                       id="inputName" placeholder="Complete Name"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label"
                                                    for="inputEmail3">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" 
                                                       id="inputEmail3" placeholder="Email"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label"
                                                    for="inputphone">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="phone" class="form-control" 
                                                       id="inputphone" placeholder="Phone"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label"
                                                    for="ex16b">Define Budget</label>
                                            <div class="col-sm-10">
                                                <input id="ex16b" type="text" class="form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label"
                                                    for="type">App Type</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option>Static Website</option>
                                                    <option>Dynamic Web App</option>
                                                    <option>Android/iPhone App</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label"
                                                    for="tech">Technology</label>
                                            <div class="col-sm-10">
                                                <select class="form-control">
                                                    <option>Wordpress</option>
                                                    <option>Php & mysql</option>
                                                    <option>AngularJS</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label  class="col-sm-2 control-label"
                                                    for="inputmessage">Message</label>
                                            <div class="col-sm-10">
                                                <textarea name="message" id="inputmessage" class="form-control" placeholder="Message, Website references etc"></textarea>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /Section Header -->


                </div>
            </section>
            <!-- /Section: Contact -->

        </main>
        <!-- /Main -->

        <!-- Footer -->
        <footer class="footer section-small">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-md-5 col-xs-6 footer-col">

                        <!-- Footer Logo -->
                        <div class="logo">
                            <img src="images/webtronix-logo.png" alt="">
                        </div>
                        <!-- /Footer Logo -->

                        <!-- Footer Text -->
                        <p class="text">
                            It is a long established fact that a reader will be distracted by the readable.
                        </p>
                        <!-- /Footer Text -->

                        <hr>

                        <!-- Copyright -->
                        <p class="copyright">
                            Copyright © 2015-2016 <strong>WebTronix</strong>
                        </p>
                        <!-- /Copyright -->

                        <!-- Footer Social -->
                        <ul class="social-inline">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-pinterest"></a></li>
                        </ul>
                        <!-- /Footer Social -->

                    </div>
                    <!-- /Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-md-5 col-xs-6 footer-col">

                        <h3 class="title" style="color:white;">About <span class="text-theme">us</span></h3>

                        <!-- Footer Post -->
                        <div class="media post">
                            <p class="text">Why you should keep your web apps update with latest technologies? Keeping up with the technologies is one of the things you need to Keeping up with the technologies is one of the things you need to Keeping up with the technologies is one of the things you need to Keeping up with the technologies is one of the things you need to Keeping up with the technologies is one of the things you need to Keeping up with the technologies is one of the things you need to Keeping up with the technologies is one of the things you need to </p>
                        </div>
                        <!-- /Footer Post -->

                        <!-- Footer Post -->

                        <!-- /Footer Post -->

                    </div>
                    <!-- /Footer Column -->

                    <!-- Footer Column -->
                    <div class="col-md-2 col-xs-6 footer-col">

                        <h3 class="title" style="color:white;">Site Menu</h3>

                        <!-- Footer Menu -->
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <!-- /Footer Menu -->

                    </div>
                    <!-- /Footer Column -->

                    <!-- Footer Column -->

                    <!-- /Footer Column -->

                </div>
            </div>
        </footer>
        <!-- /Footer -->

        <!-- Scroll To Top -->
        <div id="scroll-to-top" class="scroll-to-top in btt">
            <i class="icon fa fa-angle-up"></i>
        </div>
        <!-- /Scroll To Top -->

        <!-- Modal: Result Message -->
        <div class="modal fade" id="result" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="fa fa-times"></i>
                        </button>
                        <h4 class="modal-title">Sending message</h4>
                    </div>

                    <div class="modal-body">

                        <div class="result-icon">
                            <div class="icon-border">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" preserveAspectRatio="none">
                                <circle cx="8" cy="8" r="6.215" transform="rotate(90 8 8)"></circle>
                                </svg>
                                <i class="icon fa fa-check"></i>
                            </div>
                        </div>

                        <p class="modal-result h4 text-center"></p>
                    </div>

                </div>
            </div>
        </div>
        <!-- /Modal: Result Message -->

        <!-- SCRIPTS -->
        <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/watch.js"></script>
        <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.animateNumber.min.js"></script>
        <script src="js/TweenMax.min.js"></script>
        <script src="js/ScrollMagic.js"></script>
        <script src="js/animation.gsap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.2.0/bootstrap-slider.min.js"></script>
        <script src="js/general.js"></script>
        <!-- /SCRIPTS -->

    </body>
</html>