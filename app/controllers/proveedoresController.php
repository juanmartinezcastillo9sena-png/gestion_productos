<?php
require_once __DIR__ . "/../models/proveedor.php";

class proveedoresController{
    public function index(){

        $proveedorModel=New Proveedor();

        $proveedores=$proveedorModel->getAll();

        require_once __DIR__ . "/../views/proveedores/index.php";
    }
}
?>