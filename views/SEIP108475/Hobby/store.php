<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."AtomicProject".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");

use App\BITM\SEIP108475\Hobby\Hobby;
use App\BITM\SEIP108475\Message\Message;
use App\BITM\SEIP108475\Utility\Utility;

$obj = new Hobby();
//Utility::dd($_REQUEST);
$obj->prepare($_REQUEST)->store();
//print_r($_POST);
?>
