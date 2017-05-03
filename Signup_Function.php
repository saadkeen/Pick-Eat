<?php
include 'connect.php';

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$u_name=$_POST['u_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	if($name==''){
	 	echo "<script>alert('Enter your Name') </script>";
	}

	if($u_name==''){
	 	echo "<script>alert('Enter your user Name') </script>";
	}

	if($email==''){
	 	echo "<script>alert('Enter your email') </script>";
	}

	if($password==''){
	 	echo "<script>alert('Enter your password') </script>";
	}

	if (!($name=='' and $u_name=='' and $email=='' and $password=='')){
		$query="insert into registration(name,email,u_name,password) values ('$name', '$email', '$u_name', '$password')";

	 	if(mysqli_query($con,$query)){

			echo "<script>
						alert('You are Successfully Registered');
						window.open('/Web Project/Index/index.html','_self');
				  </script>";

		}
	}
}
?>