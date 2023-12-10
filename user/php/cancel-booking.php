<?php
include("valid-session.php");
include('conn.php');
$user_id = $_SESSION['user_id'];
$created_at = date("Y-m-d");

$booking_id = $_POST['cance-appt'];

//SQL Statement
$sql = "SELECT * FROM booking  WHERE booking_ID = '$booking_id' ";
//Query data from database
$result = mysqli_query($conn, $sql);
//Check if has result
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
    //fetch data and set it to variable
    while($row = mysqli_fetch_assoc($result)){
        $tech_ID = $row['tech_ID'];
    }  
} 
else {
    echo "<script> alert('Unable to Find data');</script>";
}


$sql1 = "UPDATE booking SET  booking_status = 'Cancel' WHERE user_ID = '$user_id' AND booking_ID = '$booking_id ' ";
$sql2 = "INSERT into inbox (user_ID,  inbox_message, created_at, inbox_read) VALUE ('$user_id', 'You have cancel your booking, Appointment ID: $booking_id ', '$created_at', '0')";
$sql3 = "INSERT into inbox (tech_ID,  inbox_message, created_at, inbox_read) VALUE ('$tech_ID', 'A appointment has been cancel by user, Appointment ID: $booking_id ', '$created_at', '0')";
$execva = $conn->query($sql1);
$execva1 = $conn->query($sql2);
$execva2 = $conn->query($sql3);
echo $execva;
echo $execva1;
echo $execva2;
header('Location: http://localhost/user/success-cancel.php');


?>