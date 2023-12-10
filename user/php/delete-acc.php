<?php
session_start();
include("conn.php");
include("valid-session.php");
$user_id = $_SESSION['user_id'];
$created_at = date("Y-m-d");

$sql2 = "INSERT into inbox (admin_ID,  inbox_message, created_at, inbox_read) VALUE ('1', 'An Account has been deleted by it own user UserID: $user_id', '$created_at', '0')";
$execva1 = $conn->query($sql2);
$sql = "DELETE FROM users WHERE user_ID = $user_id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: http://localhost');
exit;


?>