<?php



include_once('connection.php');



if(isset($_POST['submit1'])){
    $target_dir3 = "classic/";
    $target_file4 = $target_dir3 . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit1"])) {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    $query= mysqli_query($con,"INSERT INTO `classic` (`IMAGE`,`ID`,`NAME`,`PRICE`,`DESCRIPTION`) VALUES ('$target_file4','$_POST[id]','$_POST[fname]','$_POST[price]','$_POST[desc]')");
    
  

    if(isset($_FILES['image'])){
      move_uploaded_file($_FILES['image']['tmp_name'], "classic/". $_FILES['image']['name']);
    }
    else{
        echo "image not found!";
    }
     
   
}
}
?>
<html>
    <head>
<title>Classic Control</title>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/astyle.css">
    </head>
<body>
<div>
     <center><h1>Classic Page Control</h1></center>
        <div class="form-container">
    <form action="" method="POST" enctype="multipart/form-data">
                <input type="text" id="fname" name="fname" required placeholder="Carpet Name"><br><br>
                <input type="text" id="desc" name="desc"required placeholder="Carpet Description"><br><br>
                <input type="text" id="id" name="id"required placeholder="Carpet ID"><br><br>
                <input type="file" id="image" name="image" required><br><br>
                <input type="text" id="price" name="price"required placeholder="Carpet Price"><br><br>
                <input type="submit" id="" name="submit1" value="Add"  class="form-btn"><br><br>
                <a href="view_classic.php" class="form-btn" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Content&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
</form>
</div>

</body>
</html>