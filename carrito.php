<?php
session_start();

// Inicializar carrito si no existe
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

// Función para agregar un helado al carrito
function agregarAlCarrito($id, $nombre, $precio) {
    array_push($_SESSION['carrito'], array('id' => $id, 'nombre' => $nombre, 'precio' => $precio));
}

// Función para calcular el total
function calcularTotal() {
    $total = 0;
    foreach ($_SESSION['carrito'] as $producto) {
        $total += $producto['precio'];
    }
    return $total;
}

// Manejar la solicitud de agregar al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    agregarAlCarrito($id, $nombre, $precio);
    echo "Producto agregado al carrito";
}
?>

<h2>Carrito de compras</h2>
<ul>
    <?php foreach ($_SESSION['carrito'] as $producto): ?>
        <li><?php echo $producto['nombre'] . " - $" . $producto['precio']; ?></li>
    <?php endforeach; ?>
</ul>

<p>Total: $<?php echo calcularTotal(); ?></p>
