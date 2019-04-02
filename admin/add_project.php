<!DOCTYPE HTML>
<html>
<?php include ('check_session.php');?>
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
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Projects <i class="fa fa-angle-right"></i> Add</li>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="project_controller.php?status=add" enctype="multipart/form-data">
			
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
            <div class="col-md-6 form-group1">
              <label class="control-label">English System*</label>
              <input type="text" placeholder="system" name="en_sys" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Arabic System*</label>
              <input type="text" placeholder="system" name="ar_sys" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
			
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">English Place*</label>
              <input type="text" placeholder="Place" name="en_plc" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Arabic Place*</label>
              <input type="text" placeholder="Place" name="ar_plc" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
		
			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Area*</label>
              <input type="text" placeholder="area" name="area" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Capacity*</label>
              <input type="text" placeholder="capacity" name="capacity" required="">
            </div>
            <div class="clearfix"> </div>
            </div>

			<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Sanitary</label>
              <input type="text" placeholder="sanity" name="sanity">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Water tratment</label>
              <input type="text" placeholder="watertratment" name="wt">
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

<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>