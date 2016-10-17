<?php

//$car=array("toyo","nis","isu");
$car=["toyota","honda","isuzu"];
print_r($car);
echo '<hr>';
$count_car= count($car);
echo $car[1];

for ($x= 0; $x < $count_car;$x++ ){
    echo $car[$x].'<br>';
}
