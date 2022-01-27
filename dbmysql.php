<?php
$servername = "localhost";
$database = "almacen";
$username = "root";
$Password = "";

//Crear metodo de conexión
$conn = mysqli_connect($servername, $username, $Password, $database);

//Reconocer la conexión

if (!$conn){
    die("Conexión fallida, la cagaste".mysqli_connect_error());
}
echo " Conexión exitosa perro";
mysqli_close($conn);
?>