<?php
require_once __DIR__ . "/../models/producto.php";

class productoController{
    public function index(){

        $productoModel= new Producto();

        $productos=$productoModel->getAll();
        
        $productoConsultado = $productoModel->getByid(2);

        require_once __DIR__ . "/../views/producto/index.php";
    }

       
}
?>