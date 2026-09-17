<h1>Listado de Proveedores</h1>

<?php if(!empty($proveedores)){ ?>
<table border="2">
    <tr>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Direccion</td>
    </tr>
    <?php foreach ($proveedores as $proveedor):?>
        <tr>
            <td><?= $proveedor['nombre']?> </td>
            <td><?= $proveedor['ciudad']?> </td>
            <td><?= $proveedor['direccion']?> </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php } else{ ?>
<p>No hay proveedores para mostrar</p>
<?php } ?>

<h2>Proveedor Consultado</h2>
<table border='1'>
    <tr>
        <td>Nombre</td>
        <td>Ciudad</td>
        <td>Direccion</td>
    </tr>
    <?php foreach($proveedorConsultado as $proveedor): ?>
        <tr>
            <td><?= $proveedor['nombre']?> </td>
            <td><?= $proveedor['ciudad']?> </td>
            <td><?= $proveedor['direccion']?> </td>
        </tr>
    <?php endforeach ?>
</table>