<?php
// $style[] = "Pilsner";
//$style[] = "Ipa";
//$style[] = "Dubbel";
//$style[] = "Dunkel";
//$style[] = "Witbier";
//$style[] = "Apa";
//$style[] = "Porter";
//echo $style[3];


//$style = array("Pilsner", "Ipa","Dubbel" ,"Dunkel","Witbier","Apa","Porter");
//echo $style[5];

//$equipo = array ("portero"=>'sebas', "defensa"=>'junior', "volante"=>'jessy', "delantero"=>'jaime');
//foreach ($equipo as $posicion => $nombre) {
//    echo "El ".$posicion, "es ", $nombre;
//    echo "<br>";
//}

//$modulo = ['Logica', 'Bases D', 'Programacion'];
//$docente = ['Luis', 'Albeiro', 'Jeffer'];
//$programa = array_combine ($modulo, $docente);
//print_r($programa);
//print_r (array_keys($programa));
//echo "<br>";
//print_r (array_values($programa));
//echo "<br>";
//print_r (array_flip($programa));
//echo "<br>";

$mall = array(array ("limpido", "Fabuloso", "Fab"),
              array("Salchica", "Queso"),
              array("Cepillo", "Colgate"), 
            );
foreach ($mall as $categorias) {
    echo "Los productos son:";
    foreach ($categorias as $productos) {
        echo $productos;
    }
    echo "<br>";
} 
?>