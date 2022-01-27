<?php
require_once 'dbpdo.php';

try{
    $conn = new PDO("mysql::host=$servername;dbname=$database",$username,$password);
    echo "Se conectó a $database, la buena";    
}
catch(PDOException $pe){
    die(" La cagaste duro".$pe->getMessage());
}
?>