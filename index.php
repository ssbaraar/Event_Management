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
    <div class="loginbox">
        <h2>Login</h2>
        <br>
        <form method="POST" action="">
            <div class="form-group">    
                <label for="name">Email:</label>
                <input type="email" name="a_email" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Password:</label>
                <input type="password" name="password" class="form-control required" required>
            </div>
            <br>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
        <div class="pt-3">
            <small class="text-muted">
                New User? <a href="register.php">Register</a>
            </small>
        </div>
        <?php
            session_start();
            if(isset($_POST['login'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"ems");
                $query = "select * from admin where a_email = '$_POST[a_email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['a_email'] == $_POST['a_email']){
                        if($row['password'] == $_POST['password']){
                            $_SESSION['a_name'] = $row['a_name'];
                            $_SESSION['a_email'] = $row['a_email'];
                            header("Location:admin_dashboard.php");
                        }
                        else{
                            ?>
                            <br><br><center><span class="alert-danger">Wrong Password</span></center>
                            <?php
                        }
                    }
                }
            }
        ?>
    </div>
    </div>
</body>
</html>