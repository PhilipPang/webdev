<?php
include("valid-session.php");
include('conn.php');
$user_id = $_SESSION['user_id'];


$booking_id = $_POST['delete-appt'];

$sql1 = "UPDATE booking SET  user_cancel_note = '1' WHERE user_ID = '$user_id' AND booking_ID = '$booking_id ' ";
$execva = $conn->query($sql1);
echo $execva;
header('Location: http://localhost/user/cancel.php');


?>