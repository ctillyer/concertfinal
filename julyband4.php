<?php
	session_start();
	include("connection.php");
	include("functions.php");
	$user_data = check_login($con);
	$user_id = $user_data["user_id"];
	$eventname = "julyband4";
	$uniqueid = $user_data["user_id"].$eventname;
	$matchtest = "";
	$match = "match";
	$nomatch = "nomatch";
    $julycount4 = 0;

	error_reporting(0);

	function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

		
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
	
	$query1 = "SELECT uniqueid FROM events";
	$result = $con->query($query1);
	
	    if(mysqli_num_rows($result) > 0){
			    while($row = $result->fetch_assoc()) {
								$a = $row['uniqueid'];
										if ($uniqueid == $a){ 
												$matchtest = "match";
											break;
											} else { $matchtest = "nomatch";
											}				


						}

				}
	
	$query2 = "SELECT eventname FROM events";
	$result = $con->query($query2);
	
	    if(mysqli_num_rows($result) > 0){
			    while($row = $result->fetch_assoc()) {
								$k = $row['eventname'];
										if ($eventname == $k){ 
												++$julycount4;
												debug_to_console("$julycount4");
												
											} 


						}

				}

	


					if((isset($_POST['delivered'])) & ($matchtest == $nomatch)) {
						debug_to_console("$matchtest");
						$query = "insert into events (event_id,user_id,eventname,uniqueid) values ('$event_id','$user_id','$eventname','$uniqueid')";
						mysqli_query($con, $query);
						echo '<script>alert("You have signed up!")</script>';

					}
						if((isset($_POST['delivered'])) & ($matchtest != $nomatch)) {
						debug_to_console("$uniqueid");

						echo '<script>alert("You have already signued up!")</script>';
						}


?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Waterparks</title>
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
                                  <div class="item-slide">
                                      <figure>
                                          <img src="assets/images/slide-home6/slide44.jpg" alt="img">
                                      </figure>

                                  </div>
                          </div>
                          <!-- End Banner Slide-->
                      </div>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Waterparks</p>
                              </figure>
                              </div><br>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Date: 24/6/2021</p>
                              </figure>
                              </div><br>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Time: 6PM-11PM</p>
                              </figure>
                               </div><br>
                               <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">Price: 15£<br>
                                  (pay at door)</br></p>
                              </figure>
                              </div><br>
                      <div class="col-sm-4">
                              <figure>
                                  <p class="icon-box-desc">2 for 1 on drinks all night</p>
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
                              </div>

                          </div>
                      </div>
                      <div>
						    <form method="post">
                                 <p class="checkout-submit">
                                      <input class="button-submit" type="submit" value="say you're coming!" name="delivered">
                                  </p>
						  		</form>
						  


    <form method="post" name="password">
		<center><input type="password" name="password"></center>
      <center><button type="submit">Admin login</button></center>
    </form>
    <?php 
      $password = ($_POST['password']);
      if ($password === "adminexample"){
        echo "<center>People coming: $julycount4</centre>";
      }
     ?> 

                      </div>
                      <div class="col-sm-4 wow zoomIn" data-wow-delay="0.6s">
                          <div class="sevice-box-wrap sevice-style_4">
                              <div class="sevice-box-content">
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