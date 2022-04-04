<?php

$title = isset($_GET['title'])? $_GET['title'] : "Imperio México 2022 - ¡El camino a la victoria!";
$description = isset($_GET['description'])? $_GET['description'] : "Mayo 19-21, 2022 Puebla, México | ¡Revolucionemos este Imperio!";
$keywords = isset($_GET['keywords'])? $_GET['keywords'] : "salsa, bachata, imperio mexico, mexico, kizomba, campeonato salsa, congresos salsa";
$author = isset($_GET['author'])? $_GET['author'] : "BMARROW";
$ogtitle = isset($_GET['ogtitle'])? $_GET['ogtitle'] : "Imperio México 2022 - ¡El camino a la victoria!";
$ogdescription = isset($_GET['ogdescription'])? $_GET['ogdescription'] : "Mayo 19-21, 2022 Puebla, México | ¡Revolucionemos este Imperio!";
$ogimagen = isset($_GET['ogimagen'])? $_GET['ogimagen'] : "https://eurosonlatino.com.mx/mail/og-image-elwsc2021.jpg";


$rootPath = "./";
require($rootPath."config/dbconfig.php");
require("templates/header.php");
require("pages/index.inc.php");
require("templates/footer.php");



?>