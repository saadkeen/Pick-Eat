<?php  
include 'connect.php';

session_start();

if(!isset($_SESSION["u_name"])){
	echo "Please Login to Continue";
	echo "<script>window.open('/Web Project/Index/login.html','_self')</script>";
}

else{
	echo "<script>window.open('/Web Project/Login/index.html','_self')</script>";
}
?>