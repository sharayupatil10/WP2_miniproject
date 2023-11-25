<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['Name']);
   $email = mysqli_real_escape_string($conn, $_POST['Email']);
   $phone=$_POST['phone'];
   $pass = $_POST['Password'];
   $cpass = $_POST['cpassword']; 
   $user_type = $_POST['user_type'];


   $select = " SELECT * FROM admin_user_db WHERE email = '$email'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO admin_user_db(Name, Email, Phone, Password, Type,VCode) VALUES('$name','$email',$phone,'$pass','$user_type',$vcode)";
         mysqli_query($conn, $insert);
         $to_email = $email;
         $subject = "RD Bank Contact Form";
         $body = "Hi,\n\nYour verification code is $vcode \n\nYours sincerely,\nAdmin\nRD BANK ";
         $headers = "From: wplrdbank@gmail.com";

         mail($to_email, $subject, $body, $headers);


         header('location:./OTP/index.php');
      }
   }  

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="number" name="phone" required placeholder="enter your phone number">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="Current">Current</option>
         <option value="Savings">Savings</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>

</div>

</body>
</html>