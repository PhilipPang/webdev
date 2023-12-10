<?php
include("valid-session.php");
include('conn.php');
$user_id = $_SESSION['user_id'];
$created_at = date("Y-m-d");

$booking_id = $_POST['cance-appt'];

$sql1 = "UPDATE booking SET  booking_status = 'Cancel' WHERE user_ID = '$user_id' AND booking_ID = '$booking_id ' ";
$sql2 = "INSERT into inbox (user_ID,  inbox_message, created_at, inbox_read) VALUE ('$user_id', 'You have cancel your booking, Appointment ID: $booking_id ', '$created_at', '0')";
$execva = $conn->query($sql1);
$execva1 = $conn->query($sql2);
echo $execva;
echo $execva1;
header('Location: http://localhost/user/success-cancel.php');


?>