
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





$sql = "SELECT * FROM `producttable` WHERE status = 0";

$result = mysqli_query($conn , $sql);
$data= mysqli_fetch_all($result , MYSQLI_ASSOC);
$row=$data[0];






?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php   include_once("header.php"); ?>
  


</head>
<body>
   <div>

              <a class="button" href="add.php" >Add Product </a> <a class="button" href="index.php" >View All</a>

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
       <a class="button" href="delete.php?id=<?php echo $row['SL']; ?>" >Delete</a>    </div>
      <?php endforeach; ?>
</div>
  <footer>

     <?php   include_once("footer.php"); ?>

  </footer>

</body>
</html>