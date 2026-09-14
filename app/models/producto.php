<?php
require_once __DIR__ . "/../../config/Database.php";

class Producto{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        $sql="SELECT 
        p.id,
        p.nombre,
        p.precio,
        pr.nombre AS proveedor,
        ca.nombre AS categoria
        FROM producto p
        JOIN proveedores pr ON p.id_proveedor = pr.id
        JOIN categoria ca ON p.id_categoria= ca.id;";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByid($id)
    {
        $sql="SELECT 
        p.id,
        p.nombre,
        p.precio,
        pr.nombre AS proveedor,
        ca.nombre AS categoria
        FROM producto p
        JOIN proveedores pr ON p.id_proveedor = pr.id
        JOIN categoria ca ON p.id_categoria= ca.id;";
        $consulta=$this->connection->query($sql);
        
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
};

?>