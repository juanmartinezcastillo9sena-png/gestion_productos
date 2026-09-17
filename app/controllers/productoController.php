<?php
require_once __DIR__ . "/../models/producto.php";

class productoController{
    public function index(){

        $productoModel= new Producto();

        $productos=$productoModel->getAll();
        
        $productoConsultado = $productoModel->getByid(1);

        require_once __DIR__ . "/../views/producto/index.php";
    }

       
}
?>