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
      <title>Home</title>
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
                              <li class="menu-item"><a href="about-us.php">About us</a></li>
                              <li class="menu-item"><a href="contact.php">Contact Us</a></li>
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
                  <!-- End Header Search -->

              </div>
          </div>
      </header>
      <div class="main-content">
          <section id="section591">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-8">
                          <!-- Banner Slide -->
                          <div class="header-banner banner-slide">
                              <div class="xshop-owl-carousel banner-wrap rev_slider_wrapper nav-control-style7" data-autoPlay="no" data-navControl="yes" data-number="1">
                                  <div class="item-slide">
                                      <figure>
                                          <img src="assets/images/slide-home6/slide41.jpg" alt="img">
                                      </figure>
                                      <div class="slide-content content-slide-v6-1 text-center">
                                          <h2 class="title-slide-lar">TRIVIUM</h2>
                                      </div>
                                  </div>
                                  <div class="item-slide">
                                      <figure>
                                          <img src="assets/images/slide-home6/slide42.jpg" alt="img">
                                      </figure>
                                      <div class="slide-content content-slide-v6-1 text-center">
                                          <h2 class="title-slide-lar">THE FRONT BOTTOMS</h2>
                                      </div>
                                  </div>
                                  <div class="item-slide">
                                      <figure>
                                          <img src="assets/images/slide-home6/slide43.jpg" alt="img">
                                      </figure>
                                      <div class="slide-content content-slide-v6-1 text-center">
                                          <h2 class="title-slide-lar">CAPSTAN</h2>
                                      </div>
                                  </div>
                                  <div class="item-slide">
                                      <figure>
                                          <img src="assets/images/slide-home6/slide44.jpg" alt="img">
                                      </figure>
                                      <div class="slide-content content-slide-v6-1 text-center">
                                          <h2 class="title-slide-lar">WATERPARKS</h2>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- End Banner Slide-->
                      </div>
                                            <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">UPCOMING PERFORMANCES:</p>
                              </figure>
                              </div><br>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Band One:<br>
                                            Trivium</p>
                              </figure>
                              </div><br>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Band Two:<br>
                                            The Front Bottoms</p>
                              </figure>
                               </div><br>
                               <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Band Three:<br>
                                            Capstan</p>
                              </figure>
                              </div><br>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Band Four:<br>
                                            Waterparks</p>
                              </figure>
						                                <figure>
                                  <p class="icon-box-desc">And more...</p>
                              </figure>
                              </div><br>


          <section id="section60">
              <div class="container">
                  
              </div>
          </section>
          <section id="section61">
              <!-- Sevice Style 4 -->
              <div class="container">
                  <div class="row">
                      <div class="col-sm-4 wow zoomIn" data-wow-delay="0.6s">
                          <div class="sevice-box-wrap sevice-style_4">
                              <div class="sevice-box-content">
                                  <h5 class="sevice-title"><a href="previous.php">Previous events</a></h5>
                                  <p class="sevice-desc">
                                      Bands played last month
                                  </p>
                              </div>

                          </div>
                      </div>
                      <div class="col-sm-4 wow zoomIn" data-wow-delay="0.6s">
                          <div class="sevice-box-wrap sevice-style_4">
                              <div class="sevice-box-content">
                                  <h5 class="sevice-title"><a href="july.php">This months events</a></h5>
                                  <p class="sevice-desc">
                                      Bands playing this month
                                  </p>
                              </div>

                          </div>
                      </div>
                      <div class="col-sm-4 wow zoomIn" data-wow-delay="0.6s">
                          <div class="sevice-box-wrap sevice-style_4">
                              <div class="sevice-box-content">
                                  <h5 class="sevice-title"><a href="nextmonth.php">July events</a></h5>
                                  <p class="sevice-desc">
                                      Bands playing next month
                                  </p>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Shortcode Colections -->
         

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