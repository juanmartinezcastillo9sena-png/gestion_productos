<?php
require_once __DIR__ . "/../app/controllers/productoController.php";

$ProductoController = new productoController();
$ProductoController->index();
?>