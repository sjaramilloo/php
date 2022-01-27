<?php
require_once 'exeppdo.php';

try{
    $conn = new PDO("mysql::host=$servername;dbname=$database",$username,$password);
    echo "Se conectó a $database, la buena parcero";    
}
catch(PDOException $pe){
    die(" La cagaste duro".$pe->getMessage());
}
?>