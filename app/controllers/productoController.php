<?php
require_once __DIR__ . "/../models/producto.php";

class productoController
{
    public function index()
    {

        $productoModel = new Producto();

        try {
            $productos = $productoModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        try {
            $productoConsultado = $productoModel->getByid(1);
        } catch (PDOException) {
            echo "Se encontraron errores";
        }




        require_once __DIR__ . "/../views/producto/index.php";
    }
}
