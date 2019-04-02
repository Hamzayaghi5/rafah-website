<!DOCTYPE HTML>
<html>
<?php
include('../config.php');
include ('check_session.php');
$query="SELECT DISTINCT type from service";
$type=mysqli_query($con,$query);
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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Products <i class="fa fa-angle-right"></i> Add</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="product_controller.php?status=add" enctype="multipart/form-data">
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">English Title*</label>
              <input type="text" placeholder="title" name="en_title" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Arabic Title*</label>
              <input type="text" placeholder="title" name="ar_title" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="vali-form">
            <div class="col-md-12 form-group1">
              <label class="control-label">English Description*</label>
              <textarea  placeholder="Description..." name="en_desc"></textarea>
            </div>
            <div class="col-md-12 form-group1 form-last">
              <label class="control-label">Arabic Description*</label>
              <textarea  placeholder="Description..." name="ar_desc"></textarea>
            </div>
            <div class="clearfix"> </div>
            </div>
				

			<div class="vali-form">
				<div class="col-md-6 form-group1">
				  <label class="control-label">Type*</label>
				<select name="type" class="form-control1">
					<?php
						foreach ($type as $t)
						echo '<option>'.$t['type'].'</option>';
					?>
				</select>
				</div>
				<div class="col-md-6 form-group1 form-last">
				  <label class="control-label">url*</label>
				  <input type="text" placeholder="url" name="url" required="">
				</div>
				<div class="clearfix"> </div>
            </div>

			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
				<label for="exampleInputFile">Image input</label>
				<input type="file" name="img" accept="image/*">
			</div>
            <div class="col-md-6 form-group1 form-last">
				<label for="exampleInputFile">Image input</label>
				<input type="file" name="img1" accept="image/*">
			</div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
				<label for="exampleInputFile">Image input</label>
				<input type="file" name="img2" accept="image/*">
			</div>
            <div class="col-md-6 form-group1 form-last">
				<label for="exampleInputFile">Image input</label>
				<input type="file" name="img3" accept="image/*">
			</div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
				<label for="exampleInputFile">Image input</label>
				<input type="file" name="img4" accept="image/*">
			</div>
            <div class="col-md-6 form-group1 form-last">
				<label for="exampleInputFile">Image input</label>
				<input type="file" name="img5" accept="image/*">
			</div>
            <div class="clearfix"> </div>
            </div>

            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->

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