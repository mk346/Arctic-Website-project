<?php 
include('conn.php');


//write a query for all cars in the database
$sql= 'SELECT car_id,car_nym,description,h_price FROM car_admin ORDER BY car_id';
//make query and get results
$result = mysqli_query($conn, $sql);
//fetch the resulting rows as an array
$car_fetch = mysqli_fetch_all($result, MYSQLI_ASSOC);
//free result from memory
mysqli_free_result($result);
////close connection
mysqli_close($conn);






 ?>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>Your Hotel</title>
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
    <div class="details">
      <div class="row">
        <?php foreach($car_fetch as $cars): ?>
          <div class="col s6 md3">
            <div class="card z-depth-0">
              <div class="card-content center">      
        <h4>Car Name:</h4>
        <p> <?php echo($cars['car_nym']); ?></p>
        <br>
        <h4>Description:</h4>
        <br>
        <p><?php echo($cars['description']); ?></p>
        <h4>Price per Day:</h4>
        <br>
        <p> <?php echo($cars['h_price']);?></p>
        <form action="car_book.php" method="POST">
            <button type="submit" name="bttn" class="bttn">Hire Now & Proceed To Payment</button>
        </form>
      </div>
      </div>
      </div>
       <?php endforeach; ?>
          </div>
    </div>
<div class="footer">
        <div class="container">
            <div class="row">
              <div class="footer-col-1">
                  <h5><a href="appstore.com">Download Our App for Android & IOS</a></h5>
                  <div class="app-logo">
                    <a href="playstore.com"><img src="imgg/google2.png"></a>
                     <a href="appstore.com"> <img src="imgg/app2.png"></a>
                  </div>
                </div>
                <div class="footer-col-2">
                 <a href="playstore.com" class="bttn">ARC &#9754;;</a> 
                 <p>Our Goal Is To Ensure Each of We serve Our Customers To Their Satisfaction</p>
                </div>
                <div class="footer-col-3 ">
                  <h3>Useful Links</h3>
                  <ul>
                     <li><a href="hotel.html">Book A Hotel Room</a></li>
                      <li><a href="car.html">Hire A Car</a></li>
                      <li><a href="flight.html">Book Flight</a></li>
                      <li><a href="account.html">Sign-Up</a></li>
                   </ul>
                </div>
                <div class="footer-col-4 ">
                  <h3>Follow Us</h3>
                  <ul>
                      <li><a href="facebook.com">Facebook</a></li>
                      <li><a href="twitter.com">Twitter</a></li>
                      <li><a href="instagram.com">Instagram</a></li>
                      <li><a href="youtube.com">You Tube</a></li>
              </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020- Created By Caleb Munene <br> All Rights Reserved @arctic.com  </p>
            </div>
        </div>
        <script>
          var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            function menutoggle(){
                if( MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "200px";
                }
                else{
                     MenuItems.style.maxHeight = "0px";
                }
            }
        </script>
 </body>
 </html>