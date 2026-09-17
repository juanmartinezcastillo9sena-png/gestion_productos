<?php
require_once __DIR__ . "/../../config/Database.php";

class Categoria{
    private $connection;

    public function __construct()
    {
        $database=new Database();
        $this->connection=$database->conectar();
    }

    public function getAll(){
        try{$sql="SELECT * FROM categoria";
        $consulta=$this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch(PDOException){
            echo "Se entraron errores";
        }
        
    }

    public function getByid($id){
    $sql="SELECT * FROM categoria WHERE id = :id";
    $consulta=$this->connection->prepare($sql);
    $consulta->bindParam(":id", $id);
    $consulta->execute();

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>