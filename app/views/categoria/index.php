<h1>Categorias</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Descripcion</td>
    </tr>
    <?php foreach($categorias as $categoria):?>
        <tr>
            <td><?= $categoria['id'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>
    <?php endforeach ?>
</table>