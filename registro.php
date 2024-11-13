<?php
$inicio = false;
include "./includes/templates/header.php";
?>

<main class="contenedor seccion">
    <a href="./login.php" class="btn-boton">volver</a>
    <h1>Registrar Nuevo Usuario</h1>
    <p>Por favor, ingresa tus datos para registrarte en el sistema.</p>


    <form method="POST" action="procesar_registro.php" class="formulario">
        <fieldset>
            <legend>Datos del Usuario</legend>


            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Juan" required class="campo">


            <label for="ap_paterno">Apellido Paterno:</label>
            <input type="text" name="ap_paterno" id="ap_paterno" placeholder="Pérez" required class="campo">


            <label for="ap_materno">Apellido Materno:</label>
            <input type="text" name="ap_materno" id="ap_materno" placeholder="Gómez" required class="campo">


            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="******" required class="campo">

            <!-- Botón de Enviar -->
            <input type="submit" value="Registrar Usuario" class="boton boton-verde">
        </fieldset>
    </form>
</main>

<?php
include "./includes/templates/footer.php";
?>