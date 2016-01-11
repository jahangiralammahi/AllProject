<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."AtomicProject".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");

use App\BITM\SEIP108475\ProfilePicture\ProfilePicture;
use App\BITM\SEIP108475\Utility\Utility;

$obj = new ProfilePicture();
//Utility::dd($_FILES);
$obj->prepare($_FILES)->store();


//echo $name=$_FILES['type'];
//print_r($obj);
?>

