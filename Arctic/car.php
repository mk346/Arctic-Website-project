<?php 
include('conn.php');
if (isset($_POST['bttn'])){
    $address= $_POST['address'];
    $pick_date=$_POST['p_date'];
    $pick_time=$_POST['p_time'];  
    $drop_date=$_POST['d_date']; 
    $drop_time=$_POST['d_time'];  



$sql="INSERT INTO car_user(address, pick_date, pick_time, drop_date,drop_time) VALUES ('$address','$pick_date','$pick_time','$drop_date','$drop_time')";
    //save to the database and check

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: car.php');
        //echo ("hello ,you have submitted the form successfully <br>");
    }
    else{
        //error
        echo 'query error'. mysqli_error($conn);
        echo ('<br>');
    }



}

 include('car_det.php');
 ?>
