<?php include("config.php"); 


$id = $_GET['id'];

$sql = "SELECT * FROM `producttable` WHERE  SL=$id";
$result= mysqli_query($conn , $sql);
$data= mysqli_fetch_all($result , MYSQLI_ASSOC);
$row= $data[0];

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

 $sql = "UPDATE producttable  SET ProductName = '$ProductName', Price = '$Price', Categories = '$catg', Image='$imagePath', Shortdescription= '$SrtD' , Fulldescription ='$fulldesc'
            WHERE SL = $id";

    if ($conn->query($sql) === TRUE) {

         header('location:index.php');

    } else {
        echo "Error updating book: " . $conn->error;

    }


}









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

<?php 






?> 


<div class="form-container">
  <h2>Update Product</h2>
  <form action="" method="POST" enctype="multipart/form-data">

    <input type="hidden" value="<?php echo $row['SL']; ?>">
    <label for="ProductName">Product Name</label>
    <input type="text" name="ProductName" id="ProductName" value="<?php echo $row['ProductName'] ?>" required>

    <label for="Price">Price ($)</label>
    <input type="number" name="Price" id="Price" value="<?php echo $row['Price']; ?>" required step="0.01">

    <label for="SrtD">Short Description</label>
    <input type="text" name="SrtD" value="<?php echo $row['Shortdescription']; ?>" id="SrtD">

    <label for="catg">Categories</label>
    <input type="text" name="catg" value="<?php echo  $row['Categories']; ?>" id="catg">

    <label for="fulldesc">Full Description</label>
    <textarea name="fulldesc" id="fulldesc"  value="" rows="4"><?php echo $row['Fulldescription']; ?></textarea>

      <label for="imageUrl">Product Image</label>
    <input type="file" name="imageUrl" value="<?php echo $row['Image']; ?>" id="imageUrl" >

    <button type="submit">Add Product</button>
  </form>
</div>


</div>

</body>
</html>
