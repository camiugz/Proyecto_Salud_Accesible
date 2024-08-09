<?php
 
$server = "localhost";
$username = "root";
$password = "root";
$database = "Proyecto_Salud_Accesible";
 
$conn = new mysqli($server,$username,$password,$database);
if($conn->connect_error){

    die("Conexion fallida ".$conn->connect_error);
    
}

echo "Conexion exitosa";
?>
 