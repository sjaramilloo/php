<?php  
$user = $_POST["A"];
$Pass = $_POST["B"];

    if ($user == "Estudiante" && $Pass == "12345"){
        echo "Bienvenido a la plataforma";
    }else{
        echo "Usuario o contraseña con incorrectas Your not Pass";
    }
?>  