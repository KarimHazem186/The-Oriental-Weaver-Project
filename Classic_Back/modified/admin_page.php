<?php

@include 'connection.php';
session_start();
$sql="SELECT * FROM admins";
$all_admins = $con->query($sql);
if(!isset($_SESSION['NAME'])){
   header('location:login_form.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/astyle.css">
   <link rel="stylesheet" href="assets/css/styles.css"/>
</head>
<body style="background-image:url('pexels-gdtography-911738.jpg');background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;">
   
<div class="container">
<?php
                $row=mysqli_fetch_assoc($all_admins);
                ?>
   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php
      echo $row['NAME'];
      ?></span></h1>
      <p>This is an admin page</p>
      <a href="Functions.php" class="btn">Admin Functions</a><br><br>
      <a href="login_form.php" class="btn">login</a>
      <a href="register_form.php" class="btn">register</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>