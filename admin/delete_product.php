<?php
include '../config.php';
include ('check_session.php');
$ID=$_GET['id'];
$query="delete from service where ID=$ID";
$result=  mysqli_query($con, $query);
if($result)
    header("location: product_edit.php");
else
    echo 'Error';
?>

