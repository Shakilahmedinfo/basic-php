<?php 

 header("Location: addproduct.php");


$host = "localhost";
$dbUsername = "root";
$dbPassword = ""; 
$dbName = "Productmanage";


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database.";
}



function  clean_data($data){

        return htmlspecialchars(strip_tags(trim($data)));

}

$error=[];

$nameP = !empty($_POST["nameP"]) ? clean_data($_POST["nameP"]) : '';
$Price = !empty($_POST["Price"]) ? clean_data($_POST["Price"]): '';
$catg = !empty($_POST["catg"]) ? clean_data($_POST["catg"]): '';
$imageUrl =  !empty($_POST["imageUrl"]) ? clean_data($_POST["imageUrl"]): '';
$SrtD = !empty($_POST["SrtD"]) ? clean_data($_POST["SrtD"]): '';
$fulldesc = !empty($_POST["fulldesc"]) ? clean_data($_POST["fulldesc"]): '';



$sql = "INSERT INTO `producttable` (`ProductName`, `Price`, `Categories`, `Image`, `Shortdescription`, `Fulldescription`)
            VALUES ('$nameP', '$Price', '$catg', '$imageUrl', '$SrtD', '$fulldesc')";

    if ($conn->query($sql) === TRUE) {
        echo "New product inserted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
    
$sql = "SELECT * FROM producttable";
$result = $conn->query($sql);

echo $result;

echo "<pre>";
 print_r($result);
 die();






?>