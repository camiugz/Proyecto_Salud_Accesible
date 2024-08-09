<?php
include "config.php";
 
if (isset($_POST["action"])) {
    $action = $_POST["action"];
 
    switch ($action) {
        case 'insertar':
            $id_paciente = $_POST["id_paciente"];
            $fecha = $_POST["fecha"];
            $peso = $_POST["peso"];            
            $presion_arterial = $_POST["presion_arterial"];
            $glucosa = $_POST["glucosa"];
 
            $sql = "INSERT INTO datos_salud (id_paciente, fecha, peso, presion_arterial,glucosa) VALUES ('$id_paciente', '$fecha','$peso', '$presion_arterial', '$glucosa')";
            if ($conn->query($sql) === TRUE) {
                header("Location: RegistroDatosSalud.html");
            } else {
                echo "Error: No se registró correctamente!<br>";
            }
            break;
        }
    }