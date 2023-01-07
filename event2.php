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
$no_of_attendees = $_POST['no_of_attendees'];



$query = "SELECT COUNT(*) as count 
FROM events e, venue v
JOIN users u ON u.user_id = '$user_id'
WHERE e.venue_id NOT IN (SELECT venue_id FROM venue)
AND e.staff_id NOT IN (SELECT staff_id FROM staff)
AND e.caterer_id NOT IN (SELECT caterer_id FROM caterers)
AND (e.e_date, e.venue_id) IN (SELECT e_date, venue_id FROM events GROUP BY e_date, venue_id HAVING COUNT(*) = 1) 
AND (e.e_date, e.staff_id) IN (SELECT e_date, staff_id FROM events GROUP BY e_date, staff_id HAVING COUNT(*) = 1)
AND '$no_of_attendees' <= (SELECT capacity FROM venue WHERE v.venue_id = '$venue_id')
GROUP BY e.event_id





";

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}
$row = mysqli_fetch_assoc($result);

print_r($row);

if($row['count'] == 0) {
    $query = "INSERT INTO events(e_name, e_date, venue_id, staff_id, caterer_id, no_of_attendees) VALUES('$name', '$date', '$venue_id', '$staff_id', '$caterer_id', '$no_of_attendees')";
    header("Location: admin_dashboard.php");
} else {
    header("Location: event.php");
}

$result = mysqli_query($connection, $query);
if($result === FALSE) {
    die('Error: ' . mysqli_error($connection));
}

mysqli_close($connection);
?>
