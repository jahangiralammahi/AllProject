<?php

namespace App\BITM\SEIP108475\ProfilePicture;

use App\BITM\SEIP108475\Utility\Utility;
use App\BITM\SEIP108475\Message\Message;

class ProfilePicture {

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
        $q = "SELECT * FROM `picture`";

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
//        print_r ($picture);

        $picture_name = $this->name['name'];
        $picture_type = $this->name['type'];
        $picture_tmp_name = $this->name['tmp_name'];
//        Utility::dd($picture_type);
//        $picture_name=$picture['name'];
//        $picture_type=$picture['type'];
//        $picture_size=$picture['size'];
//        $picture_tmp_name=$picture['tmp_name'];

        copy($picture_tmp_name, "images/profile/$picture_name");
//        var_dump($hobby);
//        $hobbys=implode(",", $hobby);
        $conn = mysql_connect("localhost", "root")or die("Mysql not connected");
        mysql_select_db('atomic_project');
        $q = "INSERT INTO `atomic_project`.`picture` (`id`, `picture`) VALUES (NULL, '$picture_name')";
        if (mysql_query($q)) {
            Message::set('Picture insert successfully');
        } else {
            Message::set('Here is an error.Picture Not Inserted');
        }
        Utility::redirect('index.php');
    }

    public function show($id = '') {
        if (is_null($id)) {
            return;
        }
        $con = mysql_connect("localhost", "root")or die("Mysql not connected");
        $dd = mysql_select_db('atomic_project');
        $q = "SELECT * FROM `picture` where `id`='$id'";

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
        $q = "SELECT * FROM `picture` where `id`='$id'";

        $query = mysql_query($q);

        $result = mysql_fetch_object($query);
//        Utility::dd($result);
        return $result;
    }

    public function update($id = '') {
        if (is_null($id)) {
            return;
        }
        $picture_name = $this->name;
//        die();
//        Utility::dd($picture_name);
        $picture_type = $this->name['type'];
        $picture_tmp_name = $this->name['tmp_name'];
//        Utility::dd($picture_type);
//        $picture_name=$picture['name'];
//        $picture_type=$picture['type'];
//        $picture_size=$picture['size'];
//        $picture_tmp_name=$picture['tmp_name'];

        copy($picture_tmp_name, "images/profile/$picture_name");
        
        $conn = mysql_connect("localhost", "root")or die("Mysql not connected");
        $db = mysql_select_db('atomic_project');
        $query = "UPDATE `atomic_project`.`picture` SET  `picture` = '$this->name' WHERE `picture`.`id` = $this->id;";
//        Utility::p($query);birthday
//        Utility::d($query);
        if (mysql_query($query)) {
            Message::set('Picture Updated successfully');
        } else {
            Message::set('Here is an error.Picture Not updated');
        }
        Utility::redirect('index.php');
    }

    public function delete($id = '') {
        if (is_null($id)) {
            return;
        }
        $con = mysql_connect("localhost", "root")or die("Mysql not connected");
        $dd = mysql_select_db('atomic_project');
        $q = "DELETE FROM `atomic_project`.`picture` WHERE `picture`.`id` = $id";

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
//Utility::dd($this->name);
            $this->name = $data['name'];
//            $this->model = $data['model'];

            if (array_key_exists('id', $data) && !empty($data['id'])) {
                $this->id = $data['id'];
            }
        }
        return $this;
    }

}
