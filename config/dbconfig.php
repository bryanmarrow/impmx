<?php

define('HOST', 'localhost');
define('DB', 'eurosonl_elvdc2021');
define ('USER','eurosonl_btech');
define('PASSWORD', 'K%M$dqbV5z8q');

class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        // $this->charset = constant('CHARSET');
    }

    public function connect(){
        try{
            $connection= "mysql:host=" .$this->host. ";dbname=" .$this->db;
            $options=[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo= new PDO($connection, $this->user, $this->password, $options);
            echo "Conexión exitosa";
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo "Conexión fallida: " . $e->getMessage();
        }
    }

}

// Validar conexión a base de datos
$basededatos = new Database;

// Imperio México
define('emailadminimpx', 'info@imperiomexico.com.mx');
define('passwordadminimpx', 'Fexiaroga170330**');
define('emailsuperadmin', 'bryan.martinez.romero@gmail.com');


?>