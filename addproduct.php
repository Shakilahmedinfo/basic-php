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

<?php include("config.php"); ?>


<div class="form-container">
  <h2>Add New Product</h2>
  <form action="config.php" method="POST" enctype="multipart/form-data">
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
       <a href="delete.php?id=<?php echo $row['SL']; ?>" >Delete</a>  <a href="view.php?id=<?php echo $row['SL']; ?>" >View</a> <a href="update.php?id=<?php echo $row['SL']; ?>">Update </a>
      </div>
      <?php endforeach; ?>
</div>
  

</body>
</html>
