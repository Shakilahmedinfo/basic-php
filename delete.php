
<?php


include('config.php');

$id= $_GET["id"];

$sql=" DELETE FROM `producttable` WHERE SL = $id";

$result=mysqli_query ($conn, $sql);


if($result== true){
    header('location:addproduct.php');
    
}else{
    echo "Error deleting record: " . mysqli_error($conn);

}

?>
