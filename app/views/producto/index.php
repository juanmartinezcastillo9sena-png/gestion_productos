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
        </tr>
        <tr>
            <td><?= $productoConsultado['ID']; ?></td>
            <td><?= $productoConsultado['nombre']; ?></td>
            <td><?= $productoConsultado['precio']; ?></td>
        </tr>
</table>
