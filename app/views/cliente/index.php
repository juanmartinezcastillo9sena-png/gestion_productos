<h1>Listado Clientes</h1>

<?php if (!empty($clientes)) { ?>
    <table border="2">
        <tr>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Correo</th>
            <th>Telefono</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente["nombre"] ?></td>
                <td><?= $cliente["documento"] ?></td>
                <td><?= $cliente["correo"] ?></td>
                <td><?= $cliente["telefono"] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
<?php } else { ?>
    <p>No hay clientes para mostrar</p>
<?php } ?>

<h2>Cliente Consultado</h2>

<table border="1">
    <tr>
        <td>Nombre</td>
        <td>Documento</td>
        <td>Correo</td>
        <td>Telefono</td>
    </tr>
    <?php foreach ($clienteConsultado as $cliente): ?>
        <tr>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['documento'] ?></td>
            <td><?= $cliente['correo'] ?></td>
            <td><?= $cliente['telefono'] ?></td>
        </tr>
    <?php endforeach ?>
</table>