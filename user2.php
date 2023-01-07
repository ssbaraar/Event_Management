<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    die('Error: Could not connect: ' . mysqli_error($connection));
}
$db = mysqli_select_db($connection,"ems");
if (!$db) {
    die('Error: Could not select database: ' . mysqli_error($connection));
}

$email = $_POST['u_email'];
$name = $_POST['u_name'];
$address = $_POST['address'];

$query = "SELECT COUNT(*) as count FROM users WHERE u_email = '$email'";
$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "INSERT INTO users(u_name,u_email,address) VALUES('$name','$email','$address')";
    header("Location: admin_dashboard.php");
} else {
    header("Location: user.php");
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>