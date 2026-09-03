<?php
require_once __DIR__ . "/../models/producto.php";

class productoController{
    public function index(){

        $productoModel= new Producto();

        $productos=$productoModel->getAll();

        require_once __DIR__ . "/../views/index.php";
    }
}
?>