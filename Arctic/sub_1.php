<?php 
echo("you have successfully booked your hotel");



 ?>
  <html>
 <head>
     <meta charset="UTF-8">
     <title>Booked successfully</title>
     <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,600;0,700;0,900;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 </head>
 <body>
      <div class="header">
        <div class="container">
              <div class="navbar">
            <div class="logo">
                <a href="index.html" class="logo">Arctic Travel Agency</a>
                  </div>
                       <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="hotel.html">Hotels</a></li>
                    <li><a href="car.html">Cars</a></li>
                    <li><a href="flight.html">Flights</a></li>
                    <li><a href="help.html">Help</a></li>
                    <li><a href="account.html">Sign in</a></li>
                    <li><a href="logout.php">Log Out</a></li>

                </ul>
            </nav>
               <a href="hotel.html" class="bttn">Book Now &#9754;;</a> 
               <img src="imgg/menu.png" class="menu " onclick="menutoggle()">      
        </div>
    </div>
  </div>