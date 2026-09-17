<?php
require_once __DIR__ . "/../models/cliente.php";

class clienteController
{
    public function index()
    {

        $clienteModel = new Cliente();

        try {
            $clientes = $clienteModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        try {
            $clienteConsultado = $clienteModel->getById(2);
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/cliente/index.php";
    }
};
