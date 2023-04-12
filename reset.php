<?php

include 'config.php';
session_start();

if(isset($_POST['otpbox1'])){
  $email =$_POST['email'];

  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' ) or die('query failed');

   if(mysqli_num_rows($select_users) < 1){
     
   }
   else{
$otp = rand(100000,999999);
$_SESSION['otp']= $otp;
$_SESSION['mail']= $email;

            require "Mail/phpmailer/PHPMailerAutoload.php";
            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';

             $mail->Username='angaditup@gmail.com';
            $mail->Password='Angadi123';

            $mail->setFrom('email', 'Password Reset');
            $mail->addAddress($_POST["email"]);

            $mail->isHTML(true);
            $mail->Subject="Reset your password";
            $mail->Body="<b>Dear User</b>
            <h3>We received a request to reset your password.</h3>
            <p>Your verification code is $otp .</p>
            <br><br>
            <p>With regrads,</p>
            <b>Angadi</b>";

         }



}

if(isset($_POST['reset'])){
 
   $pass = $_POST['password']));
   $cpass =$_POST['cpassword']));
   


   if($pass != $cpass){
         $message[] = 'please enter same password!';
      }
      else{
         mysqli_query($conn, " UPDATE `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', 'user') where name='$name'") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
   <section class="logform"><div class="form-container">

   <form action="" method="post">
      <h3>Reset Password</h3>
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="submit" name="otpbox1" value="Send otp" class="logbtn">
      <input type="number" name="otpbox" placeholder="enter otp" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
     
      <input type="submit" name="reset" value="reset password" class="logbtn">
   </form>

</div></section>


</body>
</html>