<?php
session_start();
if(isset($_SESSION['admin_logged'])){
if($_SESSION['admin_logged']==TRUE){
}
else
{
    
echo "<script type='text/javascript'>window.top.location='http://rafah-ltd.com/admin/login,php';</script>"; exit;

}}
else{
echo "<script type='text/javascript'>window.top.location='http://rafah-ltd.com/admin/login.php';</script>"; exit;


}

?>