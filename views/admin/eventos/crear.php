<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<div class="dashboard__contenedor-boton">
    <a href="/admin/eventos" class="dashboard__boton">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div> <!-- .dashboard__contenedor-boton -->

<div class="dashboard__formulario">

    <?php require_once __DIR__ . '/../../templates/alertas.php'; ?>

    <form class="formulario" method="POST" action="/admin/eventos/crear">

        <?php require_once __DIR__ . '/formulario.php'; ?>

        <input type="submit" class="formulario__submit formulario__submit--registrar" value="Registrar Evento">
    </form>
</div> <!-- .dashboard__formulario -->