<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $hours = $_POST['hours'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving, hours) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving','$hours') ";
      mysqli_query($connection, $request);

      header('location:message.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

   
?>