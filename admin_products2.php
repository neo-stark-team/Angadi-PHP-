<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];
$pname=$_GET['pname']; 
if(!isset($admin_id)){
   header('location:login.php');
};

if(isset($_POST['add_product'])){
   $subcat = $_POST['subcat'];
   $desc = $_POST['desc'];


        $add_product_query = mysqli_query($conn, "UPDATE `products` SET subcat = '$subcat', description = '$desc'  
         WHERE name='".$pname."'")
         or die('query failed');

      $message[] = 'product updated successfully!';
         
   
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('uploaded_img/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_products.php');
}

if(isset($_POST['update_product'])){

   $update_p_id = $_POST['update_p_id'];
   $update_name = $_POST['update_name'];
   $update_price = $_POST['update_price'];
    $update_category = $_POST['update_category'];
   $update_subcat = $_POST['update_subcat'];
   $update_desc = $_POST['update_desc'];

   mysqli_query($conn, "UPDATE `products` SET name = '$update_name', price = '$update_price' category='$update_category' , subcat='$update_subcat' , description='$update_desc' WHERE id = '$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'uploaded_img/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('uploaded_img/'.$update_old_image);
      }
   }

   header('location:admin_products.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'admin_header.php'; ?>



<section class="add-products">

   <h1 class="title">shop products</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add additional details</h3>
         <div class="inputBox2">
           
            <span class="span">Product Type </span>
            
                <?php 
                include 'config.php';
                $pname=$_GET['pname'];
                  
                   $sql = "SELECT category FROM `products` WHERE name='".$pname."'";
                   $query = mysqli_query($conn,$sql);
                   $result = mysqli_fetch_assoc($query);
                   $resultstring = $result['category'];
                
                 if ($resultstring == 'electronics')
                 {  
                echo'<select  name="subcat" class="select">
                <option value="mobile">Mobile Phone</option>
               <option value="headphone">Headphone & Earphone</option>
               <option value="laptop">Laptop</option>
               <option value="tv">Telivison</option>
               <option value="speakers">Speakers</option> 
                </select>';
                 }
                 else{
                    if ($resultstring == 'men'){
                     echo'<select  name="subcat" class="select">
               <option value="shirts">Shirts</option>
               <option value="tshirts">T-Shirts</option>
               <option value="pants">Pants</option>
               <option value="watches">Watches</option>
               <option value="footwear">Footwear</option>
               <option value="menacc">Accessories</option>  
                </select>';}
                else{
                   if ($resultstring == 'women')
                   {
                     echo'<select  name="subcat" class="select">
              <option value="ethnic">Ethnic Wear</option>
               <option value="western">Western Wear</option>
               <option value="jewellery">Jewellery</option>
               <option value="handbag">Handbags</option>
               <option value="wfootwear">Footwear</option>
               <option value="womenacc">Accessories</option>  
                </select>';
                  }
                  else{
                   if ($resultstring == 'home')
                   {
                     echo'<select  name="subcat" class="select">
               <option value="kitchenapp">Kitchen Appliances</option>
               <option value="kware">Kitchen Ware</option>
               <option value="furnishing">Home Furnishing</option>
               <option value="decor">Home Decor</option>
                <option value="furniture">Furntiures</option> 
                </select>';
                  }
                  else{
                   if ($resultstring == 'books')
                   {
                     echo'<select  name="subcat" class="select">
               <option value="comp">Competitive Examination</option>  
               <option value="school">School Books & guides</option>  
               <option value="horror">Horror</option>
               <option value="comedy">Comedy</option>
                <option value="scifi">Sci-Fi</option>
               <option value="romance">Romance</option>
                <option value="action">Action</option>
                <option value="motivational">Motivational</option> 
                </select>';
                  }
                  else{
                   if ($resultstring == 'tools')
                   {
                     echo'<select name="subcat" class="select">
               <option value="hammers">Hammers</option>
               <option value="wrench">Wrench</option>
               <option value="axe">Axe</option>
               <option value="measure">Measuring Instruments</option>
                <option value="drill">Drill</option>
                <option value="toolbox">Tool Box</option>  
                </select>';
                  }
                  else{
                   if ($resultstring == 'grocery')
                   {
                     echo'<select name="subcat" class="select">
               <option value="dairy">Dairy Products</option>
               <option value="fruitsnvegs">Fruits & Vegetables</option>
               <option value="bread">Breads</option>
               <option value="snacks">Snacks</option>
                <option value="candy">Candy</option>
                <option value="drinks">Drinks</option>
                <option value="frozen">Frozen Foods</option> 
                </select>';
                  }
                  else{
                   if ($resultstring == 'kids')
                   {
                     echo'<select name="subcat" class="select">
               <option value="toys">Toys</option>
               <option value="boys">Boy`s Clothing</option>
               <option value="girls">Girl`s Clothing</option>
                <option value="baby">Baby Clothing</option>
                <option value="footkids">Footwear</option>
                <option value="babycare">Baby Care</option> 
                </select>';
                  }
                  else{
                   if ($resultstring == 'art')
                   {
                     echo'<select name="subcat" class="select">
               <option value="artsup">Art Supplies</option>
               <option value="pens">Pen and Markers</option>
               <option value="notes">Notebooks</option>
               <option value="file">Files & Folders</option>
                <option value="fileaccs">Filing Accessories</option>
                <option value="calci">Calculators</option>
                </select>';
                  }}}}}}}}
 
            }
         ?>
           
         </div>
         <div class="description">
            <span class="span">Description</span>
            <input type="text" name="desc" class="box" placeholder="enter description" required>
         </div>
      <input type="submit" value="add product" name="add_product" class="btn">
   </form>

</section>


<script src="js/admin_script.js"></script>

</body>
</html>