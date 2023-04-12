<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_POST['add_review'])){
   $id =$_GET['on']; 
   $rev = $_POST['reviewbox'];
      mysqli_query($conn, "update `orders` set review ='$rev' where id='$id' ") or die('query failed');
      $message[] = 'Review added successfully';

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
            <input type="text" name="reviewbox" class="box" placeholder="enter review" required>
            <div>  <input type="submit" value="add review" name="add_review" class="btn"></div>
           
     </form>
   
         </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>