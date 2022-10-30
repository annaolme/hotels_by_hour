
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
<h3>Radisson Blue Plaza Hotel</h3>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<li>300 m from center</li>
<li> Mikonkatu 23, Kluuvi, 00100 Helsinki, Finland </li>

</ul>
 <div align="left">    

 <h7>
<p>Featuring the Bistro Vilho, this historical hotel from 1917 is next to Kaisaniemi Park, 150 m from Helsinki Central Station. Free fitness centre access and modern air-conditioned rooms with free WiFi are offered.</p>
<p>Each room at Radisson Blu Plaza Hotel Helsinki is decorated in style with Finnish design items. Rooms are equipped with a flat-screen TV, tea/coffee maker and premium bedding. Some rooms offer city views.</p>
<p>Plaza Restaurant also serves drinks, while snacks and light dishes are offered at the 24-hour lobby bar. Room service is also available all day long.</p>
<p>The Grand Casino Helsinki and the Finnish National Theatre are both within a 5-minute walk of the eco-friendly Radisson Blu Plaza Helsinki. The Aleksanterinkatu shopping street is 400 m away.</p>
<p>
Complimentary access to Business Lounge -your living and working space in Plaza is included for guests staying in the Business Rooms, Executive Business Rooms with Sauna, Junior Suites and Executive Suites. 
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
    <img src="images/img-6.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 6</div>
    <img src="images/img-6a.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 6</div>
    <img src="images/img-6b.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">4 / 6</div>
    <img src="images/img-6c.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">5 / 6</div>
    <img src="images/img-6d.jpg" style="width:100%">
</div>

<div class="mySlides">
  <div class="numbertext">6 / 6</div>
    <img src="images/img-6e.jpg" style="width:100%">
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
    <img class="demo cursor" src="images/img-6.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-6a.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-6b.jpg" style="width:100%" onclick="currentSlide(3)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-6c.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-6d.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
  </div>
  <div class="column">
    <img class="demo cursor" src="images/img-6e.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
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