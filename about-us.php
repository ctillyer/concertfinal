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
    <title>About Us</title>
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
                              <li class="menu-item menu-item-has-children megamenu-menu-item active"><br>
                              <li class="menu-item"><a href="index.php">Home</a></li>
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
        <section id="section2-about">
            <div class="container">
                <!--.title-description-block-->
                <div class="row">
                    <div class="title-description-block title-description-block-style2 col-sm-8 col-sm-offset-2 col-xs-12 text-center wow fadeInUp" data-wow-delay="0.6s" style="padding-bottom: 120px">
                        <h3 class="title-block">welcome to Music Bar</h3>
                        <div class="desc-block">We are a venue in the centre of Leeds that hosts various different bands to perform at our bar. We allow people to register interest for bands and allow the band to see how many are attending</div>
                    </div>
                </div>
                               </div>

        </section>
        <!-- divider  -->
        <div class="container">
            <hr class="xshop-hr" style="margin: 70px 0 75px;">
        </div>
        <!-- End divider  -->
        <section id="section3-about">
            <div class="container">
                <h5 class="title-small">Meet Our Team</h5>
                <!-- Shortcode Our team -->
                <div class="ourteam-wrap xshop-owl-carousel wow fadeInUp" data-wow-delay="0.6s" data-margin="30" data-number="5" data-lop="yes">
                    <div class="team-item">
                        <figure><a href="#"><img src="assets/images/mem1.jpg" alt=""></a></figure>
                        <div class="team-item-content">
                            <div class="team-desc">Ifzal</div>
                        </div>
                    </div>
                    <div class="team-item">
                        <figure><a href="#"><img src="assets/images/mem2.jpg" alt=""></a></figure>
                        <div class="team-item-content">
                            <div class="team-desc">Chris</div>
                        </div>
                    </div>
                    <div class="team-item">
                        <figure><a href="#"><img src="assets/images/mem3.jpg" alt=""></a></figure>
                        <div class="team-item-content">
                            <div class="team-desc">Rain</div>
                        </div>
                    </div>
                    <div class="team-item">
                        <figure><a href="#"><img src="assets/images/mem4.jpg" alt=""></a></figure>
                        <div class="team-item-content">
                            <div class="team-desc">Rheema</div>
                        </div>
                    </div>
                                        <div class="team-item">
                        <figure><a href="#"><img src="assets/images/mem5.jpg" alt=""></a></figure>
                        <div class="team-item-content">
                            <div class="team-desc">Lewis</div>
                        </div>
                    </div>
                </div>
                <!-- End Shortcode Our team -->
            </div>
        </section>
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