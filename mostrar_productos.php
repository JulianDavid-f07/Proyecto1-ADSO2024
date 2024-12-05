<?php
include('conexion.php');  // Incluye el archivo de conexión

// Consulta a la base de datos para obtener todos los productos
$result = $conexion->query("SELECT * FROM productos");

if ($result->num_rows > 0) {
    // Si hay productos, muestra una tabla
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Cantidad</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['descripcion'] . "</td>";
        echo "<td>" . $row['precio'] . "</td>";
        echo "<td>" . $row['cantidad'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    // Si no hay productos
    echo "No hay productos disponibles.";
}
?>
