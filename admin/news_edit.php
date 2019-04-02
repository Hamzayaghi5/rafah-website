<!DOCTYPE HTML>
<html>
<?php
include ('../config.php');
include ('check_session.php');

$cmd="select id,en_title,url FROM news order by date DESC";
$news= mysqli_query($con, $cmd);
?>

<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css">
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="mother-grid-inner">
              <?php require_once('header.php');?>
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>News</li>
		</ol>
		<div class="agile3-grids">
		
			<div class="gallery-grids">
				<?php
					foreach ($news as $n)
					echo '<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grids-right1">
						<div class="gallery-grid">
							<a class="example-image-link" href="../img/news/'.$n['url'].'" data-lightbox="example-set">
								<img src="../img/news/'.$n['url'].'" width="500" height="500" alt="">
							</a>
						</div>
							

					</div>
					
					<h3 id="forms-horizontal">
					'.$n['en_title'].'
					</h3>
					<div class="bs-component mb20 col-md-4">
						<a href="news_update.php?id='.$n['id'].'"><button type="button" class="btn btn-success btn-block">Edit</button></a>
					</DIV>
					<div class="bs-component mb20 col-md-4">
						<button type="button" onclick="fun('.$n['id'].')" class="btn btn-dark  btn-block" style="background-color:#EE5744;">Delete</button>
					</DIV></div>';
					
				
				?>
				

				<div class="clearfix"> </div>
				<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		
	</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		function fun(i)
		{
			var r = confirm("Are you sure!");
			if (r == true) {
				window.location ="delete_news.php?id="+i;
			} else {
				window.location ="news_edit.php";
			}
		}
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
<?php require_once('sidebar.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>