<html>
    <head>
        <title>Create Gender</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>Create Gender</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <form role="form" action="store.php" method="post">
                    <div class="form-group">
                        <div><label for="name">Gender:</label></div>
                        <div><input type="radio" id="name"  name="name[]" value="Male">Male</div>
                        <div><input type="radio" id="name"  name="name[]" value="Female">Female</div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html>

