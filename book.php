<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.png" alt="" style="width:25px;height:25px">HOTELS by the HOUR.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">See hotels</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background-color:#9bcccd">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your stay!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>hotel:</span>
            <input type="text" placeholder="choose the hotel you want to visit" name="location" list="location">
<datalist id="location">
  <option value="Sokos Hotel Tripla">Sokos Hotel Tripla</option>
  <option value="Original Sokos Hotel Presidentti">Original Sokos Hotel Presidentti</option>
  <option value="Clarion Hotel Helsinki">Clarion Hotel Helsinki</option>
  <option value="Hilton Helsinki Stand Hotel">Hilton Helsinki Stand Hotel</option>
  <option value="Solo Sokos Hotel Torni Helsinki">Solo Sokos Hotel Torni Helsinki</option>
  <option value="Radisson Blu Plaza Hotel">Radisson Blu Plaza Hotel</option>
  <option value="VALO Hotel & Work Helsinki">VALO Hotel & Work Helsinki</option>
  <option value="Hilton Helsinki Kalastajatorppa">Hilton Helsinki Kalastajatorppa</option>
  <option value="Forenom Aparthotel Helsinki Kamppi - Contactless Check-In">Forenom Aparthotel Helsinki Kamppi - Contactless Check-In</option>
  <option value="Hotel U14, Autograph Collection">Hotel U14, Autograph Collection</option>
  <option value="Hotel Anna">Hotel Anna</option>
  <option value="Radisson Blu Seaside Hotel, Helsinki">Radisson Blu Seaside Hotel, Helsinki</option>
</datalist>
         </div>
         <div class="inputBox">
            <span>how many (1-10 persons):</span>
            <input type="number" min="1" max="10" placeholder="number of guests" name="guests" list="guests">
            <datalist id="guests">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</datalist>
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
         <div class="inputBox">
            <span>amount of hours:</span>
            <input type="text" placeholder="choose the amount of hours"  name="hours" list="hours">
<datalist id="hours">
  <option value="3 hours">3 hours</option>
  <option value="6 hours">6 hours</option>
  <option value="9 hours">9 hours</option>
  <option value="12 hours">12 hours</option>
</datalist>
       
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>
   
</section>

<!-- booking section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i>See hotels</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

   

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> hotelsbythehour@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Helsinki, Finland</a>
      </div>


   </div>


</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>