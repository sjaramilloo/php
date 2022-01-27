<?php
$servername = "localhost";
$database = "concesionario";
$username = "root";
$Password = "";

$conn = mysqli_connect($servername, $username, $Password, $database);

if (!$conn){
    die("Conexión fallida".mysqli_connect_error());
}
echo " Conexión exitosa";
mysqli_close($conn);


?>