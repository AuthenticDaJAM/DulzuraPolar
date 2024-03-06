<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dulzura Polar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Main Page</h1>
        
        <!-- Mostrar productos de helados -->
        <div class="productos">
            <?php include 'productos.php'; ?>
        </div>
        
        <!-- Carrito de compras -->
        <div class="carrito">
            <?php include 'carrito.php'; ?>
        </div>
    </div>
</body>
</html>
