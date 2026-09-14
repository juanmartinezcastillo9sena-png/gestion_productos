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

<h1>Producto Consultado</h1>
<table border="1">
        <tr>
            <td>ID</td>
            <td>Nombre</td>
            <td>Precio</td>
            <td>Proveedor</td>
            <td>Categoria</td>
        </tr>
        <?php foreach ($productoConsultado as $producto):?>
        <tr>
            <td><?= $producto['ID']; ?></td>
            <td><?= $producto['nombre']; ?></td>
            <td><?= $producto['precio']; ?></td>
        </tr>
        <?php endforeach; ?>
</table>
