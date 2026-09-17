<h1>Categorias</h1>
<table border="2">
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

<h2>Categoria Consultada</h2>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nombre</td>
        <td>Descripcion</td>
    </tr>
    <?php foreach($categoriaConsultada as $categoria): ?>
        <tr>
            <td><?= $categoria['id'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>
    <?php endforeach ?>    
</table>