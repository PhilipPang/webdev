<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: http://localhost/login.php');
  session_write_close();
  exit;
}
?>