<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Management</title>
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
        <h2>Register</h2>
        <br>
        <form method="POST" action="register3.php">
            <div class="form-group">    
                <label for="name">Name:</label>
                <input type="text" name="a_name" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Email:</label>
                <input type="email" name="a_email" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Password:</label>
                <input type="password" name="password" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Address:</label>
                <input type="text" name="address" class="form-control required" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="pt-3">
            <small class="text-muted">
                Account Already Exists? <a href="index.php">Login</a>
            </small>
        </div>
    </div>
    </div>
</body>
</html>