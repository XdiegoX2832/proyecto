
<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        echo "Todos los campos son obligatorios.";
    } else {
        $sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

        if ($conn->query($sql) === TRUE) {
            echo "¡Datos guardados exitosamente!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
   
}

?>
<a href="index.html">Volver</a>
