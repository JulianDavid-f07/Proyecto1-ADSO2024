<?php
include('conexion.php'); // Conexión con la base de datos

$query = "SELECT * FROM productos";
$resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos - Oricoll S.A.S.</title>
</head>
<body>
    <h1>Lista de Productos - Oricoll S.A.S.</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['precio'] . "</td>";
                    echo "<td>" . $fila['stock'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay productos registrados en Oricoll S.A.S.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
