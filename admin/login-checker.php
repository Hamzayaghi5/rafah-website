<?php
session_start();


        if($_POST['username']=="info@rafah.ltd" && $_POST['password']== "R2211965h")
		{
        $_SESSION['admin_logged']=TRUE;
        $_SESSION['user_name']="Rafah LTD";

        header('Location: ./index.php');
		}
		
		else 
		{
        header('Location: login.php'); 
		}

?>