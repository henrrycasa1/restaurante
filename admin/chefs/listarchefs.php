<?php
$inicio = false;
include "../../includes/templates/header.php";
?>
<main class="list-container">
    <a href="../../index.php" class="btn-boton">volver inicio</a>
    

    <a href="./crear.php" class="btn-boton">nuevo empleado</a>
    
    
    <h1>lista de Chef's</h1>
    <table class="table">
        <thead>
            <th>Nombre</th>

            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php
            include "../../includes/config/database.php";
            /*$db = conectarDB();
            $consql = "";
            $res = mysqli_query($db, $consql);
            while ($reg = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $reg['nombre'] . "</td>";

                echo "<td><a href=eliminar.php?cod=" . $reg['idchef'] . " class='btn boton'>Eliminar</a></td>";
                echo "<td><a href=actualizar.php?cod=" . $reg['idchef'] . " class='btn boton'>Modificar</a></td>";
                echo "</tr>";
            }
            */
            ?>
        </tbody>

    </table>
    <h1>lista de Camareros</h1>
    <table class="table">
        <thead>
            <th>Nombre</th>

            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php
            include "../../includes/config/database.php";
            /*$db = conectarDB();
            $consql = "";
            $res = mysqli_query($db, $consql);
            while ($reg = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $reg['nombre'] . "</td>";

                echo "<td><a href=eliminar.php?cod=" . $reg['idchef'] . " class='btn boton'>Eliminar</a></td>";
                echo "<td><a href=actualizar.php?cod=" . $reg['idchef'] . " class='btn boton'>Modificar</a></td>";
                echo "</tr>";
            }
            */
            ?>
        </tbody>

    </table>


</main>
<?php
include "../../includes/templates/footer.php";
?>