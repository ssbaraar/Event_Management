<?php
$connection = mysqli_connect("localhost","root","");
if (!$connection) {
    die('Error: Could not connect: ' . mysqli_error($connection));
}
$db = mysqli_select_db($connection,"ems");
if (!$db) {
    die('Error: Could not select database: ' . mysqli_error($connection));
}


$name = $_POST['e_name'];
$venue_id = $_POST['venue_id'];
$date = $_POST['e_date'];
$user_id = $_POST['user_id'];
$staff_id = $_POST['staff_id'];
$caterer_id = $_POST['caterer_id'];
$no_of_attendees = $_POST['$no_of_attendees'];



$query = "SELECT COUNT(*) as count 
FROM caterers, venue , staff , events , users 
WHERE users.user_id= '$user_id' 
AND venue.venue_id = '$venue_id'
AND staff.staff_id = '$staff_id'
AND caterers.caterer_id = '$caterer_id'
AND users.user_id IN (SELECT user_id FROM users)
AND staff.staff_id IN (SELECT staff_id FROM staff)
AND caterers.caterer_id IN (SELECT caterer_id FROM caterers)
AND venue.venue_id IN (SELECT venue_id FROM venue)
AND ((e_date NOT IN (SELECT e_date FROM events)) OR (venue.venue_id NOT IN (SELECT venue.venue_id FROM venue)))
AND ((e_date NOT IN (SELECT e_date FROM events)) OR (staff.staff_id NOT IN (SELECT staff.staff_id FROM staff)))
AND ($no_of_attendees <= (venue.capacity FROM venue ))
";

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

print_r($row);

if($row['count'] == 0) {
    $query = "INSERT INTO manager(venue_id,m_name,m_email) VALUES('$venue_id','$name','$email')";
    header("Location: admin_dashboard.php");
} else {
    header("Location: manager.php");
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>
