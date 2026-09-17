<?php
require_once __DIR__ . "/../models/categoria.php";

class CategoriaController
{
    public function index()
    {

        $categoriaModel = new Categoria();

        try {
            $categorias = $categoriaModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        try {
            $categoriaConsultada = $categoriaModel->getById(1);
        } catch (PDOException) {
            echo "Se encontraron errores";
        }


        require_once __DIR__ . "/../views/categoria/index.php";
    }
}
