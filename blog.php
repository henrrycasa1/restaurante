<?php
$inicio = false;
include "./includes/templates/header.php";
?>

<main class="contenedor seccion">
    <a href="./index.php" class="btn-boton">volver inicio</a>
    <h1>Blog del Restaurante</h1>


    <section class="articulos">
        <?php

        $articulos = [
            [
                'titulo' => 'La Historia de la Salteña: Un Icono Boliviano',
                'descripcion' => 'La salteña es uno de los platos más emblemáticos de Bolivia, una empanada rellena de carne, pollo o cerdo, acompañada de un caldo sabroso. En este artículo exploramos su historia, su evolución y cómo se ha convertido en un símbolo de la gastronomía boliviana.',
                'fecha' => '2024-11-09',
                'imagen' => './imagenes/saltena.jpg',
                'autor' => 'Chef Carlos'
            ],
            [
                'titulo' => '¿Qué es el Pique Macho? Un Plato Inolvidable',
                'descripcion' => 'El Pique Macho es un plato típico de Bolivia que combina carne de res, papas fritas, salchichas, cebolla, tomate y una salsa picante, todo en un solo plato. Este artículo detalla su origen y cómo se prepara en nuestro restaurante.',
                'fecha' => '2024-11-07',
                'imagen' => './imagenes/pique.jpg',
                'autor' => 'Chef Patricia'
            ],
            [
                'titulo' => 'Receta de la Sopa de Maní: Tradición Boliviana',
                'descripcion' => 'La sopa de maní es una de las sopas más tradicionales de Bolivia, hecha a base de maní, carne de res y verduras. En este artículo te mostramos cómo hacer una auténtica sopa de maní al estilo de nuestro restaurante.',
                'fecha' => '2024-11-05',
                'imagen' => './imagenes/sopamani.jpg',
                'autor' => 'Chef Juan'
            ],
            [
                'titulo' => '5 Razones para Probar el Charque',
                'descripcion' => 'El charque es una carne deshidratada que se consume en varios países de América del Sur. En Bolivia, es un platillo básico que puede prepararse de diversas maneras. Descubre por qué deberías probar el charque en nuestra versión exclusiva.',
                'fecha' => '2024-11-03',
                'imagen' => './imagenes/charque.jpg',
                'autor' => 'Chef Mariana'
            ]
        ];


        foreach ($articulos as $articulo) {
            echo "
                <div class='articulo'>
                    <img src='images/{$articulo['imagen']}' alt='{$articulo['titulo']}' class='articulo-imagen'>
                    <div class='articulo-info'>
                        <h2>{$articulo['titulo']}</h2>
                        <p>{$articulo['descripcion']}</p>
                        <span class='fecha'>{$articulo['fecha']}</span>
                        <span class='autor'>Por: {$articulo['autor']}</span>
                        <a href='ver_articulo.php' class='boton boton-azul'>Leer Más</a>
                    </div>
                </div>";
        }
        ?>
    </section>
</main>

<?php
include "./includes/templates/footer.php";
?>