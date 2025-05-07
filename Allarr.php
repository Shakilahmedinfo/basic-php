<?php

echo  "shakil";


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

table {
  text-align: left;
  position: relative;
  border-collapse: collapse; 
  background-color: #f6f6f6;
}/* Spacing */
td, th {
  border: 1px solid #999;
  padding: 20px;
}
th {
  background: brown;
  color: white;
  border-radius: 0;
  position: sticky;
  top: 0;
  padding: 10px;
}
.primary{
  background-color: #000000
}

tfoot > tr  {
  background: black;
  color: white;
}
tbody > tr:hover {
  background-color: #ffc107;
}
</style>
<body>

<?php

// 1. Index Array  

$BasicArr= ["shakil", 20 , "Dhaka"];
//var_dump($BasicArr);

echo "<br>";

//2. Associative 

$AssociArr=["name"=>"shakil", "Roll"=>20, "Current Address"=>"Dhaka"];

/*
if( array_key_exists('name', $AssociArr) ) {
    echo $AssociArr['name'];
}

*/

//  var_dump(array_values($AssociArr));
// var_dump(array_keys($AssociArr));


//  $InArray = in_array( 20, $AssociArr);
//  var_dump($InArray);

//echo $AssociArr["name"]; 
//echo $AssociArr["Roll"]; 

foreach ($AssociArr as $key => $value) {

        echo strtoupper($key." : ".$value."<br>");

        
}
 


echo '<br>';
//3. Multidymentional 


$MultArr=[

       [
           "SL"=>01,
        
           "Employee Name"=> "Shakil",

           "Salary"=> 24000,


                     
       ]
     ,
       [
        "SL"=>02,
        "Employee Name"=> "Shakil",

        "Salary"=> 22000,


        ],




];


// $Rename_Employee = "Shakil Ahmed";
// $Rename_Salary = 23000;

// $MultArr[1]["Employee Name"]=$Rename_Employee;
// $MultArr[1]["Salary"]=$Rename_Salary;





$MultArr[] = [
"SL"=>03,

"Employee Name"=> "Abid",

"Salary"=> 20000,
         
];

// unset($MultArr[2]);
// echo count($MultArr);

// echo is_array($MultArr);
//  echo in_array($MultArr, "shakil");


$tota_Salary=0;

//var_dump($MultArr); 
/*
foreach ($MultArr as  $element) {

    echo $element["SL"]."<br>";
    echo $element["Employee Name"]."<br>";
    echo $element["Salary"]."<br>";
}


*/

?> 



<table>
  <h1>Employee Salary List</h1>
  <thead>
    <tr>
      <th class="primary" scope="col">SL</th>
      <th scope="col">Employee name</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>

  <tbody>

  <?php if(is_array($MultArr)): ?>

<?php foreach($MultArr as $element):  ($element);?>
    <tr>
      <th scope="row"><?php echo $element["SL"]; ?></th>
      <th><?php echo $element["Employee Name"]; ?></th>
      <th><?php echo $element["Salary"]. " Tk"; ?></th>
    </tr>

    <?php ?>

<?php endforeach?>

<?php endif ?>

</tbody>
<tfoot>
    <tr>
      <th>Total Salary</th>
      <td colspan="4"><i><?php foreach ($MultArr as $element ) {
                 $tota_Salary += $element["Salary"];  
                
                }
        echo $tota_Salary." Tk";

        ?></i></td>
    </tr>
  </tfoot>
</table>
</body>
</html>