
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Boliviano</title>
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="../../src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <header class="main-header">
        <nav class="navbar">
            <div class="logo">
                <a href="index.php">
                    <img src="/imagenes/logo.jpg" alt="">
                    <span>Sabores de Bolivia</span>
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="nosotros.php"><i class="fas fa-users"></i> Nosotros</a></li>
                <li><a href="anuncios.php"><i class="fas fa-bullhorn"></i> Anuncios</a></li>
                <li><a href="blog.php"><i class="fas fa-book-open"></i> Blog</a></li>
                <li><a href="contactos.php"><i class="fas fa-envelope"></i> Contacto</a></li>
                <li><a href="orden.php"><i class="fas fa-cooke"></i> Ordenar</a></li>
            </ul>
            <button class="login-btn" onclick="window.location.href='login.php'"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</button>
        </nav>
        <div class="header-title">
            <h1>Bienvenidos a Sabores de Bolivia</h1>
            <p>¡Experimenta la auténtica cocina boliviana!</p>
        </div>
    </header>
</body>

</html>