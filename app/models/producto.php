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
        try{
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
        } catch(PDOException){
            echo "Ocurrio un error";
        }

    }

    public function getByid($id)
    {
        $sql="SELECT * FROM producto WHERE id = :id";
        $consulta=$this->connection->prepare($sql);
        $consulta->bindParam(":id",$id);
        $consulta->execute();
        
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
};

?>