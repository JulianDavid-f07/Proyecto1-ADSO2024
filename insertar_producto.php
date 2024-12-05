<?php
// Incluir el archivo de conexión
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    // Insertar los datos en la base de datos
    $query = "INSERT INTO productos (nombre, descripcion, precio, cantidad) 
              VALUES ('$nombre', '$descripcion', '$precio', '$cantidad')";

    if ($conexion->query($query) === TRUE) {
        echo "Producto agregado exitosamente.";
    } else {
        echo "Error: " . $conexion->error;
    }
}
?>
