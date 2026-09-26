<?php ;


$car = array("toyota","ford","Ducati","honda");

// for($i=0; $i < count($car);$i++){
//     echo "hello {$car[$i]}";
// }
$i = 0;

// while loop

// while($i < count($car)){
//     echo "$car[$i] <br>";
//     $i++;

// }

// do while loop

// do{
//     echo "$car[$i] <br>";
//     $i++;
// }while($i < count($car));

// foreach loop

echo"<ol>";

foreach($car as $k){
    echo "<li>$k</li>";
}

 echo "</ol>";