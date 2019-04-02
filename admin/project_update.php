<!DOCTYPE HTML>
<html>
<?php
include ('../config.php');
include ('check_session.php');
$id=$_GET['id'];
$cmd="select * FROM project where id=".$id;
$info=mysqli_fetch_assoc( mysqli_query($con, $cmd) );

$cmd="select pi.id as d ,url from project as p,project_img as pi where p.id=pid and p.id=".$id;
$img=mysqli_query($con, $cmd);
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Projects <i class="fa fa-angle-right"></i> Update</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		<div class="validation-form">
 		
 	<!---->
  	    
        <form method="post" action="project_controller.php?status=update&id=<?php echo $info['id'];?>" enctype="multipart/form-data">
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">English Title</label>
              <input type="text" placeholder="title" name="en_title" value="<?php echo $info['en_title'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Arabic Title</label>
              <input type="text" placeholder="title" name="ar_title"  value="<?php echo $info['ar_title'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">English System</label>
              <input type="text" placeholder="system" name="en_sys" value="<?php echo $info['en_sys'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Arabic System</label>
              <input type="text" placeholder="system" name="ar_sys" value="<?php echo $info['ar_sys'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">English Place</label>
              <input type="text" placeholder="Place" name="en_plc" value="<?php echo $info['en_place'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Arabic Place</label>
              <input type="text" placeholder="Place" name="ar_plc" value="<?php echo $info['ar_place'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>
		
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Area</label>
              <input type="text" placeholder="area" name="area"  value="<?php echo $info['area'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Capacity</label>
              <input type="text" placeholder="capacity" name="capacity" value="<?php echo $info['capacity'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>

			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Sanitary</label>
              <input type="text" placeholder="sanity" name="sanity" value="<?php echo $info['sanitry'];?>">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Water tratment</label>
              <input type="text" placeholder="watertratment" name="wt" value="<?php echo $info['wt'];?>">
            </div>
            <div class="clearfix"> </div>
            </div>

            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
          <div class="clearfix"> </div>
        </form>

		
		<?php
			foreach ($img as $i)
			echo
		'<form  class="col-md-6" method="post" action="project_controller.php?status=img&id='.$i['d'].'" enctype="multipart/form-data">
			<div class="vali-form ">
				<div class="col-md-6 gallery-grids-left">
					<div class="gallery-grids-right1">
						<div class="gallery-grid">
							<img style="width:200px;height:200px;" src="../img/pics/'.$i['url'].'" width="500" height="500" alt="">
						</div>
					</div>
					<div class="bs-component mb20 col-md-4">
						<input type="file" name="img" accept="image/*" required="required">
					</DIV>
				</div>

            </div>

            <div class="col-md-12 form-group">
              <button  type="submit" class="btn btn-primary">Edit</button>
            </div>
          <div class="clearfix"> </div>
        </form>';
		?>
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

</div>
</div>
<!--copy rights start here-->
	
<!--COPY rights end here-->
				<?php require_once('sidebar.php');?>
						  <div class="clearfix"></div>		
							</div>
							
	<div class="copyrights">
	 <p>© 2016 Pooled . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
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