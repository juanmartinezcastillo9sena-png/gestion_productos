<?php

class Database{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pwd;
    private $connection;

    public function __construct()
    {
        $env=parse_ini_file(__DIR__ . "/../.env");
        $this->host=$env['DB_HOST'];
        $this->port=['DB_PORT'];
        $this->dbname=['DB_NAME'];
        $this->user=['DB_USER'];
        $this->pwd=['DB_PWD']; 
    }

    public function conectar(){
        $dsn="mysql:host={$this->host};port={$this->port};dbname={$this->dbname}";

        $this->connection = new PDO($dsn, $this->user, $this->pwd);

        return $this->connection;
    }
}


?>