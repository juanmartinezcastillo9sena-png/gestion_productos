<?php
require_once __DIR__ . "/../models/cliente.php";

class clienteController{
    public function index(){

    $clienteModel= new Cliente();

    $clientes=$clienteModel->getAll();

    $clienteConsultado=$clienteModel->getById(2);

    require_once __DIR__ . "/../views/cliente/index.php";
    }
};
?>