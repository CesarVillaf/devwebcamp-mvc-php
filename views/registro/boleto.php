<main class="pagina">
    <h2 class="pagina__heading"><?php echo $titulo; ?></h2>
    <p class="pagina__descripcion">Tu Boleto - Te recomendamos almacenarlo, puedes compartirlo en redes sociales.</p>

    <div boleto-virtual">
        <div class="boleto boleto--<?php echo strtolower($registro->paquete->nombre); ?> boleto--acceso class="<?php aos_animacion(); ?>">
            <div class="boleto__contenido">
                <h4 class="boleto__logo">&#60;DevWebCamp/></h4>
                <p class="boleto__plan"><?php echo $registro->paquete->nombre; ?></p>
                <p class="boleto__nombre"><?php echo $registro->usuario->nombre . ' ' . $registro->usuario->apellido; ?></p>
            </div> <!-- .boleto__contenido -->

            <p class="boleto__codigo"><?php echo '#' . $registro->token; ?></p>
        </div> <!-- .boleto boleto--php -->
    </div> <!-- .boleto-virtual -->
</main>