
<?php include("config.php");

//  $sql = "SELECT * FROM `producttable` WHERE status != 0";





$sql = "SELECT producttable.*, categories.categorie  As cate FROM `producttable` JOIN categories ON producttable.Categories = categories.id  WHERE status != 0";
$result = mysqli_query($conn , $sql);
$data= mysqli_fetch_all($result , MYSQLI_ASSOC);
$row=$data[0];



// echo  "<pre>";
// print_r($data);
// die();

?>



<!DOCTYPE html>
<html lang="en">
<head>
<?php   include_once("header.php"); ?>
  


</head>
<body>
   <div>

             <a class="button" href="trash.php" >Flash</a>  <a class="button" href="addcategorie.php" >Add Categorie </a>  <a class="button" href="addproduct.php" >Add Product </a> 

   </div>



<br>

<div class="container">
    <?php foreach ($data as $row) :?>
    <div class="card">
        <h1><?php echo $row['SL']; ?></h1>
        <img src="<?php echo $row['Image']; ?>" alt="Product Image" width="200">
        <h1><?php echo $row['ProductName']; ?></h1>
        <p class="price"><?php echo $row['cate']; ?></p>
        <p class="price">$<?php echo $row['Price']; ?></p>
        <p><?php echo $row['Shortdescription']; ?></p>
       <a class="button" href="flash.php?id=<?php echo $row['SL']; ?>" >Delete</a>  <a class="button" href="view.php?id=<?php echo $row['SL']; ?>" >View</a> <a class="button" href="update.php?id=<?php echo $row['SL']; ?>">Update </a>
      </div>
      <?php endforeach; ?>
</div>
  <footer>

     <?php   include_once("footer.php"); ?>

  </footer>

</body>
</html>
