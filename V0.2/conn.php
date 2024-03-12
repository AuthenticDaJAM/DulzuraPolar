<?php
// Configura las credenciales de la base de datos
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$base_de_datos = "DP";

// Crea una conexión
$conexion = new mysqli($servidor, $usuario, $contraseña, $base_de_datos);

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Error al conectar a MySQL: " . $conexion->connect_error);
} else {
  //  echo "Conexión exitosa a la base de datos.";
}
?>
