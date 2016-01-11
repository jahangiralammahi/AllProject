<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."AtomicProject".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");

use App\BITM\SEIP108475\MobileModel\MobileModel;
use App\BITM\SEIP108475\Message\Message;

$obj = new MobileModel();
//var_dump($_REQUEST);
//die();
$obj->prepare($_REQUEST)->store();
//print_r($_POST);
?>

