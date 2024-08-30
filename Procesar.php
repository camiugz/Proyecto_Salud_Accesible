<?php
// Configuración de la conexión a la base de datos
include "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])) {
    $action = $_POST["action"];

    switch ($action) {
        case 'insertar_salud':
            $id_paciente = $_POST["id_paciente"];
            $fecha = $_POST["fecha"];
            $peso = $_POST["peso"];
            $presion_arterial = $_POST["presion_arterial"];
            $glucosa = $_POST["glucosa"];

            $sql = "INSERT INTO datos_salud (id_paciente, fecha, peso, presion_arterial, glucosa) 
                    VALUES ('$id_paciente', '$fecha', '$peso', '$presion_arterial', '$glucosa')";

            if ($conn->query($sql) === TRUE) {
                echo "Datos de salud registrados correctamente.";
            } else {
                echo "Error al registrar los datos de salud: " . $conn->error;
            }
            break;

        case 'insertar_historial':
            $id_paciente = $_POST["id_paciente"];
            $descripcion = $_POST["descripcion"];
            $fecha = $_POST["fecha"];

            $sql = "INSERT INTO historial_medico (id_paciente, descripcion, fecha) 
                    VALUES ('$id_paciente', '$descripcion', '$fecha')";

            if ($conn->query($sql) === TRUE) {
                echo "Historial médico registrado correctamente.";
            } else {
                echo "Error al registrar el historial médico: " . $conn->error;
            }
            break;

        case 'insertar_recordatorio':
            $id_paciente = $_POST["id_paciente"];
            $mensaje = $_POST["mensaje"];
            $fecha_recordatorio = $_POST["fecha_recordatorio"];
            $recurrente = isset($_POST["recurrente"]) ? 1 : 0;

            $sql = "INSERT INTO recordatorios (id_paciente, mensaje, fecha_recordatorio, recurrente) 
                    VALUES ('$id_paciente', '$mensaje', '$fecha_recordatorio', '$recurrente')";

            if ($conn->query($sql) === TRUE) {
                echo "Recordatorio registrado correctamente.";
            } else {
                echo "Error al registrar el recordatorio: " . $conn->error;
            }
            break;

        default:
            echo "Acción no válida.";
            break;
    }
}

// Cierre de la conexión
$conn->close();
?>
