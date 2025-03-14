<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$base_de_datos = "proyecto_web";

$conn = new mysqli($servidor, $usuario, $clave, $base_de_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
