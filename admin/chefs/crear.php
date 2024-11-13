<?php
$inicio = false;
include "../../includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>Crear Nuevo Empleado</h1>
    <a href="./listarchefs.php" class="boton boton-verde">Volver</a>

    <form method="post" class="formulario" enctype="multipart/form-data">
        <fieldset>
            <legend>Información del Empleado</legend>


            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del empleado" required>
            </div>


            <div class="campo">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="email@dominio.com" required>
            </div>
            <div class="campo">
                <label for="email">Password:</label>
                <input type="password" name="pwd" id="pwd" placeholder="********" required>
            </div>


            <div class="campo">
                <label for="rol_empleado">Rol del Empleado:</label>
                <select name="rol_empleado" id="rol_empleado" required>
                    <option value="chef">Chef</option>
                    <option value="mesero">Mesero</option>
                    <option value="cajero">Cajero</option>
                </select>
            </div>
        </fieldset>

        <div class="campo">
            <input type="submit" value="Registrar Empleado" name="registrarEmp" class="boton boton-verde">
        </div>
    </form>
</main>

<?php
include "../../includes/templates/footer.php";
?>