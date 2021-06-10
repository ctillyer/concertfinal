
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
    <title>Contact Us</title>
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
              <div class="container">
                  <nav id="primary-navigation" class="site-navigation">
                      <div id="main-menu" class="main-nav main-menu">
                          <ul class="menu-nav">
                              <li class="menu-item menu-item-has-children megamenu-menu-item active">
                              <li class="menu-item"><a href="index.php">Home</a></li>
                              <li class="menu-item"><a href="about-us.php">About us</a></li>
                              <li class="menu-item"><a href="logout.php">Logout</a></li><br>
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
                    </div>

                  <!-- End Header Search -->
      </header>
    <div class="main-content">
        <div class="site-content-inner">
            <div class="container">
                <div class="row">
                    <!-- Main content -->
                    <div id="primary" class="content-area col-xs-12 col-sm-12 col-md-12" style="padding:150px 0 0;">
                        <div id="main" class="site-main">
                            <!-- Contact Content -->
                                <!-- Map Element -->
                                <div class="xshop-map">

                                </div>
                                <!-- End Map Element -->
                                <!-- Contact Form Element -->
                                <div class="xshop-contact-form">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="contact-info">
                                                <h5 class="title-contact-info">Contact Info</h5>
                                                <ul class="list-contact-info equal-container">
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> address</h6>
                                                                <div class="desc-info">Leeds Beckett University, City Campus, Leeds,United Kingdom,LS1 3HE, UK</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> Phone</h6>
                                                                <div class="desc-info">07446661657</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> E-mail</h6>
                                                                <div class="desc-info"><a href="mailto:Supporta@xshop.com">Support@musicbar.com</a></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item-contact-info">
                                                        <div class="contact-info-inner equal-elem">
                                                            <div class="contact-info-content">
                                                                <h6 class="title-info"> Opening hours</h6>
                                                                <div class="desc-info">
                                                                    <p>Midday to Midnight every day</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="title-contact-info">write to us</h5>
                                            <div class="contact-form ">

                                                <form action="insert.php" method="post">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>
                                                                <input type="text" placeholder="First Name" name="user_first_name">
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12">
                                                            <p>
                                                                <input type="text" placeholder="Second Name" name="user_second_name">
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12">
                                                            <p>
                                                                <textarea type="text" placeholder="Message" aria-invalid="false" rows="5" cols="40" name="message"></textarea>
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-12 col-md-12">
                                                            <p>
                                                                <input type="submit" name="submit" class="button-duck" value="submit">
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Contact Form Element -->
                            </div>
                            <!-- Contact Content -->
                        </div>
                    </div>
                    <!-- End Main content -->
                </div>
            </div>
        </div>

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
    <script type='text/javascript' src='assets/js/frontend.js'></script>
    <script type='text/javascript' src='assets/js/frontend-plugin.js'></script>
</body>
</html>
