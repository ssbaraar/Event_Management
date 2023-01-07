<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create User</title>
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
    <div class="adminbox">
        <h2>Create an Event</h2>
        <br>
        <form method="POST" action="event2.php">
            <div class="form-group">    
                <label for="name">Event Name:</label>
                <input type="text" name="e_name" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Date:</label>
                <input type="text" name="e_date" class="form-control required" required >
            </div>
            <div class="form-group">    
                <label for="name">User ID:</label>
                <input type="text" name="user_id" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Venue ID:</label>
                <input type="text" name="venue_id" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Staff ID:</label>
                <input type="text" name="staff_id" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Caterer ID:</label>
                <input type="text" name="caterer_id" class="form-control required" required>
            </div>
            <div class="form-group">    
                <label for="name">Number Of Attendees:</label>
                <input type="number" name="no_of_attendees" class="form-control required" required>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    </div>
</body>
</html>