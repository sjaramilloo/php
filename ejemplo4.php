<?php
$tabla = 2;
$counter = 1;
$total = 0;
do{
    $total = $tabla * $counter;
    echo "$tabla * $counter = $total";
    $counter = $counter + 1;    
    echo "<br>";
}while($counter<=5);
?>