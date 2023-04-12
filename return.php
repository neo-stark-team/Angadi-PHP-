<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['yes'])){
   $id =$_GET['on']; 
   $val= $_GET['a'];
   $stat='';
   if($val == 'c'){$stat ='Cancellation'; }
   else{ $stat ='Return';} 
      mysqli_query($conn, "update `orders` set payment_status ='$stat' where id='$id' ") or die('query failed');
      $message[] = 'Product '.$stat.' successful';


};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>review page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<section class="review">

   <div class="bigbox-container">
    
     <form action="" method="post" class="bigbox">
            <h2>Would you like to <?php  $val= $_GET['a'];
   $stat='';
   if($val == 'c'){$stat ='cancel'; }
   else{ $stat ='return';} echo $stat; ?> the product?</h2>
            <br>
            <input type="submit" value="Yes" name="yes" class="btn">
            <a href="orders.php" type="submit" value="No" class="btn">No</a>
           
     </form>
   
         </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>