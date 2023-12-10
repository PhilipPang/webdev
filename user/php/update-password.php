<?php

include("conn.php");
include("valid-session.php");
$user_id = $_SESSION['user_id'];

$password = $_POST['acc-password-2'];

$sql = "UPDATE users SET user_passwrd = '$password'  WHERE user_ID = '$user_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
    header('Location: http://localhost/user/security.php');


?>