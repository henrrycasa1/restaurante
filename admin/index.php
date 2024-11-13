<?php
session_start();


if (!isset($_SESSION['usuario']) || $_SESSION['rol'] != '1') {
    header('../index.php'); // redirige al login si no es admin
    exit;
}


include "../includes/templates/header.php";
?>

<main class="contenedor seccion">
    <h1>Vista Administrador</h1>
    <a href="./chefs/listarchefs.php" class="btn-boton"> NUESTROS CHEF'S Y CAMAREROS</a>

    </section>
</main>

<?php
include "../includes/templates/footer.php";
?>