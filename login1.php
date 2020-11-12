<?php
	include("Dbconnection.php");
     $msg = '';
	 session_start();
           
     if (isset($_POST['login'])) 
	 {
	    if ($_POST['username'] == 'admin123' && $_POST['password'] == 'admin') 
		{
           header("Location:admin_home.php");
		}
		else 
		{
           $msg = 'Wrong username or password';
		   header("Location:login.php");
	   }
   }
?>