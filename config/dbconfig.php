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
            // echo "Conexión exitosa";
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


// Base de datos Imperio México 2022
define('HOSTimpmx', 'localhost');
define('DBimpmx', 'impmx_2022');
// define ('USER','eurosonl_btech');
// define('PASSWORD', 'K%M$dqbV5z8q');
define ('USERimpmx','root');
define('PASSWORDimpmx', '');

class DatabaseImperioMexico{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant('HOSTimpmx');
        $this->db = constant('DBimpmx');
        $this->user = constant('USERimpmx');
        $this->password = constant('PASSWORDimpmx');
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
            // echo "Conexión exitosa";
            return $pdo;
        }
        catch(PDOException $e)
        {
            echo "Conexión fallida: " . $e->getMessage();
        }
    }

}

// Validar conexión a base de datos
$basededatosimpmx = new DatabaseImperioMexico;

// Imperio México
define('emailadminimpx', 'info@imperiomexico.com.mx');
define('passwordadminimpx', 'Fexiaroga170330**');
define('emailsuperadmin', 'bryan.martinez.romero@gmail.com');

define ('FOLDER_SOLISTAS', '../comprobantes/solistas/' );



$rand=rand(1000, 9000);
$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}


$randalf=generate_string($permitted_chars, 4);
$tokenCompetidor=$randalf.$rand;



?>