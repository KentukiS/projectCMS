<?php session_start();
define("INDEX", ""); // УСТАНОВКА КОНСТАНТЫ ГЛАВНОГО КОНТРОЛЛЕРА

require_once($_SERVER[DOCUMENT_ROOT]."/cfg/core.php"); // ПОДКЛЮЧЕНИЕ ЯДРА

// ПОДКЛЮЧЕНИЕ К БД
$db = new MyDB();
$db->connect();
 
// ГЛАВНЫЙ КОНТРОЛЛЕР
switch ($_GET[option]) {
case "page":
include($_SERVER[DOCUMENT_ROOT]."/com/page.php");
include ($_SERVER[DOCUMENT_ROOT]."/templates/pageTemplate.php");
break;
default:
include($_SERVER[DOCUMENT_ROOT]."/com/home.php");
include($_SERVER[DOCUMENT_ROOT]."/templates/mainTemplate.php");
break;
}

$db->close();