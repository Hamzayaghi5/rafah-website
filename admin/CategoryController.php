<?php 
include('../config.php');
include ('check_session.php');
$status=$_GET['status'];
$name=$_POST['name'];
$type=$_POST['type'];
$parent=$_POST['parent'];
if ($status=='add') {

	$add_category=mysqli_query($con,"INSERT INTO `category`(`name`, `type`, `parent`) VALUES ('$name','$type',$parent)");

	  if($add_category)
            {
				header("Location: add_category.php");

            }

            else
            {
                echo 'error';
            }

}
 ?>