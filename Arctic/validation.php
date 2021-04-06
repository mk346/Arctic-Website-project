<?php 
session_start(); 
include('db_u.php');
//header('location:account.html'); 
mysqli_select_db($con,'user_reg');
$name = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * from user_tb where name = '$name' && password = '$password'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);
if($num ==1){
	$_SESSION['username']= $name;
	header('location:index.html');
	//include('index.php');
} 
else{
 header('location:account.html');
}


 ?>