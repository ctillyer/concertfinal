<?php
session_start();

    include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>July Bands</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href='assets/images/favicon.png' />
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='assets/css/font-awesome.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/themify-icons.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/flaticon.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/owl.carousel.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/slick.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.mmenu.all.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/lightbox.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/chosen.min.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/animate.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.scrollbar.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/jquery.bxslider.css'/>
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'/>
    <link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700|Great+Vibes|Montserrat:400,700|Open+Sans:400,400i,600,600i,700,800i" rel="stylesheet">
</head>
<body>
<header class="header header-basic header-style_16 header-sticky menu-no-transparent">
    <div class="header-top">

    </div>
    <div class="main-header">
        <div class="container">
            <nav id="primary-navigation" class="site-navigation">
                <div id="main-menu" class="main-nav main-menu">
                    <ul class="menu-nav">
                        <li class="menu-item menu-item-has-children megamenu-menu-item active">
                        <li class="menu-item"><a href="index.php">Home</a></li>
                        <li class="menu-item"><a href="about-us.php">About us</a></li>
                        <li class="menu-item"><a href="contact.php">Contact us</a></li>

                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Main Nav Menu -->
            <!-- Header Search -->
            <div class="header-search-main-header">
                <form role="search" method="get" action="/search" class="search-form">
                    <input type="text" value="" placeholder="Search" name="q" class="search">
                    <button type="submit" class="search-form-submit">
                        <i class="flaticon-search"></i>
                    </button>
                </form>
            </div>
            <!-- End Header Search -->

        </div>
    </div>
</header>
    <div class="main-content">
        <section id="section26">
            <div class="container">
                <!--.title-description-block-->
                <div class="title-description-block title-description-block-style_2 has-underline text-center wow fadeInUp" data-wow-delay="0.6s">
                    <h3 class="title-block" data-size="28px">Playing this month</h3>
                </div><!--End .title-description-block-->
                <!-- Product Wrap -->
                <div class="products-wraps products-wraps-style2 columns-4 wow fadeInUp " data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap">
                                    <a href="julyband1.php">
                                        <img alt="img" src="assets/images/tm/pb1.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband1.php">Trivium</a></h3>
                            <div class="product-button-action">
                                <a href="julyband1.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband2.php">
                                        <img alt="img" src="assets/images/tm/pb2.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband2.php">The Front Bottoms</a></h3>
                            <div class="product-button-action">
                                <a href="julyband2.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband3.php">
                                        <img alt="img" src="assets/images/tm/pb3.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband3.php">Capstan</a></h3>
                            <div class="product-button-action">
                                <a href="julyband3.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband4.php">
                                        <img alt="img" src="assets/images/tm/pb4.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband4.php">Waterparks</a></h3>
                            <div class="product-button-action">
                                <a href="julyband4.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband5.php">
                                        <img alt="img" src="assets/images/tm/pb5.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband5.php">The Beatles</a></h3>
                            <div class="product-button-action">
                                <a href="julyband5.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband6.php">
                                        <img alt="img" src="assets/images/tm/pb6.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband6.php">The 1975</a></h3>
                            <div class="product-button-action">
                                <a href="julyband6.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband7.php">
                                        <img alt="img" src="assets/images/tm/pb7.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband7.php">Panic! At the Disco</a></h3>
                            <div class="product-button-action">
                                <a href="julyband7.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-media">
                            <div class="product-images-wrap has-secondary-thumb">
                                    <a href="julyband8.php">
                                        <img alt="img" src="assets/images/tm/pb8.jpg">
                                    </a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name"><a href="julyband8.php">BTS</a></h3>
                            <div class="product-button-action">
                                <a href="julyband8.php" class="button add_to_cart_button"> More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Product Wrap -->
            </div>

        </section>
    <script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/slick.js'></script>
    <script type='text/javascript' src='assets/js/wow.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.mmenu.all.min.js'></script>
    <script type='text/javascript' src='assets/js/lightbox.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.scrollbar.js'></script>
    <script type='text/javascript' src='assets/js/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery-ui.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.bxslider.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='assets/js/frontend.js'></script>
    <script type='text/javascript' src='assets/js/frontend-plugin.js'></script>
</body>
</html>