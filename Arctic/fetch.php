<?php 
include('conn.php');
//include('hotel.php');
$sql= 'SELECT id,city FROM hotel_user ORDER BY id';
//make query and get results
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array
$r_hotel= mysqli_fetch_all($result, MYSQLI_ASSOC);


//free result from memory
mysqli_free_result($result);
//close connection
mysqli_close($conn);
foreach($r_hotel as $search){
	//echo($search['city']);
}



 ?>