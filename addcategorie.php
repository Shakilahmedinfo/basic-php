
<?php 

include("config.php");

$catg = $_POST['catg'];

$sql = "INSERT INTO `categories` ( `Categorie`)  VALUES ('$catg')";

if (!empty(mysqli_query($conn, $sql))) {
      echo "The code perfect done";

    } else {
        echo "Error: " . $conn->error;
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php   include_once("header.php"); ?>
  


</head>
<body>
   <div>

             <a class="button" href="trash.php" >Flash</a>  <a class="button" href="index.php" >Add Product </a> 

   </div>

   </div>

<div class="form-container">
  <h2>Add New Product</h2>
  <form action="" method="POST" >
    <label for="catg">Categories</label>
    <input type="text" name="catg" id="catg">
    <button type="submit">Add Categories</button>
  </form>
</div>

<br>

  <footer>

     <?php   include_once("footer.php"); ?>

  </footer>

</body>
</html>
