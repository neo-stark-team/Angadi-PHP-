<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h2 id="we" >We sell what you</h2><h3>buyin.</h3>
      

      <a href="home.php#products" class="white-btn">Shop</a>
   </div>



</section>

<section class="products" id="products">

   <h1 class="title"><span>Categories</span></h1>

   <div class="box-container">
     <div class="box">
    
       <a href="categories.php?cid=1">  <img class="image" src="images\Categories\headphone.jpg" no-repeat><span class="btn">Electonics</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=2" ><img class="image" src="images\Categories\tshirts.jpg" no-repeat><span class="btn"> Men's Fashion</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=3"><img class="image" src="images\Categories\western.jpg" no-repeat> <span class="btn">Women's Fashion</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=4"><img class="image" src="images\Categories\kware.jpg" no-repeat><span class="btn">Home Apps</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=5"><img class="image" src="images\Categories\scifi.jpg" no-repeat><span class="btn">Books</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=7"><img class="image" src="images\Categories\bread.jpg" no-repeat><span class="btn">Grocery</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=8"><img class="image" src="images\Categories\boys.jpg" no-repeat> <span class="btn">Kid's Fashion & Toys</span></a>
     </div>
     <div class="box">
       <a href="categories.php?cid=9"><img class="image" src="images\Categories\artsup.jpg" no-repeat><span class="btn">Art & Stationery</span></a>
     </div>
   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>have any questions?</h3>
      <p>Feel free to contact us , our response team will get back at you within a few minutes . </p>
      <a href="contact.php" class="delete-btn">contact us</a>
   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>