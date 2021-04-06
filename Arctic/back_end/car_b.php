<?php 
include('conn.php');
if (isset($_POST['bttn'])){
    $car_nym= $_POST['car'];
    $description=$_POST['des'];
    $car_model=$_POST['model'];  
    $h_price=$_POST['price']; 
    



$sql="INSERT INTO car_admin(car_nym, description, car_model, h_price) VALUES ('$car_nym','$description','$car_model','$h_price')";
    //save to the database and check

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: car_b.php');
        //echo ("hello ,you have submitted the form successfully <br>");
    }
    else{
        //error
        echo 'query error'. mysqli_error($conn);
        echo ('<br>');
    }



}








 ?>