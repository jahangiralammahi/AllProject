<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "AtomicProject" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

use App\BITM\SEIP108475\City\City;
use App\BITM\SEIP108475\Message\Message;
use App\BITM\SEIP108475\Utility\Utility;

//print_r($arr);
$obj = new City();
$obj = $obj->index();
//$obj->store();
?>
<html>
    <head>
        <title>List of Birthday</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1 class="text-success"><?php echo Message::flash(); ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>List Of Birthday</h1>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <div><span>Search / Filter </span> 
                    <span id="utility">Download as PDF | XL  <a href="create.php">Create New</a></span>
                    <select>
                        <option>10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>40</option>
                        <option>50</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6"> 
                <table class="table table-hover table-bordered table-responsive">
                    <tr>
                        <th>Sl.</th>
                        <th>City &dArr;</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <?php
                        $slno = 0;
                        foreach ($obj as $arrays):
                            $slno++;
                            ?>
                            <tr>
                                <td><?php echo $slno; ?></td>
                                <td><a href="show.php?id=<?php echo $arrays['id']; ?>"><?php echo $arrays['city']; ?></a></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $arrays['id']; ?>"><button class="btn btn-primary" type="submit">Edit</button></a>
                                    <input type="hidden" value="<?php echo $arrays['id']; ?>">
                                    <a href="delete.php?id=<?php echo $arrays['id']; ?>">
                                        <button class="delete btn btn-danger" type="submit">Delete</button>
                                    </a>
                                    <button class="btn btn-warning" type="submit">Trash/Recover </button>
                                    <button class="btn btn-success" type="submit">Email to Friend</button>
                                </td>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <span> prev  1 | 2 | 3 next </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="http://localhost/AtomicProject/index.php">Back using webroot</a>
                <a href="../../../index.php">Back using relative path</a> 
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script>
            $('document').ready(function (){
                $('.delete').bind('click',function(e){
                    
                    var isOk=confirm("Are you sure want to delete?");
                    if(!isOk){
                        e.preventDefault();
                    }
                });
                
            });
        </script>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html> 