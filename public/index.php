<?php
require_once __DIR__ . "/../app/controllers/productoController.php";
require_once __DIR__ . "/../app/controllers/clienteController.php";

$ProductoController = new productoController();
$ProductoController->index();

$ClienteController=new clienteController();
$ClienteController->index();
?>