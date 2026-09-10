<?php
require_once __DIR__ . "/../app/controllers/productoController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/proveedoresController.php";
require_once __DIR__ . "/../app/controllers/categoriaController.php";

$ProductoController = new productoController();
$ProductoController->index();

$ClienteController=new clienteController();
$ClienteController->index();

$ProveedorController=new proveedoresController();
$ProveedorController->index();

$ProductoController = new productoController();
$ProductoController->index();

$CategoriaController=new categoriaController();
$CategoriaController->index()
?>