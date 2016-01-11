<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "AtomicProject" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

use App\BITM\SEIP108475\City\City;
use App\BITM\SEIP108475\Message\Message;
use App\BITM\SEIP108475\Utility\Utility;

$obj = new City();
$b = $obj->edit($_REQUEST['id']);
//Utility::dd($b);
?>

<html>
    <head>
        <title>Edit City</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>Edit City</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <form role="form" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $b->id; ?>">
                    <div class="form-group">
                        <label for="name">Edit City:</label>
                        <select name="name">
                            <option value="">--Select One--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Comilla">Comilla</option>
                            <!--<option value="Cox's Bazar">Cox's Bazar</option>-->
                        </select>
                        <!--<input type="text" class="form-control" id="name"  name="name" value="<?php echo $b->city; ?>">-->
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
            <nav>
                <a href="index.php">Go to list</a>
            </nav>
        </div>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html>

