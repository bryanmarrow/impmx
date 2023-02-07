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
define('DBimpmx', 'eurosonl_impmx2022');
define ('USERimpmx','eurosonl_btech');
define('PASSWORDimpmx', 'K%M$dqbV5z8q');
// define ('USERimpmx','root');
// define('PASSWORDimpmx', '');

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
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
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

define('FOLDER_SOLISTAS', '../comprobantes/solistas/' );
define('FOLDER_PAREJAS', '../comprobantes/parejas/' );
define('FOLDER_GRUPOS', '../comprobantes/grupos/' );
define('FOLDER_RESERVACION', '../comprobantes/reservacion/');
define('YEAR_EVENT', 2023);
define('NAME_EVENT', 'Imperio México');
define('EMAIL_EVENT_CONTACTO','info@imperiomexico.com.mx');
define('TAG_EVENT','#ImperioMéxico2023');
define('TITLE_EVENT', 'Imperio México 2023 - ¡El camino a la victoria!');
define('DESCRIPTION_EVENT', 'Mayo 18-21, 2023 Puebla, México | ¡Revolucionemos este Imperio!');
define('IMAGE_EVENT', 'https://imperiomexico.com.mx/assets/img/og_image_imperiomexico2023.png');
define('SEOTAGS_EVENT', 'salsa, bachata, imperio mexico, mexico, kizomba, campeonato salsa, congresos salsa');





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

function fechaEs($fecha) {
    $fecha = substr($fecha, 0, 10);
    $numeroDia = date('d', strtotime($fecha));
    $dia = date('l', strtotime($fecha));
    $mes = date('F', strtotime($fecha));
    $anio = date('Y', strtotime($fecha));
    $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
    $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    $nombredia = str_replace($dias_EN, $dias_ES, $dia);
    $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
    return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
}

$randalf=generate_string($permitted_chars, 4);
$tokenCompetidor=$randalf.$rand;



?>