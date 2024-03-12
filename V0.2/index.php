<?php
// Conexión usando require
require "conn.php";
// Verifica si se envió el formulario (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos ingresados por el usuario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí deberías validar las credenciales con la base de datos
    // (consulta SQL para verificar si el usuario y la contraseña coinciden)
    $sql = "SELECT Usuario, Contrasena, Permisos FROM Usuarios WHERE Usuario = '$username'";
    $result = $conexion->query($sql);
    if ($result->num_rows > 0) {
        // Obtener la fila de resultados
        $row = $result->fetch_assoc();
    }
    // Ejemplo de verificación simple (¡no lo uses en producción!)
    if ($username === $row['Usuario'] && $password === $row['Contrasena']) {
        // Inicia la sesión (puedes usar sesiones o JWT, según tu preferencia)
        session_start();
        $_SESSION['user'] = $username;

        // Redirige al usuario a una página protegida
        //header('Location: dashboard.php');
        //exit;
    } else {
        $error_message = 'Usuario o contraseña incorrectos';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Navbar con Pop-up</title>
</head>
<body>
<nav class="navbar fixed-top bg-body-tertiary navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
        <a class="navbar-brand" href="#">Mi Sitio</a>
        <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
        </li>
        <!-- Mostrar esta pestaña solo para administradores -->
        <?php if ($row["Permisos"] == 'Admin'): ?>
        <li class="nav-item"><a href="#">Panel de Administración</a></li>
        <?php endif; ?>
        </ul>
        <!-- Botón para abrir el pop-up -->
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#loginModal">
            Iniciar Sesión
        </button>
    </div>
</nav>


    <!-- Pop-up (Modal) -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí coloca tu formulario de inicio de sesión -->
                    <!-- Por ejemplo: -->
                    <h1>Iniciar Sesión</h1>
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
<h1>Hello, world!</h1>
</body>
</html>