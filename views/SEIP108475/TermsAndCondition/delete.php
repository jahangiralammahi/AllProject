<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"].DIRECTORY_SEPARATOR."AtomicProject".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");

use App\BITM\SEIP108475\TermsAndCondition\TermsAndCondition;
use App\BITM\SEIP108475\Utility\Utility;
use App\BITM\SEIP108475\Message\Message;

$obj = new TermsAndCondition();
//$obj=($_REQUEST);
//Utility::dd($obj);
$obj->delete($_REQUEST['id']);
//Utility::dd($_REQUEST['id']);