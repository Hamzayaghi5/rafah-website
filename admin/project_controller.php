<?php
include('../config.php');
include ('check_session.php');
$status=$_GET['status'];


 $query="select max(id) as i from project";
$max=mysqli_fetch_assoc( mysqli_query($con,$query));
$max['i']=$max['i']+1;
 if($status == "add" ){
	 
	 $en_title=$_POST['en_title'];
$ar_title=$_POST['ar_title'];
$en_sys=$_POST['en_sys'];
$ar_sys=$_POST['ar_sys'];
$en_plc=$_POST['en_plc'];
$ar_plc=$_POST['ar_plc'];
$area=$_POST['area'];
$capacity=$_POST['capacity'];
$sanity=$_POST['sanity'];
$wt=$_POST['wt'];
	 
	 $img=basename($_FILES['img']["name"]);
$target_file='../img/pics/'.$img;
 
$img1=basename($_FILES['img1']["name"]);
$target_file1='../img/pics/'.$img1;
 if(move_uploaded_file($_FILES['img']["tmp_name"], $target_file) || move_uploaded_file($_FILES['img1']["tmp_name"], $target_file1)){

$query="INSERT INTO `project`(`id`,`en_title`, `ar_title`, `en_sys`,`ar_sys`,`en_place`,`ar_place`, `area`,`capacity`,`sanitry`,`wt`) VALUES ($max[i], '$en_title','$ar_title','$en_sys','$ar_sys','$en_plc','$ar_plc','$area','$capacity','$sanity','$wt')";
$result=mysqli_query($con,$query);

if(!empty($_FILES['img']["name"])){
$query="INSERT INTO `project_img` (`url`,`pid`) VALUES ('$img','$max[i]')";
$result=mysqli_query($con,$query);}

if(!empty($_FILES['img1']["name"])){
$query="INSERT INTO `project_img` (`url`,`pid`) VALUES ('$img1','$max[i]')";
$result=mysqli_query($con,$query);
}

            if($result)
            {
                        header("Location: add_project.php");

            }

            else
            {
                echo 'error';
            }
 }
 }
 
  if($status == "update" ){
	$id=$_GET['id'];
	$en_title=$_POST['en_title'];
$ar_title=$_POST['ar_title'];
$en_sys=$_POST['en_sys'];
$ar_sys=$_POST['ar_sys'];
$en_plc=$_POST['en_plc'];
$ar_plc=$_POST['ar_plc'];
$area=$_POST['area'];
$capacity=$_POST['capacity'];
$sanity=$_POST['sanity'];
$wt=$_POST['wt'];
	
	 $query="UPDATE `project` SET  `en_title`='$en_title',`ar_title`='$ar_title',`en_sys`='$en_sys',`ar_sys`='$ar_sys',`en_place`='$en_plc',`ar_place`='$ar_plc',`area`='$area',`capacity`='$capacity',`sanitry`='$sanity',`wt`='$wt' where id='$id'";
	$result=mysqli_query($con,$query); 
	 
	  if($result)
            {
				header("Location: project_edit.php");

            }

            else
            {
                echo 'error';
            }
	 } 
 

 if($status== "img") {
		$id=$_GET['id'];

$img=basename($_FILES['img']["name"]);
$target_file='../img/pics/'.$img;
 
 $cmd="select pid from project_img where id=".$id;
 $pid=mysqli_fetch_assoc(mysqli_query($con,$cmd));
 
if(move_uploaded_file($_FILES['img']["tmp_name"], $target_file) ){
$query="UPDATE `project_img` SET  `url`='$img' where id='$id'";
$result=mysqli_query($con,$query); 
	 
	  if($result)
            {
				header("Location: project_update.php?id=".$pid['pid']);

            }

            else
            {
                echo 'error';
            }
	 } 
		
 }

 
?>