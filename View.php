<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/addform.css">
  <link rel="stylesheet" href="assets/css/productmanagement.css">
 <?php include("config.php"); ?>

</head>
<body>

<?php

   
$id = $_GET['id'];

$sql = "SELECT * FROM `producttable` WHERE  SL=$id";
$result= mysqli_query($conn , $sql);
$data= mysqli_fetch_all($result , MYSQLI_ASSOC);
$row= $data[0];


// echo "<pre>";
// print_r($data);
// die();


?>

<div class="container">
    <div class="card">
        <h1><?php echo $row['SL']; ?></h1>
        <img src="<?php echo $row['Image']; ?>" alt="Product Image" width="200">
        <h1><?php echo $row['ProductName']; ?></h1>
        <p class="price"><?php echo $row['Categories']; ?></p>
        <p class="price">$<?php echo $row['Price']; ?></p>
        <p><?php echo $row['Shortdescription']; ?></p>
        <p><?php echo $row['Shortdescription']; ?></p>
      </div>
</div>



</body>
</html>