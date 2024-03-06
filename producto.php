<?php
// Conexión a la base de datos
$conn = new mysqli('localhost', 'usuario', 'contraseña', 'basededatos');

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener los helados disponibles
$sql = "SELECT id, nombre, imagen, precio, cantidad_disponible FROM helados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar los productos
    while($row = $result->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'><br>";
        echo "<strong>" . $row['nombre'] . "</strong><br>";
        echo "Precio: $" . $row['precio'] . "<br>";
        echo "Cantidad disponible: " . $row['cantidad_disponible'] . "<br>";
        echo "<button onclick='agregarAlCarrito(" . $row['id'] . ", \"" . $row['nombre'] . "\", " . $row['precio'] . ")'>Agregar al carrito</button>";
        echo "</div>";
    }
} else {
    echo "No hay helados disponibles";
}
$conn->close();
?>