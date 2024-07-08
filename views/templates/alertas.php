<?php foreach($alertas as $tipo => $alerta): ?>
    <?php foreach($alerta as $mensaje): ?>
        <div class="alerta alerta__<?php echo $tipo; ?>"><?php echo $mensaje; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>
