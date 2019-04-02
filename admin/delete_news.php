<?php
include '../config.php';
include ('check_session.php');
$ID=$_GET['id'];
$query="delete from news where ID=$ID";
$result=  mysqli_query($con, $query);
if($result)
    header("location: news_edit.php");
else
    echo 'Error';
?>

