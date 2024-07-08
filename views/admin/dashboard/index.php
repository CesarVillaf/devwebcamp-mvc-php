<h2 class="dashboard__heading"><?php echo $titulo ?></h2>

<main class="bloques">
    <div class="bloques__grid">
        <div class="bloque">
            <h3 class="bloque__heading">Últimos Registros</h3>
            <table class="table">
                <thead class="table__thead--registros">
                    <tr class="table__tr--registros">
                        <th scope="col" class="table__th--registros">Nombre</th>
                        <th scope="col" class="table__th--registros">Plan</th>
                        <th scope="col" class="table__th--registros">Token Boleto</th>
                    </tr>
                </thead>
                <tbody class="table__tbody--registros">
                    <?php foreach($registros as $registro): ?>
                        <tr class="table__tr--registros">
                            <td class="table__td--registros"><?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?></td>
                            <td class="table__td--registros"><?php echo $registro->paquete->nombre; ?></td>
                            <td class="table__td--registros"><?php echo $registro->token; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- .bloque -->

        <div class="bloque">
            <h3 class="bloque__heading">Ingresos</h3>
            <p class="bloque__texto--cantidad">$<?php echo $ingresos; ?></p>
        </div> <!-- .bloque -->

        <div class="bloque">
            <h3 class="bloque__heading">Eventos con Menos Lugares Disponibles</h3>
            <table class="table">
                <thead class="table__thead--registros">
                    <tr class="table__tr--registros">
                        <th scope="col" class="table__th--registros">Nombre</th>
                        <th scope="col" class="table__th--registros">Categoria</th>
                        <th scope="col" class="table__th--registros">Speaker</th>
                        <th scope="col" class="table__th--registros">Disponibilidad</th>
                    </tr>
                </thead>
                <tbody class="table__tbody--registros">
                    <?php foreach($menos_disponibles as $evento): ?>
                        <tr class="table__tr--menos-disponibles ">
                            <td class="table__td--registros"><?php echo $evento->nombre; ?></td>
                            <td class="table__td--registros"><?php echo $evento->categoria->nombre; ?></td>
                            <td class="table__td--registros"><?php echo $evento->ponente->nombre . ' ' . $evento->ponente->apellido; ?></td>
                            <td class="table__td--registros"><?php echo $evento->disponibles; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- .bloque -->

        <div class="bloque">
            <h3 class="bloque__heading">Eventos con Más Lugares Disponibles</h3>
            <table class="table">
                <thead class="table__thead--registros">
                    <tr class="table__tr--registros">
                        <th scope="col" class="table__th--registros">Nombre</th>
                        <th scope="col" class="table__th--registros">Categoria</th>
                        <th scope="col" class="table__th--registros">Speaker</th>
                        <th scope="col" class="table__th--registros">Disponibilidad</th>
                    </tr>
                </thead>
                <tbody class="table__tbody--registros">
                    <?php foreach($mas_disponibles as $evento): ?>
                        <tr class="table__tr--mas-disponibles ">
                            <td class="table__td--registros"><?php echo $evento->nombre; ?></td>
                            <td class="table__td--registros"><?php echo $evento->categoria->nombre; ?></td>
                            <td class="table__td--registros"><?php echo $evento->ponente->nombre . ' ' . $evento->ponente->apellido; ?></td>
                            <td class="table__td--registros"><?php echo $evento->disponibles; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!-- .bloque -->

    </div> <!-- .bloques__grid -->
</main> <!-- .bloques -->