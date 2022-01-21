<?php
$Marcas = array ("Coupe"=>'2020', "4x4"=>'2019', "Convertible"=>'2022', "Hashback"=>'2020');
foreach ($Marcas as $estilo => $modelo) {
    echo "El ".$estilo, "es ", $modelo;
    echo "<br>";
}

$lenguajes = ['php', 'phyton', 'js'];
$devs = ['Luis', 'Albeiro', 'Jeffer'];
$desarrollo = array_combine ($lenguajes, $devs);
print_r($desarrollo);

$mall = array(array ("h&m", "Zara", "stradivarius"),
              array("Dollar city", "dollar house"),
              array("Papa jhoms", "Burguer king"),
            );
foreach ($mall as $tiendas) {
    echo "Los productos son:";
    foreach ($tiendas as $estilo) {
        echo $estilo;
    }
    echo "<br>";
}
?>