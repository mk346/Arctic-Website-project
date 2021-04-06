<?php 
include('conn.php');
if (isset($_POST['bttn'])){
    $hotel_name= $_POST['hotel'];
    $location=$_POST['location'];
    $price=$_POST['price'];   



$sql="INSERT INTO hotel_admin(hotel_name, location, price) VALUES ('$hotel_name','$location','$price')";
    //save to the database and check

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: hotel_b.php');
    //echo ("hello ,you have submitted the form successfully <br>");
    }
    else{
        //error
        echo 'query error'. mysqli_error($conn);
        echo ('<br>');
    }
    //if($_POST['hotel']==$hotel['hotel_name']){

    //}
}


 ?>