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