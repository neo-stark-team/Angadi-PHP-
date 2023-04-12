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
   <title>shop</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
</div>

<section class="products">

   <h1 class="title"><span>
      <?php  
         $cid=$_GET['cid'];   

switch ($cid) {
   case '1':
     echo "Electronics";
      break;
       case '2':
     echo "Men's Fashion";
      break;
       case '3':
     echo "Women's Fashion";
      break;
       case '4':
     echo "Home Applications";
      break;
       case '5':
     echo "Books";
      break;
       case '6':
     echo "Tools";
      break;
       case '7':
     echo "Grocery";
      break;
       case '8':
     echo "Kid's Fashion & Toys";
      break;
       case '9':
     echo "Art & Stationery";
      break;
   

   default:
      break;
}




      ?></span></h1>

   <div class="box-container">

      <?php  
         $cid=$_GET['cid'];
         $select_products = mysqli_query($conn, "SELECT * FROM `categories` WHERE `id`= '$cid'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      
       <a href="shop.php?cn=<?php echo $fetch_products['cname'];?>&n=<?php echo $fetch_products['name'];?>"><img class="image" src="images/Categories/<?php echo $fetch_products['url']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['url']; ?>"> <span class="btn"> View Products</span></a>
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>

</section>








<?php include 'footer.php'; ?>


<script src="js/script.js"></script>

</body>
</html>