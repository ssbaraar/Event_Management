<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    die('Error: Could not connect: ' . mysqli_error($connection));
}
$db = mysqli_select_db($connection,"ems");
if (!$db) {
    die('Error: Could not select database: ' . mysqli_error($connection));
}

$email = $_POST['c_email'];
$name = $_POST['c_name'];
$address = $_POST['c_address'];

$query = "SELECT COUNT(*) as count FROM caterers WHERE c_email = '$email'";
$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "INSERT INTO caterers(c_name,c_email,c_address) VALUES('$name','$email','$address')";
    header("Location: admin_dashboard.php");
} else {
    header("Location: caterer.php");
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>