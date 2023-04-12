<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us ?</h3>
         <p>Angadi Corporation is a global leader in the design, marketing, and distribution of premium lifestyle products in five categories, including apparel, accessories, home, fragrances, and hospitality. For more than 50 years, Angadi's reputation and distinctive image have been consistently developed across an expanding number of products, brands, and international markets.
Reflecting a distinctive Indian perspective, we have been an innovator in aspirational lifestyle branding and believe that, under the direction of internationally renowned designer , we have had a considerable influence on the way people dress and the way that fashion is advertised and celebrated throughout the world. We combine consumer insights with our design, marketing, and imaging skills to offer, along with our licensing alliances, broad lifestyle product collections with a unified vision.</p>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/1.jpg" alt="">
         <p>The product variety is great , loved the experience .</p>
         <div class="stars">
            <i class="fas fa-star fa-spin fa-3x"></i>
            <i class="fas fa-star fa-spin fa-3x"></i>
            <i class="fas fa-star fa-spin fa-3x"></i>
            <i class="fas fa-star fa-spin fa-3x"></i>
            <i class="fas fa-star-half-alt fa-spin fa-3x"></i>
         </div>
         <h3>Kavi</h3>
      </div>

      <div class="box">
         <img src="images/1.jpg" alt="">
         <p>Fast delivery , good quality but prices are high .</p>
         <div class="stars">
           <i class="fas fa-star fa-spin fa-3x"></i>
            <i class="fas fa-star fa-spin fa-3x"></i>
            <i class="fas fa-star fa-spin fa-3x"></i>
         </div>
         <h3>Naveen</h3>
      </div>





   </div>

</section>





<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>