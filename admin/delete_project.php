<?php
include '../config.php';
include ('check_session.php');
$ID=$_GET['id'];
$query="delete from project where ID=$ID";
$result=  mysqli_query($con, $query);
if($result)
    header("location: project_edit.php");
else
    echo 'Error';
?>

