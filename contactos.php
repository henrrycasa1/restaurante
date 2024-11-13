<?php
$inicio = false;
include "./includes/templates/header.php";
?>

<main class="contenedor seccion">
    <a href="./index.php" class="btn-boton">volver inicio</a>
    <h1>Contacto</h1>
    <p>¿Tienes alguna pregunta o deseas hacer una reserva? ¡Contáctanos! Estamos aquí para ayudarte.</p>

    <section class="contacto-info">
        <div class="info">
            <h2>Información de Contacto</h2>
            <ul>
                <li><strong>Dirección:</strong> Calle 123, La Paz, Bolivia</li>
                <li><strong>Teléfono:</strong> +591 123 456 789</li>
                <li><strong>Correo Electrónico:</strong> contacto@.com</li>
                <li><strong>Horario:</strong> Lunes a Viernes, 12:00 PM - 10:00 PM</li>
            </ul>
        </div>

        <div class="mapa">
            <h2>Encuéntranos Aquí</h2>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2982.7242145765397!2d-68.11929348401539!3d-16.500111655510556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e367fbff8e17bb%3A0x4a7ca58014bb9e2b!2sLa%20Paz%2C%20Bolivia!5e0!3m2!1ses-419!2sbo!4v1634725693083!5m2!1ses-419!2sbo" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>


    <section class="formulario-contacto">
        <h2>Envíanos un Mensaje</h2>
        <form action="enviar_mensaje.php" method="POST" class="formulario">
            <fieldset>
                <legend>Datos Personales</legend>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí" required></textarea>
            </fieldset>

            <input type="submit" value="Enviar Mensaje" class="boton boton-verde">
        </form>
    </section>
</main>

<?php
include "./includes/templates/footer.php";
?>