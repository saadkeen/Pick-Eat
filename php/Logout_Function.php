<?php  
include 'connect.php';
include 'Login_Function.php';

session_start();
unset($_SESSION["u_name"]);
session_destroy();

echo "<script>
			alert('You have been Logged out');
			window.open('../Index/index.html', '_self');
	  </script>";
?>