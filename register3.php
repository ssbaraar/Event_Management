<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"ems");

$email = $_POST['a_email'];
$name = $_POST['a_name'];
$password = $_POST['password'];
$address = $_POST['address'];

$query = "SELECT COUNT(*) as count FROM admin WHERE a_email = '$email'";
$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

if($row['count'] == 0) {
    $query = "INSERT INTO admin(a_name,a_email,password,address) VALUES('$name','$email','$password','$address')";
    header("Location: index.php");
} else {
    header("Location: register4.php");
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
?>
