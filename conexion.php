<?php
// Datos de conexión
$host = "localhost"; // Dirección del servidor (localhost porque usamos XAMPP)
$usuario = "root"; 
$contraseña = ""; 
$base_datos = "oricollsas"; // Nombre base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error al conectar con la base de datos: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
