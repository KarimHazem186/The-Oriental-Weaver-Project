<?php
include "connection.php";

?>
<html>
<head>
<style>
.button {
    background: #fbd0d9;
   color:crimson;
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin: 4px 2px;
  cursor: pointer;
  font-family: 'Poppins', sans-serif;
  font-weight:bold;
}
 .button:hover{
   background: crimson;
   color:#fff;
}
</style>
<title>Classic Details</title>
</head>
<body style=" background: #eee;">
  <center>  <h1 style="font-size: 45px; font-family: 'Poppins', sans-serif;">Classic Page Content</h1></center> 
<table border="1px" cellpadding="10px" style="width:100%">
    <tr>
        <th style=" border: 1px solid black;
  font-weight:bold;font-size: 25px; font-family: 'Poppins', sans-serif;">Name</th>
        <th style=" border: 1px solid black;
  font-weight:bold;font-size: 25px; font-family: 'Poppins', sans-serif;
">Description</th>
        <th style=" border: 1px solid black;
  font-weight:bold;font-size: 25px; font-family: 'Poppins', sans-serif;">Price</th>
        <th colspan="2" style=" border: 1px solid black;
  font-weight:bold;font-size: 25px; font-family: 'Poppins', sans-serif;">Actions</th>
</tr>
<?php
$query="select * from `classic`";
$data=mysqli_query($con,$query);
$result=mysqli_num_rows($data);
if($result){
while($row=mysqli_fetch_array($data)){
    ?>
     <tr>
        <td style=" border: 1px solid black;
  font-weight:bold;font-size: 18px; font-family: 'Poppins', sans-serif;"><?php echo $row["NAME"]?></td>
        <td style=" border: 1px solid black;
font-weight:bold;font-size: 18px; font-family: 'Poppins', sans-serif;"><?php echo $row["DESCRIPTION"]?></td>
        <td style=" border: 1px solid black;
 font-weight:bold;font-size: 18px; font-family: 'Poppins', sans-serif;"><?php echo $row["PRICE"]?> EGP</td>
        <td style=" border: 1px solid black;
  font-weight:bold;font-size: 18px; font-family: 'Poppins', sans-serif;"><a href="update.php?id=<?php echo $row["ID"]?>"><img src="updated.png" alt="" width="40px" length="40px"></a>
                <a href="view_classic.php?deleteid=<?php echo $row["ID"];?>" ><img src="bin.png" alt="" width="35px" length="40px"></a> 
  
</td>
    </tr>

   
<?php
}
}
?>
</table><br>
<center><a href="../classic.php" class="button">Preview Classic Page</a></center><br>
</body>
</html>

<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `classic` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<script type='text/javascript'> alert ('Deleted Successfully') </script>";
    }
}
?>