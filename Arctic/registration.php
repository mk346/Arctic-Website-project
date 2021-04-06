<?php 
session_start(); 
include('db_u.php');
header('location:account.html'); 
mysqli_select_db($con,'user_reg');
$name = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * from user_tb where name = '$name'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num ==1){
	echo "Username Already Taken";
} 
else{
	$reg= "insert into user_tb(name,email, password) values('$name','$email','$password') ";
	mysqli_query($con, $reg);
	echo "Registration successful"; 
}


 ?>