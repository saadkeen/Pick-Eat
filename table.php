<?php  
include 'connect.php';

$sql1 = "SELECT * FROM main";
$sql2 = "SELECT * FROM desserts";
$sql3 = "SELECT * FROM drinks";
$sql4 = "SELECT * FROM entree";

$records1 = mysqli_query($con, $sql1);
$records2 = mysqli_query($con, $sql2);
$records3 = mysqli_query($con, $sql3);
$records4 = mysqli_query($con, $sql4);

?>