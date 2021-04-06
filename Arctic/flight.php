<?php 
include('conn.php');
if (isset($_POST['bttn'])){
    $depart_from= $_POST['depart'];
    $going_to=$_POST['desti'];
    $seats=$_POST['seats'];  
    $class=$_POST['class'];  



$sql="INSERT INTO flight_user(depart_from, going_to, seats, class) VALUES ('$depart_from','$going_to','$seats','$class')";
    //save to the database and check

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: flight.php');
        //echo ("hello ,you have submitted the form successfully <br>");
    }
    else{
        //error
        echo 'query error'. mysqli_error($conn);
        echo ('<br>');
    }



}
include('flight_det.php');

 ?>