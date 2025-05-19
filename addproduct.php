<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="assets/css/addform.css">
 <link rel="stylesheet" href="assets/css/productmanagement.css">


<body>

  <div class="form-container">
    <h2>Add New Product</h2>
    <form action="insertproduct.php" method="POST">
      <label for="name">Product Name</label>
      <input type="text" name="nameP" id="name" >

      <label for="price">Price ($)</label>
      <input type="number" name="Price" id="price" step="0.01" >
      
      <label for="name">Short Description </label>
      <input type="text" name="name" id="SrtD" >

      <label for="name">Categories </label>
      <input type="text" name="catg"id="name" >

      <label for="shortdesc">Full Description</label>
      <textarea name="fulldesc" id="shortdesc" rows="4" ></textarea>

      <label for="image">Product Image</label>
      <input type="file" name="imageUrl" id="image" > 

      <button type="submit">Add Product</button>
    </form>
  </div>



  <div class="container">
  <?php if($result->num_rows = o): ?>
        <?php while ($row = $result->fetch_assoc())  ?>
    <div class="card">
      <img src="jeans3.jpg" alt="Denim Jeans">
      <h1><?php echo $row['nameP'];?></h1>
      <p class="price">$19.99</p>
      <p>High-quality denim with perfect fit and comfort.</p>
      <p><button>Add to Cart</button></p>
    </div>

  <?php endwhile; ?>
  <?php endif; ?>
  </div>

</body>
</html>
