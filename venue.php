<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Venue</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">EVENT MANAGEMENT</a>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="registerbox">
        <h2>Add Venue</h2>
        <br>
        <form method="POST" action="venue2.php">
            <div class="form-group">    
                <label for="name">Name:</label>
                <input type="text" name="v_name" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Address:</label>
                <input type="text" name="v_address" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Capacity:</label>
                <input type="text" name="capacity" class="form-control required" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    </div>
</body>
</html>