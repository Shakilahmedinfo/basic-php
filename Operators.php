
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
Operators and Expressions

*/

//1. Arithmetic Operators:----------------------------->


//$value1 = 40;

//$value2 = 20;

//$total= $value1 + $value2 ;

//$total= $value1 - $value2 ;

//$total= $value1 / $value2 ;

//$total= $value1 * $value2 ;

//$total= $value1 % $value2 ;


 
//echo "This is the total value : ".$total;


//2. Assignment:----------------------------->

//$Value = 40;

//$Value+= 20;

//$Value -= 20;

//$Value *= 20;

//$Value %= 20;


//echo "This is the  value : ".$Value;

//ray = [ 20, 40 , 50]


//3. Comparison with switch  ---------------------------->

// loop 

//$value1 = 40;
// $value2 = "20";
// $value3 = 60 ;



// var_dump($value1 == $value2 ) False
// var_dump($value1 ===$value2 ) False
//var_dump($value1 != $value2 ) True 

/*
$Meal=10;
switch($Meal){
    case $Meal == 5 : echo("The Meal is Equal");
    break;
    case $Meal >= 5 : echo("The meal is greater than 5 ");
    break;
    case $Meal <= 5 : echo("The meal is less than 5.");
    break;
    default: echo("Enter a valid Number");
}

*/
//4.Logical with condition----------------------------->

//$value1 = 20;
//$value2 = 5;

/*if ($value1 > 2 && $value2 < 10 ) { 
    
    echo "Both conditions are correct.";

}

else{
     echo "If any condition is not true.Please Input the  valid number..!!";

}
*/

/*
if ($value1 > 50 || 50 < $value2 ) { 
    
    echo "Thank you so much.!!!";


}

else{
     echo "Both conditions are  wrong..Please Input the  valid number..!!";
}


// loop  ---------------------------->

for($i=1; $i<=5 ; $i++) { 
    $a=1;
    while ($a <=$i) {
        $a=$a+1;
        echo "*";
    }

    echo "<br>";

   
}

for($i=1; $i<=5 ; $i++) { 
    $a=5;
    while ($a >= $i) {
        $a=$a-1;
        echo "*";
    }

    echo "<br>";

   
}




$colors = ["Red", "Green", "Blue", "Yellow"];

foreach ($colors as $color) {

echo $color."<br>";



}






*/


$value1 = 20;
$value2 = "20";
$value3 = 60 ;



//var_dump( $value1 == $value2 ) //True 
//var_dump($value1 === $value2 ) //False
var_dump($value1 != $value3 ) // True 


	
?>



    
</body>
</html>
