
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

  
  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">

<!-- stars rating cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.png" alt="" style="width:25px;height:25px">HOTELS by the HOUR.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">See hotels</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background-color:#9bcccd">
   <h1>hotel discription</h1>
</div>

<!-- about section starts  -->

<section class="about">
<div class="content">
<h3>Solo Sokos hotel Torni Helsinki </h3>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<li>350 m from center</li>
<li>Yrjönkatu 26, Kamppi, 00100 Helsinki, Finland </li>

</ul>
 <div align="left">    

 <h7>
<p>
This grand 1920s hotel is within 5 minutes’ walk of Helsinki Central Station and the Esplanadi shopping streets. It offers free WiFi, a popular breakfast buffet and a rooftop bar with panoramic city views.
</p>
<p>
Solo Sokos Hotel Torni Helsinki’s modern, soundproofed guest rooms are decorated in 2 different styles: Art Nouveau and Art Déco. All have an LCD TV with cable channels and a private bathroom with shower or bathtub. Some include a seating area.
<p>
OR Restaurant & Bar is casual brasserie that serves a seasonal menu of traditional Finnish dishes inspired by modern, international flavours. During summer, the hotel’s Irish pub hosts live music and entertainment on its terrace. The elegant 14th-floor Ateljee Bar offers regular exhibitions of works by young Finnish artists. 
</p>
<p>This is our guests' favourite part of Helsinki, according to independent reviews.  
</p>
</div>

   </div>
</h7>
<img src="images/111.jpg" style="width:100%">

 <!-- Container for the image gallery -->
 <div class="container" style="width:800px; height:600px">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 6</div>
    <img src="images/img-5.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="images/img-5a.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="images/img-5b.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="images/img-5c.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="images/img-5d.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="images/img-5e.jpg" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row">
  <div class="column">
    <img class="demo cursor" src="images/img-5.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-5a.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-5b.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-5c.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-5d.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-5e.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
  </div>
</div>


  
</section>

<!-- about section ends -->
<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

     

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> hotelsbythehour@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Helsinki, Finland </a>
      </div>

      

   </div>

</section>

<!-- footer section ends -->


<script src="js/galleria.js"></script>










</body>
</html>