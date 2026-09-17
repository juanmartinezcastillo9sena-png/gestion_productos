<?php
require_once __DIR__ . "/../models/proveedor.php";

class proveedoresController
{
    public function index()
    {

        $proveedorModel = new Proveedor();

        try {
            $proveedores = $proveedorModel->getAll();
        } catch (PDOException) {
            echo "Se encontraro errores";
        }
       
        try {
            $proveedorConsultado = $proveedorModel->getById(3);
        } catch (PDOException) {
            echo "Se encontraro errores";
        }



        require_once __DIR__ . "/../views/proveedores/index.php";
    }
}
