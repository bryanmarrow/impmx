<?php

$form='grupos';
$rootPath = "../";
$url=$rootPath."lang/lang_es.php";
include $url;
require($rootPath."config/dbconfig.php");
$titulo_page='Grupos'.' | ';

$title = isset($_GET['title'])? $_GET['title'] : $titulo_page.TITLE_EVENT;
$description = isset($_GET['description'])? $_GET['description'] : DESCRIPTION_EVENT;
$keywords = isset($_GET['keywords'])? $_GET['keywords'] : SEOTAGS_EVENT;
$author = isset($_GET['author'])? $_GET['author'] : "BMARROW";
$ogtitle = isset($_GET['ogtitle'])? $_GET['ogtitle'] : $titulo_page.TITLE_EVENT;
$ogdescription = isset($_GET['ogdescription'])? $_GET['ogdescription'] : DESCRIPTION_EVENT;
$ogimagen = isset($_GET['ogimagen'])? $_GET['ogimagen'] : IMAGE_EVENT;


require("../templates/header.php");
require("../pages/grupos.inc.php");
require("../templates/footer.php");



?>