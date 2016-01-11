<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "AtomicProject" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

use App\BITM\SEIP108475\MobileModel\MobileModel;
use App\BITM\SEIP108475\Message\Message;
use App\BITM\SEIP108475\Utility\Utility;

$obj = new MobileModel();
$b = $obj->show($_GET['id']);
//Utility::dd($b);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <table class="table table-bordered table-hover table-responsive table-striped text-center">
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Model</th>
                </tr>
                <tr>
                    <td><?php echo $b->id ?></td>
                    <td><?php echo $b->name ?></td>
                    <td><?php echo $b->model ?></td>
                </tr>
            </table>
            <nav>
                <a href="index.php">Go to list</a>
            </nav>
        </div>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
