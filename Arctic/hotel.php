<?php 
include('conn.php');
if (isset($_POST['bttn'])){
    $city = $_POST['city'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $room = $_POST['room'];


//create sql code to insert data from the web into the database
$sql="INSERT INTO hotel_user(city, check_in, check_out, room) VALUES ('$city','$check_in','$check_out','$room')";
    //save to the database and check

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: hotel.php');
        //echo ("hello ,you have submitted the form successfully <br>");
    }
    else{
        //error
        echo 'query error'. mysqli_error($conn);
        echo ('<br>');
    }



}

 include('h_details.php');
 ?>

 