<?php

@include 'connection.php';

session_start();

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($con, $_POST['name']);
   $email = mysqli_real_escape_string($con, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM admins WHERE `e-mail` = '$email' && password = '$pass' ";

   $result = mysqli_query($con, $select);
$total=mysqli_num_rows($result);
   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      if($total==1){
      $_SESSION['NAME'] =$name;
      $_SESSION['e-mail'] =$email;
      header('location:admin_page.php');
      }
      }
     
   else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/astyle.css">

</head>
<body>
  <center><h1>Admin Login Form</h1></center> 
<div class="form-container">

   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">Register Now</a></p>
   </form>

</div>

</body>
</html>