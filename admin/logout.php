<?php
session_start();
$_SESSION['admin_logged']=false;
header('location: login.php');
?>

