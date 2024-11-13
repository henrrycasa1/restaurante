<?php
$inicio = false;
include "./includes/templates/header.php";
?>

<main class="contenedor seccion">
    <a href="./index.php" class="btn-boton">volver inicio</a>
    <h1>Realiza tu Pedido</h1>
    <p>¡Bienvenido! Elige los platillos, bebidas y postres que deseas ordenar.</p>

    <form method="POST" class="formulario">
        <fieldset>
            <legend>Elige tu Orden</legend>


            <label for="platillo">Platillos:</label>
            <select name="platillo" id="platillo" class="campo">
                <option value="">Selecciona un platillo</option>
                <option value="pique_macho">Pique Macho</option>
                <option value="saltena">Salteña</option>
                <option value="anticucho">Anticucho</option>
                <option value="milanesa">Milanesa</option>
            </select>


            <label for="bebida">Bebidas:</label>
            <select name="bebida" id="bebida" class="campo">
                <option value="">Selecciona una bebida</option>
                <option value="refresco">Refresco</option>
                <option value="cerveza">Cerveza</option>
                <option value="jugo">Jugo Natural</option>
                <option value="agua">Agua</option>
            </select>


            <label for="postre">Postres:</label>
            <select name="postre" id="postre" class="campo">
                <option value="">Selecciona un postre</option>
                <option value="torta">Torta de Tres Leches</option>
                <option value="helado">Helado</option>
                <option value="arroz_con_leche">Arroz con Leche</option>
                <option value="flan">Flan</option>
            </select>

            <input type="submit" value="Agregar al Carrito" class="boton boton-verde">
        </fieldset>
    </form>

    <section class="carrito">
        <h2>Tu Pedido</h2>
        <ul>
            <?php

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $orden = [];
                if (!empty($_POST['platillo'])) {
                    $orden[] = "Platillo: " . $_POST['platillo'];
                }
                if (!empty($_POST['bebida'])) {
                    $orden[] = "Bebida: " . $_POST['bebida'];
                }
                if (!empty($_POST['postre'])) {
                    $orden[] = "Postre: " . $_POST['postre'];
                }


                if (count($orden) > 0) {
                    foreach ($orden as $item) {
                        echo "<li>$item</li>";
                    }
                    echo "<li><strong>Total: </strong> " . count($orden) * 15 . " Bs</li>";
                    echo '<a href="confirmar.php" class="boton boton-amarillo">Confirmar Pedido</a>';
                } else {
                    echo "<li>Tu carrito está vacío.</li>";
                }
            }
            ?>
        </ul>
    </section>
</main>

<?php
include "./includes/templates/footer.php";
?>