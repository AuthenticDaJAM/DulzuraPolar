<?php
session_start();

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Función para agregar un helado al carrito
function agregarAlCarrito($id, $nombre, $precio) {
    array_push($_SESSION['carrito'], array('ID' => $id, 'Nombre' => $nombre, 'Precio' => $precio));
}

// Función para calcular el total
function calcularTotal() {
    $total = 0;
    foreach ($_SESSION['carrito'] as $producto) {
        $total += $producto['Precio'];
    }
    return $total;
}

// Calcular el total de la venta
$ventaTotal = calcularTotal();

// Obtener los artículos del carrito
$articulos = "";
foreach ($_SESSION['carrito'] as $producto) {
    $articulos .= $producto['Nombre'] . " x " . $producto['Cantidad'] . ", ";
}
$articulos = rtrim($articulos, ", "); // Eliminar la última coma y el espacio

// Incluir la conexión a la base de datos
include 'config.php';

// Preparar la consulta SQL
$sql = "INSERT INTO Ventas (VentaTotal, Articulos) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $ventaTotal, $articulos);

// Ejecutar la consulta
if ($stmt->execute()) {
    // Limpiar el carrito de compras
    unset($_SESSION['carrito']);
    echo "¡Gracias por tu compra! La venta ha sido registrada correctamente.";
} else {
    echo "Error al registrar la venta: " . $conn->error;
}

// Cerrar la conexión y liberar los recursos
$stmt->close();
$conn->close();

?>

<h2>Carrito de compras</h2>
<ul>
    <?php foreach ($_SESSION['carrito'] as $producto): ?>
        <li><?php echo $producto['Nombre'] . " - $" . $producto['Precio']; ?></li>
    <?php endforeach; ?>
</ul>

<p>Total: $<?php echo calcularTotal(); ?></p>


<form method="post" action="finalizar_venta.php">
    <button type="submit" name="finalizar_venta">Finalizar Venta</button>
</form>