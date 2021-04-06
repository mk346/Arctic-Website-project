<?php 
include('conn.php');
if (isset($_POST['bttn'])){
    $flight_name= $_POST['flight'];
    $destination=$_POST['destination'];
    $depart_date=$_POST['dep_date'];  
    $depart_time=$_POST['dep_time'];  
    $Cost=$_POST['cost']; 
    



$sql="INSERT INTO flight_admin(flight_name, destination, depart_date,depart_time, Cost) VALUES ('$flight_name','$destination','$depart_date','$depart_time','$Cost')";
    //save to the database and check

    if(mysqli_query($conn, $sql)){
        //success
        header('Location: flight_b.php');
        //echo ("hello ,you have submitted the form successfully <br>");
    }
    else{
        //error
        echo 'query error'. mysqli_error($conn);
        echo ('<br>');
    }



}








 ?>