<?php 

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

$error =[];


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

//Insert the data

if (count($error) == 0) {

     $sql = "INSERT INTO `producttable` (`ProductName`, `Price`, `Categories`, `Image`, `Shortdescription`, `Fulldescription`)
            VALUES ('$ProductName', '$Price', '$catg', '$imagePath', '$SrtD', '$fulldesc')";

    if ($conn->query($sql) === TRUE) {
        echo "New product inserted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }

}
   
//Show data 


$sql = "SELECT * FROM `producttable`";

$result = $conn->query($sql);







?>