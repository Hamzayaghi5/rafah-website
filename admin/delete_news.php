<?php
$website='http://rafah-ltd.com/admin/news_edit.php';
include '../config.php';
include ('check_session.php');
$ID=$_GET['id'];
$query="delete from news where ID=$ID";
$result=  mysqli_query($con, $query);
if($result)
   {echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;
       
   }
else
    echo 'Error';
?>

