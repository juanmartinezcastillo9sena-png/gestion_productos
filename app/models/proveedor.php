<?php
require_once __DIR__ . "/../../config/Database.php";

class Proveedor{
    private $connection;

    public function __construct()
    {
        $database=new Database();
        $this->connection = $database->conectar();
    }

    public function getAll()
    {
        try{
        $sql="SELECT * FROM proveedores";
        $consulta=$this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);

        }catch(PDOException){
            echo"Hay un error"; 
        }
        
    }

    public function getById($id)
    {
        $sql="SELECT * FROM proveedores WHERE id = :id";
        $consulta=$this->connection->prepare($sql);
        $consulta->bindParam(":id", $id);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
