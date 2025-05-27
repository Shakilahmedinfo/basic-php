
<?php include("config.php");




function  clean_data($data){

        return htmlspecialchars(strip_tags(trim($data)));
}


$ProductName = !empty($_POST["ProductName"]) ? clean_data($_POST["ProductName"]) : NULL;
$Price = !empty($_POST["Price"]) ? clean_data($_POST["Price"]): '';
$catg = !empty($_POST["catg"]) ? clean_data($_POST["catg"]): '';
$SrtD = !empty($_POST["SrtD"]) ? clean_data($_POST["SrtD"]): '';
$fulldesc = !empty($_POST["fulldesc"]) ? clean_data($_POST["fulldesc"]): '';

// Handle file upload
 // File upload setup
    $targetDir = "product_image/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $imagePath = '';
    if (!empty($_FILES["imageUrl"]["name"])) {
        $fileName = time() . "_" . basename($_FILES["imageUrl"]["name"]);
        $imagePath = $targetDir . $fileName;
        move_uploaded_file($_FILES["imageUrl"]["tmp_name"], $imagePath);
    }






$error =[];


if(empty($Price)){

   $error[]= "The Product price is Required ";


}
if(empty($catg)){

   $error[]= "The Product categories is Required ";


}


if(empty($SrtD)){

   $error[]= "The Product shortdescription is Required ";




}
if(empty($fulldesc)){

   $error[]= "The Product fulldescription  is Required ";

}    


if (count($error) == 0) {

     $sql = "INSERT INTO `producttable` (`ProductName`, `Price`, `Categories`, `Image`, `Shortdescription`, `Fulldescription`)
            VALUES ('$ProductName', '$Price', '$catg', '$imagePath', '$SrtD', '$fulldesc')";

    if (mysqli_query($conn, $sql)) {
      echo "The code perfect done";

    } else {
        echo "Error: " . $conn->error;
    }

}





$sql = "SELECT * FROM `producttable`";

$result = mysqli_query($conn , $sql);
$data= mysqli_fetch_all($result , MYSQLI_ASSOC);
$row=$data[0];






?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/addform.css">
  <link rel="stylesheet" href="assets/css/productmanagement.css">
  


</head>
<body>

<div class="form-container">
  <h2>Add New Product</h2>
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="ProductName">Product Name</label>
    <input type="text" name="ProductName" id="ProductName" required>

    <label for="Price">Price ($)</label>
    <input type="number" name="Price" id="Price" required step="0.01">

    <label for="SrtD">Short Description</label>
    <input type="text" name="SrtD" id="SrtD">

    <label for="catg">Categories</label>
    <input type="text" name="catg" id="catg">

    <label for="fulldesc">Full Description</label>
    <textarea name="fulldesc" id="fulldesc" rows="4"></textarea>

      <label for="imageUrl">Product Image</label>
    <input type="file" name="imageUrl" id="imageUrl" required>

    <button type="submit">Add Product</button>
  </form>
</div>

<br>

<div class="container">
    <?php foreach ($data as $row) :?>
    <div class="card">
        <h1><?php echo $row['SL']; ?></h1>
        <img src="<?php echo $row['Image']; ?>" alt="Product Image" width="200">
        <h1><?php echo $row['ProductName']; ?></h1>
        <p class="price"><?php echo $row['Categories']; ?></p>
        <p class="price">$<?php echo $row['Price']; ?></p>
        <p><?php echo $row['Shortdescription']; ?></p>
       <a class="button" href="delete.php?id=<?php echo $row['SL']; ?>" >Delete</a>  <a class="button" href="view.php?id=<?php echo $row['SL']; ?>" >View</a> <a class="button" href="update.php?id=<?php echo $row['SL']; ?>">Update </a>
      </div>
      <?php endforeach; ?>
</div>
  

</body>
</html>
