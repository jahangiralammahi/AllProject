<html>
    <head>
        <title>Create Picture</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>Create Picture</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <form role="form" action="store.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Picture:</label>
                        <input type="file" id="name"  name="name">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html>

