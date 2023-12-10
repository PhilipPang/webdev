<?php

include "conn.php";
include("valid-session.php");
$user_id = $_SESSION['user_id'];

//get post data	
$booking_date = $_POST['ba-date-time'];
$service = $_POST['ba-service'];
$tittle = $_POST['ba-tittle'];
$comment = $_POST['ba-comment'];
$status = "Pending";
$created_at = date("Y-m-d");
$user_note = "0";
$tech_note = "0";

//set time
$parts = explode(" ", $booking_date);
$time = $parts[1];
$timeParts = explode(":", $time);
$hours = $timeParts[0];
$minutes = $timeParts[1];
$new_time = $hours . ':' . $minutes;

//convert date from ddmmyyyy to yyyymmdd
$parts = explode(" ", $booking_date);
$dateParts = explode(".", $parts[0]);
$year = $dateParts[2];
$month = $dateParts[1];
$day = $dateParts[0];
$newDate = "$year-$month-$day";

//final date
$date = $newDate . ' ' . $new_time;

//get currentdate
$currentDatetime = date('Y-m-d H:i:s');

//add 32 hour (24h + +8GMT(Malaysia time))
$datetime = new DateTime($currentDatetime);
$datetime->modify('+32 hours');
$newDateTime = $datetime->format('Y-m-d H:i');

//check if input lower then current date time
if ($date <= $newDateTime) {
    // date and time is in the past
    echo '<script>alert("Submitted date and time is in the past or today. Please select a future date");</script>';
	header('Location: http://localhost/user/error.php');
}
 else {
	$query = "INSERT into booking(user_ID, booking_date_time, booking_status, booking_title, booking_comment, services_name, created_at, user_cancel_note, tech_cancel_note) values('$user_id', '$date', '$status', '$tittle', '$comment', '$service', '$created_at', '$user_note' , '$tech_note' )";
	$execval = $conn->query($query);
	$query2 = "INSERT into inbox(user_ID, inbox_message, created_at, inbox_read) values('$user_id', 'You have requested service: $service', '$created_at', '0')";
	$execval2 = $conn->query($query2);
	echo $execval;
	echo $execva2;
	echo '<script>alert("Booking was made");</script>';
	$conn->close();
	header('Location: http://localhost/user/success.php');

	}




?>
