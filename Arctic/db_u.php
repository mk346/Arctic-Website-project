<?php
//connect to database
$con = mysqli_connect('localhost','Caleb','caleb1234');
//check connection 
if(!$con){
	echo 'Connection error:' . mysqli_connect_error();
	//echo 'cant connect to database';
}

?>