<?php

// Normal Function

Function Hello(){
    echo "Hello shakil";

    
}

// Hello();

Function add($a,$b){
    return $a+$b;
}

$add= add(4,2);

// echo $add."<br>";

// Local scope

Function localscope(){
    $name="shakil";
    echo "My name is ".$name;
}


// localscope();

//Global scope

$name="shakil";

Function Globalscope(){
    $name=$GLOBALS['name'];
    echo "My name is ".$name;
}

// Globalscope();


//Static scope


Function Staticscope(){
    static  $value= 10;
    $value++;
    echo $value."<br>";
}


// Staticscope();
// Staticscope();

//Anonymous Functions (Closure)

$Anonymous = function($n) {
    return $n * $n;
};
echo $Anonymous(2);


?>

