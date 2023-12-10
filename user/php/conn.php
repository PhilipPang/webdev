<?php
$conn = mysqli_connect("localhost", "apu_webdev", "apu_webdev", "apu_webdev");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL" . mysqli_connect_error();
}
?>