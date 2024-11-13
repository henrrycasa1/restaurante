<!-- index.php -->
<?php include './includes/templates/header.php'; ?>
<main>

    <section class="welcome-section">
        <div class="welcome-text">
            <h2 class="welcome-title">Descubre el Sabor de Bolivia</h2>
            <p class="welcome-description">Nuestra misión es traerte los auténticos sabores bolivianos, desde las deliciosas salteñas hasta el tradicional pique macho. Cada platillo está hecho con ingredientes frescos y recetas auténticas para darte una experiencia única.</p>
        </div>
        <div class="welcome-image">
            <img src="./imagenes/chef.jpg" alt="Chef preparando comida boliviana" class="image-fade">
        </div>
    </section>


    <div class="slider">
        <div class="slides">
            <img src="imagenes/platillo1.jpg" alt="Salteñas Bolivianas" width="100px">
            <img src="imagenes/platillo2.jpg" alt="Silpancho Boliviano" width="100px">
            <img src="imagenes/platillo3.jpg" alt="Pique Macho" width="100px">
        </div>
    </div>


    <section class="gallery">
        <h3>Nuestros Platillos Estrella</h3>
        <a href="" class="btn-boton"">mas platillos</a>
        <div class=" gallery-images">
            <div class="gallery-item">
                <img src="./imagenes/empanada.jpg" alt="">
                <p>Empanada de Queso</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/chairo.jpg" alt="">
                <p>Chairo Paceño</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/fricase.jpg" alt="">
                <p>Fricassé</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/mondongo.jpg" alt="">
                <p>Mondongo</p>
            </div>
            </div>
    </section>

    <section class="gallery">
        <h3>Nuestras Bebidas mas Refrescantes</h3>
        <a href="" class="btn-boton">mas bebidas</a>
        <div class="gallery-images">
            <div class="gallery-item">
                <img src="./imagenes/chicha.jpg" alt="">
                <p>Chicha Boliviana</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/singani.jpg" alt="">
                <p>Singani</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/chuflay.jpg" alt="">
                <p>Chuflay</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/somo.jpg" alt="">
                <p>Somo</p>
            </div>
        </div>
    </section>

    <section class="gallery">
        <h3>Para Terminar Un Delicioso Postre</h3>
        <a href="" class="btn-boton">mas postres</a>
        <div class="gallery-images">
            <div class="gallery-item">
                <img src="./imagenes/heladoplatano.jpg" alt="">
                <p>Helado de Plátano o Banano con salsa de caramelo</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/bocaditochuno.jpg" alt="">
                <p>Bocaditos de chuño o natillas</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/mouse.jpg" alt="">
                <p>Mousse de chocolate</p>
            </div>
            <div class="gallery-item">
                <img src="imagenes/mousedurazno.jpg" alt="">
                <p>Mousse de durazno</p>
            </div>
        </div>
    </section>

    <!-- Testimonios -->
    <section class="testimonials">
        <h3>Lo Que Dicen Nuestros Clientes</h3>
        <div class="testimonials-container">
            <div class="testimonial">
                <p>"¡La mejor comida boliviana que he probado fuera de Bolivia! Me encantaron las salteñas."</p>
                <p>- Ana P.</p>
            </div>
            <div class="testimonial">
                <p>"Una experiencia auténtica y deliciosa, el pique macho es imperdible."</p>
                <p>- Carlos M.</p>
            </div>
            <div class="testimonial">
                <p>"Excelente atención y los sabores me recordaron a mi tierra. Muy recomendado."</p>
                <p>- Luis R.</p>
            </div>
        </div>
    </section>
</main>
<?php include './includes/templates/footer.php'; ?>