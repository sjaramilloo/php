<?php 
    $val1 = 5;
    $val2 = 64;
    function sumar(){
        $GLOBALS['Resultado'] = $GLOBALS['val1'] + $GLOBALS['val2'];
    }
    sumar();
    echo $Resultado;
?>