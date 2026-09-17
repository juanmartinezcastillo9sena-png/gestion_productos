<?php
require_once __DIR__ . "/../models/proveedor.php";

class proveedoresController{
    public function index(){

        $proveedorModel=New Proveedor();

        $proveedores=$proveedorModel->getAll();

        $proveedorConsultado=$proveedorModel->getById(3);

        require_once __DIR__ . "/../views/proveedores/index.php";
    }
}
?>