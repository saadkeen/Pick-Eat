<?php
include 'connect.php';
include("auth.php");
if(isset($_POST['login'])){
		
	$u_name = $_POST['u_name'];
	$password = $_POST['password'];
	setcookie("u_name", "$u_name", time() + 86400);
 
	if($u_name == ''){
		echo "<script>alert('Enter your user Name') </script>";
	}
	 
	if($password == ''){
	 	echo "<script>alert('Enter your password') </script>";
	}

	else
	{
		$query="SELECT * FROM `registration` where u_name='$u_name' AND password='$password'";
		$run=(mysqli_query($con,$query)) or die(mysqli_error());
			

		if(mysqli_num_rows( $run) > 0){

			session_start();
			$_SESSION['u_name'] = $u_name;
			echo "<script>
						alert('You are Successfully Logged in... Welcome $u_name');
						window.open('/Web Project/php/session.php','_self');
				  </script>";
		}

		else{
			echo "<script>
						alert('Invalid Username/Password');
						window.open('/Web Project/Index/login.html','_self');
				  </script>";
		}
	}

	if(!mysqli_query($con,$query))
	{
		echo("Error description:".mysqli_error($con));
	}	
}
?>
