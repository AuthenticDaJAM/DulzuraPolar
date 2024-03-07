<?php
// Conexión a la base de datos
include 'config.php';

// Consulta para obtener los helados disponibles
$sql = "SELECT ID, Nombre, Imagen, Precio, Inventario FROM BOLLOS_STOCK";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los productos
    while($row = $result->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='" . $row['Imagen'] . "' alt='" . $row['Nombre'] . "'><br>";
        echo "<strong>" . $row['Nombre'] . "</strong><br>";
        echo "Precio: $" . $row['Precio'] . "<br>";
        echo "Cantidad disponible: " . $row['Inventario'] . "<br>";
        echo "<button onclick='agregarAlCarrito(" . $row['ID'] . ", \"" . $row['Nombre'] . "\", " . $row['Precio'] . ")'>Agregar al carrito</button>";
        echo "</div>";
    }
} else {
    // Mostrar imagen en blanco y negro y mensaje de "Sin inventario"
    $imagen_bn = str_replace('.png', 'bn.png', $row['Imagen']); // Modificar la ruta para la imagen en blanco y negro
    echo "<div class='producto'>";
    echo "<img src='" . $imagen_bn . "' alt='" . $row['Nombre'] . "'><br>";
    echo "<strong>" . $row['Nombre'] . "</strong><br>";
    echo "SIN INVENTARIO<br>";
    echo "</div>";
}
$conn->close();
?>