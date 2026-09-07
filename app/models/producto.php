<?php
require_once __DIR__ . "/../../config/Database.php";

class Producto{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->conectar();
    }

    public function getALL()
    {
        $sql="SELECT 
        p.id,
        p.nombre,
        p.precio,
        p.categoria,
        pr.nombre AS proveedor
        FROM producto p
        JOIN proveedores pr ON p.id_proveedor = pr.id;";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
};

?>