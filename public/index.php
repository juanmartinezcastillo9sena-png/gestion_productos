<?php
require_once __DIR__ . "/../app/controllers/productoController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";
require_once __DIR__ . "/../app/controllers/proveedoresController.php";

$ProductoController = new productoController();
$ProductoController->index();

$ClienteController=new clienteController();
$ClienteController->index();

$ProveedorController=new proveedoresController();
$ProveedorController->index();

$ProductoController = new productoController();
if (isset($_GET['id'])) {
    $ProductoController->show($_GET['id']);
} else {
    $ProductoController->index();
}
?>