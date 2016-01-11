<html>
    <head>
        <title>Create Hobby</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../../Resource/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <h1>Create Hobby</h1>  
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4">
                <form role="form" action="store.php" method="post">
                    <div class="form-group">
                        <label for="name">Select Hobby:</label>
                        <div class="checkbox">
                            <label><input type="checkbox"  id="hobby" name="name[]" value="Reading">Reading</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"  name="name[]" value="Fishing">Fishing </label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"  name="name[]" value="Sports">Sports</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
        <script src="../../../Resource/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </body>
</html>

