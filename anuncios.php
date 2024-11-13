<?php
$inicio = false;
include "./includes/templates/header.php";
?>

<main class="contenedor seccion">
<a href="./index.php" class="btn-boton">volver inicio</a>
    <h1>Anuncios del Restaurante</h1>
    


    <section class="anuncios">
        <?php

        $anuncios = [
            [
                'titulo' => '¡Menú Ejecutivo a Solo 25 Bolivianos!',
                'descripcion' => 'Disfruta de nuestro delicioso menú ejecutivo con platos típicos de la comida boliviana, como la salteña, la llajwa y un refresco natural por solo 25 Bs. ¡Te esperamos todos los días de la semana!',
                'fecha' => '2024-11-10',
                'imagen' => 'promocion_menu_ejecutivo.jpg'
            ],
            [
                'titulo' => '¡Noche de Karaoke en el Restaurante!',
                'descripcion' => 'Todos los viernes a partir de las 8 PM, ven a disfrutar de una noche de karaoke en nuestro restaurante. ¡Canta tus canciones favoritas mientras disfrutas de un plato de anticuchos o un pique macho! ¡No faltes!',
                'fecha' => '2024-11-05',
                'imagen' => 'noche_de_karaoke.jpg'
            ],
            [
                'titulo' => '¡Festival de la Comida Boliviana!',
                'descripcion' => 'Este fin de semana, celebra con nosotros el Festival de la Comida Boliviana. Ofrecemos una variedad de platos tradicionales de todas las regiones de Bolivia, desde la sopa de maní hasta el charque. ¡Entrada libre!',
                'fecha' => '2024-11-01',
                'imagen' => 'festival_comida_boliviana.jpg'
            ],
            [
                'titulo' => '¡Descuento Especial para Clientes Frecuentes!',
                'descripcion' => 'Si eres un cliente frecuente, te premiamos con un 15% de descuento en tu próxima visita. Solo debes mostrar tu tarjeta de cliente frecuente al momento de pagar. ¡Gracias por ser parte de nuestra familia!',
                'fecha' => '2024-10-28',
                'imagen' => 'descuento_cliente_frecuente.jpg'
            ],
            [
                'titulo' => 'Nuevo Plato: Sopa de Cordero',
                'descripcion' => 'Ven a probar nuestra nueva sopa de cordero, un plato tradicional boliviano con un toque único. Ideal para los días fríos, esta sopa estará disponible todo el mes de noviembre.',
                'fecha' => '2024-10-25',
                'imagen' => 'sopa_de_cordero.jpg'
            ]
        ];

       
        foreach ($anuncios as $anuncio) {
            echo "
                <div class='anuncio'>
                    <img src='images/{$anuncio['imagen']}' alt='{$anuncio['titulo']}' class='anuncio-imagen'>
                    <div class='anuncio-info'>
                        <h2>{$anuncio['titulo']}</h2>
                        <p>{$anuncio['descripcion']}</p>
                        <span class='fecha'>{$anuncio['fecha']}</span>
                        <a href='editar_anuncio.php' class='boton boton-azul'>Editar</a>
                        <a href='eliminar_anuncio.php' class='boton boton-rojo'>Eliminar</a>
                    </div>
                </div>";
        }
        ?>
    </section>
</main>

<?php
include "./includes/templates/footer.php";
?>