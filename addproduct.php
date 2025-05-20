<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/addform.css">
 <link rel="stylesheet" href="assets/css/productmanagement.css">


<body>

<?php include_once("insertproduct.php"); ?>


  <div  class="form-container">
    <h2>Add New Product</h2>
    <form action="insertproduct.php" method="POST">
      <label for="name">Product Name</label>
      <input type="text" name="ProductName" id="name" >

      <label for="price">Price ($)</label>
      <input type="number" name="Price" id="price" step="0.01" >
      
      <label for="name">Short Description </label>
      <input type="text" name="SrtD" >

      <label for="name">Categories </label>
      <input type="text" name="catg"id="name" >

      <label for="shortdesc">Full Description</label>
      <textarea name="fulldesc" id="shortdesc" rows="4" ></textarea>

      <label for="image">Product Image</label>
      <input type="file" name="imageUrl" id="image" > 

      <button type="submit">Add Product</button>
    </form>
  </div>

  <br>

    <div class="container">

<?php 
if(mysqli_num_rows($result) > 0){
  while ($row = mysqli_fetch_assoc($result)) { ?>

    <div class="card">
      <img src="<?php  echo $row['Image'] ?>" alt="Denim Jeans" >
      <h1><?php  echo $row['ProductName'] ?></h1>
      <p class="price"><?php  echo $row['Categories'] ?></p>
      <p class="price"><?php  echo $row['Price'] ?></p>
      <p><?php  echo $row['Shortdescription'] ?></p>
      <p><button> Delete Product </button><button>Update Product </button></p>
    </div>


<?php 
}
}

?>
  </div>


</body>
</html>
