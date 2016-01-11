<?php
//session_start();
namespace App\BITM\SEIP108475\Message;

class Message {
    static public function set($message=""){
        $_SESSION['message']=$message;
    }
    static public function get($message=""){
       return $_SESSION['message'];
    }
    static public function flash($message=""){
       $message=$_SESSION['message'];
       $_SESSION['message']="";
       return $message;
    }
}