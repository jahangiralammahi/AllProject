<?php
include_once '../../../vendor/autoload.php';

use App\BITM\SEIP108475\City\City;

$obj = new City();
//$obj=$obj->create();
$obj->create();
?>
<html>
    <head>
        <title>Create City</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>Create City</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <form role="form" action="store.php" method="post">
                    <div class="form-group">
                        <label for="name">Enter City:</label>
                        <select name="name">
                            <option value="">--Select One--</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Chittagong">Chittagong</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Cox's Bazar">Cox's Bazar</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html>
