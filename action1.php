<?php 

function  clean_data($data){

        return htmlspecialchars(strip_tags(trim($data)));

}

$error=[];

$name= !empty($_POST["name"]) ? clean_data($_POST["name"] ) : '';
$email = !empty($_POST["email"]) ? clean_data($_POST["email"]) : '';
$phone= !empty($_POST["phone"]) ? clean_data($_POST["phone"]) : '';
$password= !empty($_POST["password"]) ? clean_data($_POST["password"]): '';

if(empty($name)){

    $error[]="The name is Required";

}

if(empty($password)){

    $error[]="The password is Required";
}

if(empty($phone)){
    $error[]="The Phone is Required";
}


if (!empty($phone)) {
        $phonePattern = "/^\+?[0-9\s\-]{7,20}$/";
        if (!preg_match($phonePattern, $phone)) {
            $errors[] = "Phone number format is invalid.";
        }
    }

if(empty($email)){
    $error[]="The name is Required";
}

if(!empty($email) && !filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error[]="The email is not validate";
}


if(count($error)== 0){

        echo "The name  is :".$name."<br>";
        echo "The password  is :".$password."<br>";
        echo "The email  is :".$email."<br>";
        echo "The phone  is :".$phone."<br>";

}

elseif(count($error)!= 0){
    
echo "<pre>";
 print_r($error);
 die();

}

else{

    "Service down";
}



?>