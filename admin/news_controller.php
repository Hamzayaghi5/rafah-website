<?php
$website="http://rafah-ltd.com/admin/news_edit.php";
$website2="http://rafah-ltd.com/admin/add_news.php";
include('../config.php');
include ('check_session.php');
$status=$_GET['status'];
$en_title=$_POST['en_title'];
$en_desc=$_POST['en_desc'];
$ar_title=$_POST['ar_title'];
$ar_desc=$_POST['ar_desc'];
$img=basename($_FILES['img']["name"]);
 $target_file='../img/news/'.$img;
 if($status == "add" ){
 if(move_uploaded_file($_FILES['img']["tmp_name"], $target_file)){
$query="INSERT INTO `news`(`en_title`,`en_desc`, `ar_title`, `ar_desc`, `url`,`date`) VALUES ('$en_title','$en_desc','$ar_title','$ar_desc','$img',date(CURRENT_DATE))";
$result=mysqli_query($con,$query);
            if($result)
            {
                         echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;

            }

            else
            {
                echo 'error';
            }
 }}

  if($status == "update" ){
	  $id=$_GET['id'];
if($_FILES['img']["size"] > 0){
 move_uploaded_file($_FILES['img']["tmp_name"], $target_file);
$query="UPDATE `news` SET  `en_title`='$en_title',`en_desc`='$en_desc',`ar_title`='$ar_title',`ar_desc`='$ar_desc',`url`='$img' where id='$id'";
$result=mysqli_query($con,$query);
            if($result)
            {
                        echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;

            }

            else
            {
                echo 'error';
            }
  }
  
  
  
else{

$query="UPDATE `news` SET  `en_title`='$en_title',`en_desc`='$en_desc',`ar_title`='$ar_title',`ar_desc`='$ar_desc' where id='$id'";
$result=mysqli_query($con,$query);
            if($result)
            {
                           echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;

            }

            else
            {
                echo 'error';
            }
  }}
 
 
 ?>