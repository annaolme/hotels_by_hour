
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
<h3>Clarion Hotel Helsinki</h3>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<li>1.6 km from center</li>
<li> Tyynenmerenkatu 2, 00220 Helsinki, Finland </li>

</ul>
 <div align="left">    

 <h7>
<p>Clarion Hotel Helsinki is located along the waterfront in the district Jätkäsaari, 601 m from the West Ferry Terminal. Set in two 16-story towers, this modern hotel offers a rooftop swimming pool, sauna and fitness center. Free WiFi is available.</p>
<p>Guests rooms include a flat-screen TV with satellite channels, and some rooms feature views of the city or sea. The private bathrooms come with a hairdryer, free toiletries and bath or shower.</p>
<p>The restaurant Kitchen & Table offers dishes inspired by Manhattan, mixed with Nordic, traditional flavors. Guests can enjoy fresh drinks in the skybar and admire the panoramic views.</p>
<p>Featuring design furniture and a cozy fireplace, Clarion Hotel Helsinki's lobby is a relaxing meeting point for guests.</p>
<p>
Tram number 9 stops right in front of the hotel. Kamppi Shopping Center is 0.7 mi from Clarion Hotel Helsinki, while Helsinki Central Station is 1.4 mi away. The nearest airport is Helsinki-Vantaa Airport, is a 40-minute drive away from the property. 
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
    <img src="images/img-3.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="images/img-3a.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="images/img-3b.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="images/img-3c.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="images/img-3d.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="images/img-3e.jpg" style="width:100%">
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
    <img class="demo cursor" src="images/img-3.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-3a.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-3b.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-3c.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-3d.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-3e.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
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