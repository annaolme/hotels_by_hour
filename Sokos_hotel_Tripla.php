
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
<h3>Sokos hotel Tripla</h3>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<li>3.1 km from center</li>
<li>Fredikanterassi 1 B, Pasila, 00520 Helsinki, Finland</li>

</ul>
 <div align="left">    

 <h7>
<p>

Featuring a fitness center, bar and views of city, Original Sokos Hotel Tripla Helsinki is located in Helsinki, a 13-minute walk from Hartwall Arena. Among the facilities at this property are a 24-hour front desk and room service, along with free WiFi throughout the property. The hotel has family rooms.
</p>
<p>
The hotel will provide guests with air-conditioned rooms with a desk, an electric tea pot, a safety deposit box, a flat-screen TV and a private bathroom with a bath or shower. At Original Sokos Hotel Tripla Helsinki the rooms are equipped with bed linen and towels.
<p>
Guests at the accommodation can enjoy a buffet breakfast.
</p>
<p>Original Sokos Hotel Tripla Helsinki offers 4-star accommodations with a sauna and terrace.</p>

<p>Telia 5G Areena is a 19-minute walk from the hotel, while Helsinki Olympic Stadium is 1.8 km from the property. The nearest airport is Helsinki-Malmi Airport, 12.1 km from Original Sokos Hotel Tripla Helsinki.
</p>
<p>Couples in particular like the location – they rated it 9.4 for a two-person trip.
<br>Hotel chain/brand: Sokos Hotels  
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
    <img src="images/img-1.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="images/img-1a.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="images/img-1b.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="images/img-1c.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="images/img-1d.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="images/img-1e.jpg" style="width:100%">
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
    <img class="demo cursor" src="images/img-1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-1a.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-1b.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-1c.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-1d.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-1e.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
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