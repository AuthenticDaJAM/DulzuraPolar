<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: iniciar_sesion.php"); // Redirigir a la página de inicio de sesión si el usuario no ha iniciado sesión
    exit;
}

// Verificar si hay productos en el carrito de compras
if (empty($_SESSION['carrito'])) {
    echo "El carrito de compras está vacío.";
    exit;
}

// Procesar la compra y guardar la información en la base de datos, enviar correos electrónicos, etc.
// Aquí puedes escribir la lógica para realizar las acciones necesarias para completar la compra



// Por ejemplo, podrías guardar la información de la compra en la base de datos
// y limpiar el carrito de compras después de la compra

// Limpiar el carrito de compras
unset($_SESSION['carrito']);

echo "¡Gracias por tu compra!";
?>
