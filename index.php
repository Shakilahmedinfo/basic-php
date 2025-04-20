<?php

//Rules for PHP variables:

/*
- Variables start with `$`
- Case-sensitive (`$Name` ≠ `$name`)
- A variable starts with the `$` sign, followed by the name of the variable
- A variable name must start with a letter or the underscore character
- A variable name cannot start with a number
- A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variable names are case-sensitive (`$age` and `$AGE` are two different variables)
 */

//<---------Data Type:----------->

//1. String 

$name = "Shakil Ahmed";
$Greeting = 'Hello ' .$name;

// echo $name."<br>";
echo $Greeting."<br>";

//2. Integer

$age =23;
echo $age-5;

echo "<br>";


//3. Float (Double)

$price = 19.55;
$PI = 3.1416;

echo $PI+$price;
echo "<br>"; 

//4. Boolean
$isLogIn= true ;
$islogout = false;

// var_dump($isLogIn)


// 5. Array
$colors = ["red" , "blue", "black"] ;
echo $colors[1];

echo "<br>";


// 6. Object

Class Phone{
    public $BrandName = 'Nokia';
    
}

$phone = new Phone();

 echo 'The ' .$phone->BrandName.'  is the best phone.';

 echo "<br>";

//  7. NULL
$x = NULL;
var_dump($x);
echo "<br>";


//  8. Resource
$resource = fopen("file.txt", "w");
var_dump($resource);







?>