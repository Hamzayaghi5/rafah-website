<?php
session_start();
$website="http://localhost/rafah_website/admin/login.php";
$localhost='http://rafah-ltd.com/admin/login.php';
if(isset($_SESSION['admin_logged'])){
if($_SESSION['admin_logged']==TRUE){
}
else
{
    
echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;

}}
else{
echo "<script type='text/javascript'>window.top.location='$website';</script>"; exit;


}

?>