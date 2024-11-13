<?php include './includes/templates/header.php'; ?>
<a href="./admin/index.php" class="btn-boton">vista administrador</a>
<main class="login-container">

    <div class="login-box">
        <h2>Iniciar Sesión</h2>
        <form action="procesar_login.php" method="POST">
            <div class="input-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-submit">Ingresar</button>
        </form>
        <div class="login-options">
            <a href="">¿Olvidaste tu contraseña?</a>
            <a href="registro.php">¿No tienes una cuenta? Regístrate</a>
        </div>
        <div>
            <a href="./index.php" class="btn-boton">VOLVER INICIO</a>

        </div>
    </div>
</main>

<?php include './includes/templates/footer.php'; ?>