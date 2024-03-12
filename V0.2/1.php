<?php
// login.php

// Verifica si se envió el formulario (método POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos ingresados por el usuario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Aquí deberías validar las credenciales con la base de datos
    // (consulta SQL para verificar si el usuario y la contraseña coinciden)

    // Ejemplo de verificación simple (¡no lo uses en producción!)
    if ($username === 'usuario' && $password === 'contraseña') {
        // Inicia la sesión (puedes usar sesiones o JWT, según tu preferencia)
        session_start();
        $_SESSION['user'] = $username;

        // Redirige al usuario a una página protegida
        header('Location: dashboard.php');
        exit;
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
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mi Sitio</a>
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
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
