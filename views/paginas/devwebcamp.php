<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce sobre la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div> <!-- .devwebcamp__imagen -->

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">In non ligula at felis dapibus rutrum at eget diam. Nulla facilisi. Mauris mollis, sem in hendrerit venenatis, lacus arcu blandit velit, sit amet maximus sapien lectus id tellus. Sem in hendrerit venenatis, lacus arcu blandit velit, sit amet maximus sapien lectus id tellus.</p>

            <p <?php aos_animacion(); ?> class="devwebcamp__texto">In non ligula at felis dapibus rutrum at eget diam. Nulla facilisi. Mauris mollis, sem in hendrerit venenatis, lacus arcu blandit velit, sit amet maximus sapien lectus id tellus. Sem in hendrerit venenatis, lacus arcu blandit velit, sit amet maximus sapien lectus id tellus.</p>
        </div> <!-- .devwebcamp__contenido -->
    </div> <!-- .devwebcamp__grid -->
</main>