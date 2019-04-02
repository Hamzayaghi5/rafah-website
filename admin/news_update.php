<!DOCTYPE HTML>
<html>
<?php
include ('../config.php');
include ('check_session.php');
$id=$_GET['id'];
$cmd="select * FROM news where id=".$id;
$info=mysqli_fetch_assoc( mysqli_query($con, $cmd) );
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>News <i class="fa fa-angle-right"></i> Add</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="news_controller.php?status=update&id=<?php echo $info['id'];?>" enctype="multipart/form-data">

			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">English Title</label>
              <input type="text"  name="en_title" value="<?php echo $info['en_title']; ?>" >
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">English description</label>
              <textarea  name="en_desc" ><?php echo $info['en_desc']; ?> </textarea>
            </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Arabic Title</label>
              <input type="text" name="ar_title" value="<?php echo $info['ar_title']; ?>" >
            </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Arabic description</label>
              <textarea name="ar_desc" ><?php echo $info['ar_desc']; ?> </textarea>
            </div>
			
			<div class="vali-form ">
				<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grids-right1">
						<div class="gallery-grid">
							<img style="width:200px;height:200px;" src="../img/news/<?php echo $info['url']; ?>" width="500" height="500" alt="">
						</div>
					</div>
					<div class="bs-component mb20 col-md-4">
						<input type="file" name="img" accept="image/*">
					</DIV>
				</div>

            </div>

			
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>

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