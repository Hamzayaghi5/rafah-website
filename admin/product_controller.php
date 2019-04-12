<?php
$website='http://rafah-ltd.com/admin/add_product.php';
$website2='http://rafah-ltd.com/admin/product_edit.php';
include('../config.php');

$status=$_GET['status'];
$en_title=$_POST['en_title'];
$ar_title=$_POST['ar_title'];
$en_desc=$_POST['en_desc'];
$ar_desc=$_POST['ar_desc'];
$url=$_POST['url'];
$type=$_POST['type'];
$s=explode(" ",$type);


 $query="select max(id) as i from service";
$max=mysqli_fetch_assoc( mysqli_query($con,$query));
$max['i']=$max['i']+1;
 if($status == "add" ){
	 
	 $img=basename($_FILES['img']["name"]);
$target_file='../img/service/'.$s[0].'/'.$img;
 
$img1=basename($_FILES['img1']["name"]);
$target_file1='../img/service/'.$s[0].'/'.$img1;

$img2=basename($_FILES['img2']["name"]);
$target_file2='../img/service/'.$s[0].'/'.$img2;

$img3=basename($_FILES['img3']["name"]);
$target_file3='../img/service/'.$s[0].'/'.$img3;

$img4=basename($_FILES['img4']["name"]);
$target_file4='../img/service/'.$s[0].'/'.$img4;

$img5=basename($_FILES['img5']["name"]);
$target_file5='../img/service/'.$s[0].'/'.$img5;


$query="INSERT INTO `service`(`id`,`en_title`, `ar_title`, `en_desc`,`ar_desc`,`type`,`redirect`) VALUES ($max[i], '$en_title','$ar_title','$en_desc','$ar_desc','$type','$url')";
$result=mysqli_query($con,$query);

if($_FILES['img']["size"] > 0){
	move_uploaded_file($_FILES['img']["tmp_name"], $target_file);
$query="INSERT INTO `service_img` (`url`,`sid`) VALUES ('$img','$max[i]')";
$result=mysqli_query($con,$query);}

if($_FILES['img1']["size"] > 0){
	 move_uploaded_file($_FILES['img1']["tmp_name"], $target_file1);
$query="INSERT INTO `service_img` (`url`,`sid`) VALUES ('$img1','$max[i]')";
$result=mysqli_query($con,$query);
}

if($_FILES['img2']["size"] > 0){
	 move_uploaded_file($_FILES['img2']["tmp_name"], $target_file2);
$query="INSERT INTO `service_img` (`url`,`sid`) VALUES ('$img2','$max[i]')";
$result=mysqli_query($con,$query);
}

if($_FILES['img3']["size"] > 0){
	move_uploaded_file($_FILES['img3']["tmp_name"], $target_file3);
$query="INSERT INTO `service_img` (`url`,`sid`) VALUES ('$img3','$max[i]')";
$result=mysqli_query($con,$query);
}

if($_FILES['img4']["size"] > 0){
	 move_uploaded_file($_FILES['img4']["tmp_name"], $target_file4);
$query="INSERT INTO `service_img` (`url`,`sid`) VALUES ('$img4','$max[i]')";
$result=mysqli_query($con,$query);
}

if($_FILES['img5']["size"] > 0){
	 move_uploaded_file($_FILES['img5']["tmp_name"], $target_file5);
$query="INSERT INTO `service_img` (`url`,`sid`) VALUES ('$img5','$max[i]')";
$result=mysqli_query($con,$query);
}


            if($result)
            {
                       echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;

            }

            else
            {
                echo 'error';
            }
 }
 
 
 if($status == "update" ){
	 $id=$_GET['id'];
	 $query="UPDATE `service` SET  `en_title`='$en_title',`en_desc`='$en_desc',`ar_title`='$ar_title',`ar_desc`='$ar_desc',`type`='$type',`redirect`='$url' where id='$id'";
$result=mysqli_query($con,$query); 
	 
	  if($result)
            {
			   echo "<script type='text/javascript'>window.top.location='$website2';</script>"; exit;

            }

            else
            {
                echo 'error';
            }
	 } 
 
 
  if($status== "img") {
		$id=$_GET['id'];
 
 $cmd="select sid,type from service_img as i,service where sid=service.id and i.id=".$id;
 $sid=mysqli_fetch_assoc(mysqli_query($con,$cmd));
 $s=explode(" ",$sid['type']);
 
 $img=basename($_FILES['img']["name"]);
$target_file='../img/service/'.$s[0].'/'.$img;
 
move_uploaded_file($_FILES['img']["tmp_name"], $target_file);
$query="UPDATE `service_img` SET  `url`='$img' where id='$id'";
$result=mysqli_query($con,$query); 
	 
	  if($result)
            {
				header("Location: product_update.php?id=".$sid['sid']);

            }

            else
            {
                echo 'error';
            }
	 } 
		
 
 
?>