<!DOCTYPE html>
<!--select p.id ,url,ar_title FROM project as p,project_img as i where p.id=(select pid from project_img LIMIT 1) limit 4
-->
<html>
 <?php
include ('config.php');
$cmd="SELECT * FROM `project`
join project_img on project_img.pid=project.id limit 5";
$res=  mysqli_query($con, $cmd);
$news_res=  mysqli_query($con,"select id,ar_title,DATE_FORMAT(date,'%b %d %Y') as date1,url from news limit 3")
?>
<head>
        <meta charset="utf-8">
        <title>Rafah LTD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/><!-- bootstrap grid -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css"/><!-- bootstrap theme -->
        <link rel="stylesheet" href="css/style.css"/><!-- template styles -->
        <link rel="stylesheet" href="css/color-default.css"/><!-- default template color styles -->
        <link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
        <link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->
        <link rel="stylesheet" href="css/animate.css"/><!-- animation for content -->
        <link rel='stylesheet' href='../owl-carousel/owl.carousel.css'/><!-- .carousels -->
        <link rel='stylesheet' href='../owl-carousel/owl.theme.css'/><!-- .carousels -->

        <!-- Font icons -->
        <link rel="stylesheet" href="../fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->

        <!-- Revolution slider -->
        <link rel="stylesheet" href="../rs-plugin/css/settings.css"/><!-- .rs-settings end -->
        <link rel="stylesheet" href="../rs-plugin/css/builder.css"/><!-- settings for rev slider -->

        <!-- Magnific Popup - video lightbox -->
        <link rel="stylesheet" href="css/magnific-popup.css" />

        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,300italic,400,800,700,600' rel='stylesheet' type='text/css'>

    </head>

    <body>

        <div dir="rtl" class="header-wrapper header-transparent">
            <!-- .header start -->
            <header id="header">
                <div id="top-bar-wrapper" class="dark clearfix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-10 col-xs-11">
                                <ul id="quick-links" class="clearfix">
                                    <li>
                                        <span class="icon-container">
                                            <img src="../img/svg/map.svg" class="img-responsive" alt="map icon"/>
                                        </span>
                                        <span><strong>العنوان :</strong> روضة الميدان دمشق سوريا  </span>
                                    </li>

                                    <li>
                                        <span class="icon-container">
                                            <img src="../img/svg/clock.svg" class="img-responsive" alt="clock icon"/>
                                        </span>
                                        <span><strong>السبت - الخميس:</strong> 09:00 - 17:00</span>
                                    </li>

                                    <li>
                                        <span class="icon-container">
                                            <img src="../img/svg/email.svg" class="img-responsive" alt="email icon"/>
                                        </span>
                                        <a href="contact.php"><strong>البريد الالكتروني:</strong> info@rafah-ltd.com</a>
                                    </li>
                                </ul><!-- .quick links end -->
                            </div><!-- .col-md-10 end -->
                            <div class="col-md-3 col-sm-2 col-xs-1">
                                
                                <!-- .social-links start -->
                                <ul class="social-links">
                                    
                                   <li><a href="https://www.facebook.com/Rafah.ltd/" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#"><i class="fa fa-twitter" style="color:grey;"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" style="color:grey;"></i></a></li>
                                    
                                </ul>
                                <!-- .social-links end -->
                                <a href="https://rafah-ltd.com:2096/" style="font-weight:bold" target="blank"><span dir="rtl">تسجيل الدخول</span></a>
                                <a style="font-weight: bold" href="../index.php"><span dir="ltr">En</span></a>
                                <a style="font-family: 'Droid Arabic Kufi', serif;" href="index.php"><span dir="ltr">عربي</span></a>
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
                                                    <img src="../img/logo.png" class="img-responsive" alt="Rafah LTD"/>
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
                                                 

                                                
                                                 <!-- .dropdown end -->

                                                <!-- .dropdown end -->

                                                <!-- .dropdown end -->
												
                                                <li class="dropdown">
                                                    <a href="contact.php" >اتصل بنا</a>
                                                </li>
                                                
                                                <li class="dropdown ">
                                                <a href="news.php?limit=10" >الاخبار</a>
                                                </li>
                                                
                                                <li class="dropdown ">
                                            <a href="projects.php" >المشاريع</a>
                                                </li>
                                                <li  class="dropdown">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="true">الخدمات</a>
                                                    <ul style="right: auto;right: 100%;" class="dropdown-menu">
                                                        <li class="dropdown-submenu"><a>هايسنس</a>
                                                            <ul style="right: auto;right: 100%;" class="dropdown-menu">
                                                            	<li class="dropdown-submenu"><a>VRF</a>
                                                              	<ul style="right: auto;right: 100%;" class="dropdown-menu">
                                                              <li ><a  href="services.php?type=indoor">Indoor Unit Series</a></li> 
                                                              <li ><a  href="services.php?type=outdoor">Outdoor Unit Series</a></li> 
                                                              <li ><a  href="services.php?type=fresh">Fresh Air Systems</a></li> 
                                                          </ul>
                                                              <li ><a  href="services.php?type=air">Air to Water Unit</a></li>
                                                              <li ><a  href="services.php?type=chiller">Chiller</a></li>
                                                              <li ><a  href="services.php?type=conditioner">Conditioner</a></li>
                                                              <li ><a  href="services.php?type=controller">Controller</a></li>
                                                              
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu"><a  href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="true">مالتيتيوبو</a>
                                                          <ul class="dropdown-menu">
                                                              <li ><a  href="services.php?type=heating">اكسسوارات التدفئة</a></li> 
                                                              <li ><a  href="services.php?type=metal">انابيب الضغط المعدنية</a></li>
                                                          </ul>
                                                        </li>
                                                    </ul><!-- .dropdown-menu end -->
                                                </li>
                                                
                                                <li>
                                                    <a href="about.php" >لمحة عن الشركة</a>
                                                </li>
                                                
                                                <li class="current-menu-item">
                                                    <a href="index.php" >الصفحة الرئيسية</a>
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

        <div dir="rtl" class="tp-banner-container fullwidthbanner">
            <div id="rev-slider" class="tp-banner">
                <ul>
                    <!-- SLIDE ONE -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                        <!-- MAIN IMAGE -->
                        <img src="../img/slider/slide-01.jpg" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                             data-x="300"
                             data-y="325"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">
                             شركة <span>الرفاه</span> المحدودة المسؤولية
                        </div>
                    </li><!-- SLIDE ONE END -->

					<!-- SLIDE TWO -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                        <!-- MAIN IMAGE -->
                        <img src="../img/slider/slide-02.jpg" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                             data-x="500"
                             data-y="325"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                             >
                          <span>تكييف</span> مركزي
                        </div>
                    </li><!-- SLIDE TWO END -->



					<li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                        <!-- MAIN IMAGE -->
                        <img src="../img/slider/slide-03.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                             data-x="425"
                             data-y="325"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                             >
                             <span>طاقة </span>صحية وشمسية
                        </div>
                    </li><!-- SLIDE three END -->



                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                        <!-- MAIN IMAGE -->
                        <img src="../img/slider/slide-04.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                             data-x="450"
                             data-y="325"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                             >
                          عملاء<span> مالتيتيوبو</span>
                        </div>
                    </li><!-- SLIDE four END -->


                    <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                        <!-- MAIN IMAGE -->
                        <img src="../img/slider/slide-05.jpg" alt="slidebg3" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                        <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                             data-x="450"
                             data-y="325"
                             data-speed="500"
                             data-start="1000"
                             data-easing="Back.easeOut"
                             data-endspeed="500"
                             style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                             >
                          عملاء<span> هايسنس</span>
                        </div>
                    </li><!-- SLIDE five END -->





                </ul>
            </div><!-- .tp-banner end -->
        </div><!-- .tp-banner-container end -->

        <!-- .page-content start -->
        <!-- .page-content end -->

        <!-- .page-content start -->
        <div dir="rtl" class="page-content quote style-1 custom-background bkg-darkgrey dark mb-70">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row mb-0">
                    
                     <div class="col-md-2 col-sm-3 col-xs-12 mb-50">
                        <div class="quote-btn">
                            <a href='contact.php' class="btn btn-primary float-right">
                                للمساعدة
                            </a>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-12 mb-50">
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-12 mb-50">
                    </div>
                    <!-- .col-md-9 start -->
                    <div class="col-md-8 col-sm-9 col-xs-12 mb-0">
                        <div class="quote-content">
                            <div class="text">
                                <h3>تواصل معنا عبر الهاتف او البريد الالكتروني...</h3>
                            </div>
                        </div>
                    </div>
                    
                    <!-- .col-md-9 end -->
                    <!-- .col-md-3 start -->
                   <!-- .col-md-3 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.custom-background end -->

        <div dir="rtl" class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box style-2">
                            <div class="feature-media">
								
                                <img src="../img/pics/img-01.jpg" width="220" height="216" alt="Rafah LTD"/>

                                <a href="https://vimeo.com/251475932" class="read-more video-post">
                                    <span class="icon-container">
                                        <img class="svg-black img-responsive" src="../img/svg/video.svg" alt="video icon"/>
                                    </span>
                                </a>
                            </div><!-- .feature-media end -->

                            <div class="feature-body">
                                <div class="custom-heading style-1">
                                    <a href="about.php">
                                        <h4>لمحة عن الشركة </h4>
                                    </a>
                                </div><!-- .custom-heading end -->
                                <p>
                                 	شركة الرفاه المحدودة المسؤولية هي شركة متخصصه بمجال أعمال التكييف المركزي والتدفئة المركزية وأعمال الصحية والطاقة الشمسية
	 تأسست الشركة عام 


                                </p>
                            </div><!-- .feature-body end -->
                        </div><!-- .feature-box-end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box style-2">
                            <div class="feature-media">
                                <img src="../img/pics/img-02.jpg" width="360" height="216" alt="Rafah LTD"/>

                                <a href="services.php?type=air" class="read-more">
                                    <span class="icon-container">
                                        <img class="svg-black img-responsive" src="../img/svg/arrow.svg" alt="arrow icon"/>
                                    </span>
                                </a>
                            </div><!-- .feature-media end -->

                            <div class="feature-body">
                                <div class="custom-heading style-1">
                                    <a href="services.php?type=air">
                                        <h4>خدماتنا</h4>
                                    </a>
                                </div><!-- .custom-heading end -->
                                <p>
                                 ما يمكننا القيام به في تكييف الهواء وخدمات الطاقة النظيفة مع نوعية كبيرة والوقت، ونحن وكلاء إلى اثنين من أكبر الشركات في سوريا التي هي هيسنيس و مولتيتوبو

                                </p>
                            </div><!-- .feature-body end -->
                        </div><!-- .feature-box-end -->
                    </div><!-- .col-md-4 end -->

                    <div dir="rtl" class="col-md-4 col-sm-4">
                        <div class="feature-box style-2">
                            <div class="feature-media">
                                <img src="../img/pics/img-03.jpg" width="360" height="216" alt="Rafah LTD"/>

                                <a href="projects.php" class="read-more">
                                    <span class="icon-container">
                                        <img class="svg-black img-responsive" src="../img/svg/arrow.svg" alt="arrow icon"/>
                                    </span>
                                </a>
                            </div><!-- .feature-media end -->

                            <div class="feature-body">
                                <div class="custom-heading style-1">
                                    <a href="projects.php">
                                        <h4>ادارة المشاريع</h4>
                                    </a>
                                </div><!-- .custom-heading end -->

                                <p>
								لقد انجزنا الكثير من المشاريع لكثير من المؤسسات بما في ذلك الشركات والجامعات والمكاتب.

                                </p>
                            </div><!-- .feature-body end -->
                        </div><!-- .feature-box-end -->
                    </div><!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->
        <div style="background-image: url('../img/pics/bkg-img1.jpg')" class="page-content quote style-2 custom-img-background dark bkg-img1">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row mb-0">
                    <!-- .col-md-12 start -->
                    <div dir="rtl" class="col-md-12 centered mb-0">
                        <div class="custom-heading style-2">
                            <h2>مهمتنا</h2>
                        </div><!-- .custom-heading end -->
                         <div class="text triggerAnimation animated" data-animate='fadeInDown'>
                            <p>تمتلك الشركة المهندسين المؤهلين، والمعلمين والفنيين المتخصصين في أنظمة التدفئة وتكييف، والطاقة البديلة</p>
					
                        </div>
                        <p class="author-name triggerAnimation animated" data-animate='fadeInDown'>أمين قطنة , المؤسس</p>
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.custom-img-background end -->

        <!-- .page-content start -->
        <div class="page-content custom-background bkg-black dark mb-70">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div dir="rtl" class="row">
                    <div class="col-md-3 col-xs-12 col-sm-6 align-right">
                        <a href="projects.php" class="btn btn-link read-more">
                            <span>عرض جميع المشاريع</span>
                            <span class="icon-container">
                                <img src="../img/svg/arrow.svg" class="img-responsive" alt="arrow icon"/>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-12 mb-50">
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-12 mb-50">
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-12 mb-50">
                    </div>
                    <div class="col-md-1 col-sm-3 col-xs-12 mb-50">
                    </div>
                    <!-- .col-md-6 start -->
                    <div class="col-md-5 col-xs-12 col-sm-6 mb-0">
                        <h3>المشاريع</h3>
                    </div><!-- .col-md-6 end -->
                    <!-- .col-md-6 start -->
                    <!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
            <!-- .container-fluid start -->
            <div  class="container-fluid">
                <!-- .row start -->
                <div class="row mb-0">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 padding-0 mb-0">
                        <!-- Gallery carousel start -->
                        <div class="carousel-wrapper">
                            <div class="carousel-container">
                                <div id="gallery-carousel" class="owl-carousel owl-theme ">
                                    <?php
									foreach ($res as $projects)
									{
									echo
									'<div class="item">
										   <div class="gallery-img ">
                                            <figure class="gallery-item-container">
                                                <img src="../img/pics/'.$projects['url'].'" width="250" height="300"  alt="Rafah LTD"/>

                                                <div class="hover-mask-container">
                                                    <div class="hover-zoom">
                                                        <a href="project-single.php?id='.$projects['id'].'">'.$projects['ar_title'].'
                                                            <span class="icon-container">
                                                                <img src="../img/svg/arrow.svg" class="img-responsive" alt="arrow icon"/>
                                                            </span>
                                                        </a>
                                                    </div><!-- .hover-zoom end -->
                                                </div><!-- .hover-mask-container end -->

                                            </figure>
                                       </div><!-- .gallery-carousel-item end -->
                                    </div>';
									}
								?>
                                </div><!-- .owl-carousel.owl-theme end -->
                            </div><!-- .carousel-container end -->
                        </div><!-- .carousel-wrapper end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
            </div><!-- .container-fluid end -->
        </div><!-- .page-content.custom-background end -->

        <div dir="rtl" class="page-content">
            <div class="container">
                <!-- .row start -->
                <div class="row mb-0">
                    <!-- .col-md-12 start -->
                    <div class="col-md-12 mb-0">
                        <div class="custom-heading style-1">
                            <h2>اخبار الشركة</h2>
                        </div><!-- .custom-heading end -->
                    </div><!-- .col-md-12 end -->
                </div><!-- .row end -->
                <!-- .row start -->
                <div class="row">
                   <?php
                   foreach($news_res as $news){
                   echo '<div class="col-md-4 col-sm-6">
                        <div class="pi-latest-post clearfix">
                            <div class="post-media">

                                    <img style="cursor:default;" src="../img/news/'.$news['url'].'" width="345" height="194.06" alt="Rafah LTD"/>

                            </div><!-- .post-media end -->

                            <div class="post-details">
                                <i class="fa fa-calendar"></i>
                                <div class="post-date">
                                    <p>
                                        '.$news['date1'].'
                                    </p>
                                </div>

                                <a href="news-single.php?id='.$news['id'].'">
                                    <h4>
                                        '.$news['ar_title'].'
                                    </h4>
                                </a>
                            </div><!-- .post-details end -->

                        </div><!-- .pi-latest-post end -->
                   </div>';}
                   ?><!-- .col-md-4 end -->




                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content end -->

        <!-- .page-content start -->


        <!-- .page-content start -->
       <!-- .page-content end -->

        <!-- .page-content start -->
        <div dir="rtl" style="background-image: url('../img/pics/bkg-img2.jpg')" class="page-content custom-img-background dark bkg-img2">
            <!-- .container start -->
            <div class="container">
                <!-- .row start -->
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box style-1">
                            <div class="feature-body">
                                <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                    <img src="../img/svg/map.svg" class="img-responsive" alt="painting icon"/>
                                </span>
                                <div class="custom-heading">
                                    <h4>Where to find us</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    نحن موجودون في روضة الميدان دمشق سوريا. زيارتنا في مكتبنا يرجى
                                </p>

                            </div><!-- .feature-body end -->
                        </div><!-- .feature-box-end -->
                    </div><!-- .col-md-4 end -->

                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box style-1">
                            <div class="feature-body">
                                <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                    <img src="../img/svg/email.svg" class="img-responsive" alt="email icon"/>
                                </span>
                                <div class="custom-heading">
                                    <h4>تواصل معنا عبر البريد الالكتروني</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                   إذا كان لديك أي أسئلة، يمكنك التواصل بنا عبر البريد الإلكتروني..
                                </p>

                            </div><!-- .feature-body end -->
                        </div><!-- .feature-box-end -->
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box style-1">
                            <div class="feature-body">
                                <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                    <img src="../img/svg/map.svg" class="img-responsive" alt="painting icon"/>
                                </span>
                                <div class="custom-heading">
                                    <h4>أين تجدنا :</h4>
                                </div><!-- .custom-heading end -->

                                <p>
                                    نحن موجودون في روضة الميدان دمشق سوريا. زيارتنا في مكتبنا يرجى
                                </p>

                            </div><!-- .feature-body end -->
                        </div><!-- .feature-box-end -->
                    </div><!-- .col-md-4 end -->

<!-- .col-md-4 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->
        </div><!-- .page-content.custom-img-background end -->

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
                                <img src="../img/logo.png" class="img-responsive" alt="Rafah LTD"/>
                            </a>

                        </div><!-- .col-md-3 end -->
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-info">
                                <span class="icon-container">
                                    <img src="../img/svg/map.svg" class="img-responsive" alt="map icon"/>
                                </span>
                                <span><strong>العنوان:</strong> روضة الميدان دمشق سوريا </span>
                            </div>

                        </div><!-- .col-md-3 end -->
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-info">
                                <span class="icon-container">
                                    <img src="../img/svg/clock.svg" class="img-responsive" alt="clock icon"/>
                                </span>
                                <span><strong>السبت - الخميس:</strong> 09:00 - 17:00</span>
                            </div>

                        </div><!-- .col-md-3 end -->
                        <!-- .col-md-3 start -->
                        <div class="col-md-3 col-sm-4">
                            <div class="footer-info">
                                <span class="icon-container">
                                    <img src="../img/svg/email.svg" class="img-responsive" alt="email icon"/>
                                </span>
                                <a href="contact.php"><strong>البريد الالكتروني:</strong> info@rafah-ltd.com</a>
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
                    <div  class="col-md-6 col-sm-6">
                        <p><strong>© H&J</strong> 2018. جميع الحقوق محفوظة</p>
                    </div><!-- .col-md-6 end -->

                    <!-- .col-md-6 start -->
                    <div dir="rtl" class="col-md-6 col-sm-6">
                        <ul class="breadcrumb">
                            <li><a href="index.php">الصفحة الرئيسية</a></li>
                            <li><a href="about.php">لمحة عن الشركة</a></li>
                            <li><a href="services.php">الخدمات</a></li>
                            <li><a href="projects.php">المشاريع</a></li>
                            <li><a href="news.php?limit=10">الاخبار</a></li>
                            <li><a href="contact.php">اتصل بنا</a></li>
                        </ul>
                    </div><!-- .col-md-6 end -->
                </div><!-- .row end -->
            </div><!-- .container end -->

            <a href="#" class="scroll-up">
                <span class="icon-container">
                    <img src="../img/svg/arrowup.svg" class="img-responsive" alt="arrow icon"/>
                </span>
            </a>

        </div><!-- .copyright-container end -->

        <script src="../js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
        <script src="../bootstrap/js/bootstrap.min.js"></script><!-- .bootstrap script -->
        <script src="../js/jquery.scripts.min.js"></script><!-- modernizr, retina... -->
        <script src="../rs-plugin/js/jquery.themepunch.tools.min.js"></script><!-- Revolution slider script -->
        <script src="../rs-plugin/js/jquery.themepunch.revolution.min.js"></script><!-- Revolution slider script -->
        <script src="../js/jquery.magnific-popup.min.js"></script><!-- used for video lightbox -->
        <script src='../owl-carousel/owl.carousel.min.js'></script><!-- Carousels script -->
        <script src="../js/retina.js"></script><!-- retina script -->
        <script src="../js/include.js"></script><!-- custom js functions -->

        <script>
            /* <![CDATA[ */
            jQuery(document).ready(function ($) {
                'use strict';

                jQuery('#rev-slider').revolution(
                        {
                            dottedOverlay: "none",
                            delay: 9000,
                            startwidth: 1170,
                            startheight: 700,
                            hideThumbs: 200,
                            thumbWidth: 100,
                            thumbHeight: 50,
                            thumbAmount: 3,
                            navigationType: "none",
                            navigationArrows: "solo",
                            navigationStyle: "preview5",
                            touchenabled: "on",
                            onHoverStop: "off",
                            swipe_velocity: 0.7,
                            swipe_min_touches: 1,
                            swipe_max_touches: 1,
                            drag_block_vertical: false,
                            keyboardNavigation: "on",
                            navigationHAlign: "center",
                            navigationVAlign: "bottom",
                            navigationHOffset: 0,
                            navigationVOffset: 20,
                            soloArrowLeftHalign: "left",
                            soloArrowLeftValign: "center",
                            soloArrowLeftHOffset: 20,
                            soloArrowLeftVOffset: 0,
                            soloArrowRightHalign: "right",
                            soloArrowRightValign: "center",
                            soloArrowRightHOffset: 20,
                            soloArrowRightVOffset: 0,
                            shadow: 0,
                            fullWidth: "on",
                            fullScreen: "off",
                            spinner: "spinner0",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            forceFullWidth: "off",
                            fullScreenAlignForce: "off",
                            minFullScreenHeight: "400",
                            hideThumbsOnMobile: "off",
                            hideNavDelayOnMobile: 1500,
                            hideBulletsOnMobile: "off",
                            hideArrowsOnMobile: "off",
                            hideThumbsUnderResolution: 0,
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            startWithSlide: 0,
                            hideTimerBar: "on"
                        });

                $('.video-post').magnificPopup({
                    type: 'iframe',
                    iframe: {
                        markup: '<div class="mfp-iframe-scaler">' +
                                '<div class="mfp-close"></div>' +
                                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                                '</div>'
                    }
                });

                // GALLERY CAROUSEL
                $('#gallery-carousel').owlCarousel({
                    items: 5, //5 items above 1000px browser width
                    itemsCustom: [[0, 1], [600, 2], [1000, 4], [1300, 5]],
                    autoPlay: true,
                    pagination: false,
                    navigation: true
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
