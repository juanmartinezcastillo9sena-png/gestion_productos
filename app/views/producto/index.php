<h1>Listado productos</h1>

<table border='1'>
    <tr>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($productos as $producto):?>
        <tr>
            <td><?= $producto["nombre"]?> </td>
            <td><?= $producto["precio"]?> </td>
            <td><?= $producto["categoria"]?> </td>
            <td><?= $producto["proveedor"]?> </td>
        </tr>
    <?php endforeach; ?>
</table>