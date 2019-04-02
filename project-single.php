<!DOCTYPE html>

<html>
<?php
include ('config.php');
$id=$_GET['id'];
$info="SELECT en_title,en_place,area,en_sys,capacity,sanitry,wt from project as sp where sp.id=".$id;
$res= mysqli_fetch_assoc( mysqli_query($con, $info));

$img="SELECT url from project_img as i where i.pid=$id";
$res1= mysqli_query($con, $img);

$pr="SELECT en_title,id from project";
$res2= mysqli_query($con, $pr);
?>
<head>
        <meta charset="utf-8">
        <title>Rafah LTD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
        <link rel="stylesheet" href="css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="css/color-default.css"/><!-- default template color styles -->
        <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="css/animate.css"/><!-- animation for content -->
  
        <!-- Font icons -->
        <link rel="stylesheet" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->

        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,300italic,400,800,700,600' rel='stylesheet' type='text/css'>
	  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>

	        <div class="header-wrapper header-transparent">
            <!-- .header start -->
            <header id="header">
                <div id="top-bar-wrapper" class="dark clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-xs-11">
                                <ul id="quick-links" class="clearfix">
                                    <li>
                                        <span class="icon-container">
                                            <img src="img/svg/map.svg" class="img-responsive" alt="map icon"/>
                                        </span>
                                        <span><strong>Address:</strong> Rawdat alMidan Damascus Syria </span>
                                    </li>

                                    <li>
                                        <span class="icon-container">
                                            <img src="img/svg/clock.svg" class="img-responsive" alt="clock icon"/>
                                        </span>
                                        <span><strong>Sat-Thu:</strong> 09:00 - 17:00</span>
                                    </li>

                                    <li>
                                        <span class="icon-container">
                                            <img src="img/svg/email.svg" class="img-responsive" alt="email icon"/>
                                        </span>
                                        <a href="contact.php"><strong>Email:</strong> info@rafah.ltd</a>
                                    </li>
                                </ul><!-- .quick links end -->
                            </div><!-- .col-md-10 end -->
                            <div class="col-md-2 col-sm-2 col-xs-1">
                                <!-- .social-links start -->
                                <ul class="social-links">
                                   <li><a href="https://www.facebook.com/Rafah.ltd/" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter" style="color:grey;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" style="color:grey;"></i></a></li>
                                </ul><!-- .social-links end -->
                                
                                <a style="font-weight: bold" href="project-single.php?id=<?php echo $id; ?>"><span dir="rtl">En</span></a>
                                <a style="font-family: 'Droid Arabic Kufi', serif;" href="./ar/project-single.php?id=<?php echo $id; ?>"><span dir="rtl">عربي</span></a>
                            </div><!-- .col-md-2 end -->
                        </div><!-- .row end -->
                    </div><!-- .container end -->
                </div><!-- .top-bar-wrapper end -->

                <div class="header-inner">
                    <!-- .container start -->
                    <div class="container">
                        <!-- .main-nav start -->
                        <div class="main-nav">
                            <!-- .row start -->
                            <div class="row">
                                <div class="col-md-12">
                                    <nav class="navbar navbar-default nav-left" role="navigation">

                                        <!-- .navbar-header start -->
                                        <div class="navbar-header">
                                            <div class="logo">
                                                <a href="index.php">
                                                    <img src="img/logo.png" class="img-responsive" alt="Rafah LTD"/>
                                                </a>
                                            </div><!-- .logo end -->
                                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div><!-- .navbar-header start -->

                                        <!-- MAIN NAVIGATION -->
                                       <div class="collapse navbar-collapse" id="navbar-collapse">
                                            <ul class="nav navbar-nav">
                                                <li>
                                                    <a href="index.php" >Home</a>
                                                </li>   

                                                <li>
                                                    <a href="about.php" >About us</a>
                                                </li>
                                                 <li class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="true">Services</a>
                                                    <ul style="left: auto;right: 100%;" class="dropdown-menu">
                                                        <li class="dropdown-submenu"><a>Hisense</a>
                                                            <ul class="dropdown-menu">
                                                            	<li class="dropdown-submenu"><a>VRF</a>
                                                              	<ul class="dropdown-menu">
                                                              <li ><a  href="services.php?type=indoor">Indoor Unit Series</a></li> 
                                                              <li ><a  href="services.php?type=outdoor">Outdoor Unit Series</a></li> 
                                                              <li ><a  href="services.php?type=fresh">Fresh Air Systems</a></li> 
                                                          </ul>
                                                              <li ><a  href="services.php?type=air">Air to Water Unit</a></li>
                                                              <li ><a  href="services.php?type=chiller">Chiller</a></li>
                                                              <li ><a  href="services.php?type=controller">Controller</a></li>
                                                              
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu"><a  href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="true">Multitubo</a>                                                           <ul class="dropdown-menu">                                                               <li ><a  href="services.php?type=heating">Heating Accessories</a></li>                                                                <li ><a  href="services.php?type=metal">Metal Press Fetting</a></li>                                                           </ul>                                                         </li>
                                                    </ul><!-- .dropdown-menu end -->
                                                </li><!-- .dropdown end -->

                                                <li class="current-menu-item">
                                                    <a href="projects.php" >Projects</a>
                                                </li><!-- .dropdown end -->

                                                <li class="dropdown ">
                                                    <a href="news.php?limit=10" >NEWS</a>
                                                </li><!-- .dropdown end -->
                                                
                                                <li>
                                                    <a href="contact.php" >Contact</a>
                                                </li>    
                                            </ul><!-- .nav.navbar-nav end -->

                                            <!-- #search start -->
                                            <div id="search">
                                            </div><!-- #search end -->
                                        </div><!-- MAIN NAVIGATION END -->
                                    </nav><!-- .navbar.navbar-default end -->
                                </div><!-- .col-md-12 end -->
                            </div><!-- .row end -->
                        </div><!-- .main-nav end -->
                    </div><!-- .container end -->
                </div><!-- .header-inner end -->
            </header><!-- .header -->
        </div><!-- .header-wrapper.header-transparent end -->

        <!-- .page-content start -->
        <div class="page-content custom-img-background dark page-title page-title-1 mb-70">
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-6 start -->
                    <div class="col-md-8">
                        <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                            <h1><span><?php echo $res['en_title'] ?></span></h1>
                        </div><!-- .custom-heading.style-1 end -->
                    </div><!-- .col-md-6 end -->
                    <!-- .col-md-6 start -->
                    <div class="col-md-4">
                        <ol class="breadcrumb">
                            <li><strong style="color: #fff">You are here:</strong></li>
                            <li><a href="index.php"><strong style="color: #fff">Home</strong></a></li>
                            <li class="active"><strong style="color: #00b90c">Projects</strong></li>
                        </ol>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <div class="page-content">
            <div class="container">
                <div class="row">
					<aside class="col-md-4 aside">
                        <ul class="aside-widgets">

                            <li class="widget widget_nav_menu clearfix">
                                <div class="title">
                                    <h3>Projects</h3>
                                </div>
                                <ul class="menu">
								<?php
								foreach ($res2 as $p)
                                   echo '<li class="menu-item" style="background:#1c1c1c;" >
                                        <a href="project-single.php?id='.$p['id'].'"class="download-link" style="color:white;">
                                            <i class="fa fa-building"></i>
                                            '.$p['en_title'].'
                                        </a>
                                    </li>';
								?>
								</ul>
                            </li><!-- .widget.widget_nav_menu end -->
						</ul>
					</aside>
					
					<div class="col-md-8 col-sm-6">
						<h6>Name:   <?php echo $res['en_title'] ?></h6><br>
                        <h6>Location:  <?php echo $res['en_place'] ?> </h6><br>
						<h6>Area:  <?php echo $res['area'] ?>  m<sup>2</sup> </h6><br>
						<h6>System:  <?php echo $res['en_sys'] ?> </h6><br>
						<h6>MECHANICAL WORKS:   </h6><br>
						<h6>- capacity:  <?php echo $res['capacity'] ?> hp</h6>
						<?php
							if($res['sanitry'])
							echo '<h6>- senitry:  '.$res['sanitry'].' </h6>';
							if($res['wt'])
							echo '<h6>- watertratment:  '.$res['wt'].'  l/t</h6>';?>
					<?php
						foreach ($res1 as $inf)
						echo
						'<div class="blog-post clearfix">
                            <div class="post-media">
							<a class="post-img">
                                    <img src="img/pics/'.$inf['url'].'"  class="img-responsive"  alt="Rafah LTD"/>
                            </a>
							</div><!-- .post-media end -->
						</div>';
					?>
                    </div><!-- .col-md-6 end -->
				
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->


        <!-- .page-content start -->
        <div class="page-content quote style-1 custom-background bkg-black dark">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row mb-0">
                    <!-- .col-md-9 start -->
                    <div class="col-md-9 col-sm-9 col-xs-12 mb-0">
                        <div class="quote-content">
                            <div class="text">
                                <h3>contact us through phone or E-mail...</h3>
                            </div>
                        </div>
                    </div><!-- .col-md-9 end -->
                    <!-- .col-md-3 start -->
                    <div class="col-md-3 col-sm-3 col-xs-12 mb-50">
                        <div class="quote-btn">
                            <a href='contact.php' class="btn btn-primary float-right">
                                Get Support
                            </a>
                        </div>
                    </div><!-- .col-md-3 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.custom-background end -->

        <!-- #footer-wrapper start -->
        <div id="footer-wrapper">
            <!-- #footer start -->
            <footer id="footer">
                <!-- .container start -->
                <div class="container">

                    <!-- .row start -->
                    <div class="row">
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-12">
                            <a href="index.php">
                                <img src="img/logo.png" class="img-responsive" alt="Rafah LTD"/>
                            </a>

                        </div><!-- .col-md-3 end -->
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-info">
                                <span class="icon-container">
                                    <img src="img/svg/map.svg" class="img-responsive" alt="map icon"/>
                                </span>
                                <span><strong>Address:</strong> Rawdat alMidan Damascus Syria </span>
                            </div>

                        </div><!-- .col-md-3 end -->
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-info">
                                <span class="icon-container">
                                    <img src="img/svg/clock.svg" class="img-responsive" alt="clock icon"/>
                                </span>
                                <span><strong>Sat-Thu:</strong> 09:00 - 17:00</span>
                            </div>

                        </div><!-- .col-md-3 end -->
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-info">
                                <span class="icon-container">
                                    <img src="img/svg/email.svg" class="img-responsive" alt="email icon"/>
                                </span>
                                <a href="contact.php"><strong>Email:</strong> info@rafah.ltd</a>
                            </div>
                        </div><!-- .col-md-3 end -->
                    </div><!-- .row end -->
                </div><!-- .container end -->
            </footer><!-- #footer end -->
        </div><!-- #footer-wrapper end -->

        <!-- #copyright-container start -->
        <div id="copyright-container">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <!-- .col-md-6 start -->
                    <div class="col-md-6 col-sm-6">
                        <p><strong>© H&J</strong> 2018. All rights reserved</p>
                    </div><!-- .col-md-6 end -->

                    <!-- .col-md-6 start -->
                    <div class="col-md-6 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="projects.php">Projects</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->

            <a href="#" class="scroll-up">
                <span class="icon-container">
                    <img src="img/svg/arrowup.svg" class="img-responsive" alt="arrow icon"/>
                </span>
            </a>

        </div><!-- .copyright-container end -->

        <script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="bootstrap/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="js/jquery.scripts.min.js"></script><!-- modernizr, retina... -->  
        <script src="js/jquery.magnific-popup.min.js"></script><!-- used for video lightbox -->
        <script src='owl-carousel/owl.carousel.min.js'></script><!-- Carousels script -->
		<script src="js/retina.js"></script><!-- retina script -->
        <script src="js/include.js"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                $('.video-post').magnificPopup({
                    type: 'iframe',
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">' +
                                '<div class="mfp-close"></div>' +
                                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                                '</div>'
                    }
                });

                // TESTIMONIAL CAROUSEL START 
                $('#testimonial-carousel').owlCarousel({
                    items: 2, //2 items above 1000px browser width
                    itemsCustom: [[0, 1], [600, 2], [1000, 2]],
                    autoPlay: true,
                    pagination: false,
                    navigation: true
                });

            });
            /* ]]> */
        </script>

    </body>

</html>
