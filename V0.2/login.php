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
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php if (isset($error_message)) : ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
