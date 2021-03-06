<?php 

 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale-1.0">
        <title>Arctic Travel Agency</title>
        <link rel="database" href="conn.php">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;0,600;0,700;0,900;1,500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    </head>
    <body>
        <div class="header">
        <div class="container">
              <div class="navbar">
            <div class="logo">
                <a href="index.html" class="bttn">Arctic Travel Agency</a>
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
               <img src="imgg/menu.png" class="menu " onclick="menutoggle()">      
        </div>
    </div>
</div>
<div class="payment">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<div class="form-container">
					  <form action="sub_1.php" method="POST">
					  	<h5>Please choose your payment method below</h5>
                    <label>Pay-Via</label>
                    <br>
                      <select name="select" required>
                      <option><a href="">Mpesa</a></option>
                      <option><a href="">MasterCard</a></option>  
                      <option><a href="">Paypal</a></option>
                     </select>
                      <button type="submit" name="bttn" class="bttn">Submit</button>
                    </form>
				</div>
			</div>
			<div class="col-2">
				<img src="imgg/mpesa.jpg" width="100px">
        <img src="imgg/master.png" width="100px">
        <img src="imgg/pay.jpg" width="100px">
			</div>
		</div>

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
                      <li><a href="youtube.com">You Tube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020- Created By Caleb Munene <br> All Rights Reserved @arctic.com </p>
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
