<?php
session_start();
include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "AtomicProject" . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php");

use App\BITM\SEIP108475\MobileModel\MobileModel;
use App\BITM\SEIP108475\Message\Message;
use App\BITM\SEIP108475\Utility\Utility;

$obj = new MobileModel();
$b = $obj->edit($_REQUEST['id']);
//Utility::dd($b);
?>

<html>
    <head>
        <title>Edit Mobile Model</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>Edit mobile</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <form role="form" action="update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $b->id; ?>">
                    <div class="form-group">
                        <label for="name">Edit Mobile Name:</label>
                        <input type="text" class="form-control" id="name"  name="name" value="<?php echo $b->name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="model">Edit Mobile Model:</label>
                        <input type="text" class="form-control" id="model"  name="model" value="<?php echo $b->model; ?>">
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