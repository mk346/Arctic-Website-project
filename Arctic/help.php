<?php 
//include('conn.php'); 
$name =  $_POST['name'];
$u_email = $_POST['email'];
$problem = $_POST['problem'];

$email_from = "calebkinyuamunene@gmail.com";
$email_subject = "New form Submission";
$email_body = "User Name: $name .\n". "User Email: $u_email.\n"."User Problem: $problem.\n";
$to = "1036556@cuea.edu";
$headers = "From: $email_from \r\n";
$headers .="Reply-To $u_email \r\n";
 mail($to,$email_subject,$email_body,$headers );
 header("location: help.html"); 

 ?>