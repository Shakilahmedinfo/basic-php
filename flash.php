<?php include("config.php"); 


$id = $_GET['id'];



 $sql = "UPDATE producttable  SET status = '0' WHERE SL = $id";

    if ($conn->query($sql) === TRUE) {

         header('location:index.php');

    } else {
        echo "Error updating book: " . $conn->error;

    }










?>