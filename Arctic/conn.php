<?php
//connect to database
$conn = mysqli_connect('localhost','Caleb','caleb1234','a_database');
//check connection 
if(!$conn){
	echo 'Connection error:' . mysqli_connect_error();
	echo 'cant connect to database';
}

?>