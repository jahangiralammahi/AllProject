<?php

namespace App\BITM\SEIP108475\Birthday;

use App\BITM\SEIP108475\Utility\Utility;
use App\BITM\SEIP108475\Message\Message;

class Birthday {

    public $id = "";
    public $title = "";
    public $name = "";
    public $model = "";
    public $created = "";
    public $created_by = "";
    public $modified_by = "";
    public $deleted_at = "";

//    public function __construct($data =  array() ) {
//        
//        if (is_array($data) && array_key_exists('name', $data)){
//        $this->name=$data['name'];
//        $this->model=$data['model'];
//        }
//      
//    }

    public function index() {
        $arr = array();
        $con = mysql_connect("localhost", "root")or die("Mysql not connected");
        $dd = mysql_select_db('atomic_project');
        $q = "SELECT * FROM `birthday`";

        $result = mysql_query($q);
        while ($row = mysql_fetch_assoc($result)) {
            $arr[] = $row;
        }
//         print_r($arr);
        return $arr;
    }

    public function create() {
        
    }

    public function store() {
        $conn = mysql_connect("localhost", "root")or die("Mysql not connected");
        $db = mysql_select_db('atomic_project');
        $query = "INSERT INTO `atomic_project`.`birthday` (`id`,`birthday`) VALUES (NULL,'$this->name')";

        if (mysql_query($query)) {
            Message::set('Data Insert successfully');
        } else {
            Message::set('Here is an error.Data Not Inserted');
        }
        Utility::redirect('index.php');
    }

    public function show($id = '') {
        if (is_null($id)) {
            return;
        }
        $con = mysql_connect("localhost", "root")or die("Mysql not connected");
        $dd = mysql_select_db('atomic_project');
        $q = "SELECT * FROM `birthday` where `id`='$id'";

        $query = mysql_query($q);

        $result = mysql_fetch_object($query);
//        Utility::dd($result);
        return $result;
    }

    public function edit($id = '') {
        if (is_null($id)) {
            return;
        }
        $con = mysql_connect("localhost", "root")or die("Mysql not connected");
        $dd = mysql_select_db('atomic_project');
        $q = "SELECT * FROM `birthday` where `id`='$id'";

        $query = mysql_query($q);

        $result = mysql_fetch_object($query);
//        Utility::dd($result);
        return $result;
    }

    public function update($id = '') {
        if (is_null($id)) {
            return;
        }
        $conn = mysql_connect("localhost", "root")or die("Mysql not connected");
        $db = mysql_select_db('atomic_project');
        $query = "UPDATE `atomic_project`.`birthday` SET  `birthday` = '$this->name' WHERE `birthday`.`id` = $this->id;";
//        Utility::p($query);
//        Utility::d($query);
        if (mysql_query($query)) {
            Message::set('Data Updated successfully');
        } else {
            Message::set('Here is an error.Data Not updated');
        }
        Utility::redirect('index.php');
    }

    public function delete($id = '') {
        if (is_null($id)) {
            return;
        }
        $con = mysql_connect("localhost", "root")or die("Mysql not connected");
        $dd = mysql_select_db('atomic_project');
        $q = "DELETE FROM `atomic_project`.`birthday` WHERE `birthday`.`id` = $id";

        if (mysql_query($q)) {
            Message::set('Data Deleted successfully');
        } else {
            Message::set('Here is an error.Data Not Deleted');
        }
        Utility::redirect('index.php');

//        Utility::dd($result);
    }

    public function prepare($data = array()) {
        if (is_array($data) && array_key_exists('name', $data)) {

            $this->name = $data['name'];
            $this->model = $data['model'];

            if (array_key_exists('id', $data) && !empty($data['id'])) {
                $this->id = $data['id'];
            }
        }
        return $this;
    }

}
