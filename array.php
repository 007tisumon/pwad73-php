<?php 

// indexd arry
$cars = array("Volvo", "BMW", "Toyota");

echo "<pre>";

// print_r($cars);

// multidimantional  array 

$myArr = array("Volvo", 15, ["apples", "bananas"]);

// print_r($myArr[2][0]);


// assosiative arry
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
// var_dump($car);

$newrray =array_push($car,$myArr,"Sumon");

// print_r($car);

$citys = array();

array_push($citys,"Dhaka","Pabna","barishal","Rajshahi","Bogura");

print_r($citys);
array_shift($citys);
array_shift($citys);
array_shift($citys);
print_r($citys);
array_pop($citys);
print_r($citys);


