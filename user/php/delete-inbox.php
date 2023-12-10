<?php
include("valid-session.php");
include('conn.php');
$user_id = $_SESSION['user_id'];


$booking_id = $_POST['delete-appt'];

$sql1 = "UPDATE inbox SET  inbox_read = '1' WHERE user_ID = '$user_id'";
$execva = $conn->query($sql1);
echo $execva;
header('Location: http://localhost/user/inbox.php');


?>