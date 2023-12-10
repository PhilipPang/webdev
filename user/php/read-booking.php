<?php

include('conn.php');
$user_id = $_SESSION['user_id'];
$booking_ID = $_POST['edit_info'];

//SQL Statement
$sql = "SELECT booking.*, technicians.* FROM (booking INNER join technicians ON booking.tech_ID = technicians.tech_ID) 
WHERE booking.user_ID = '$user_id' AND booking.booking_ID = '$booking_ID' ";

//Query data from database
$result = mysqli_query($conn, $sql);

//Check if has result
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
    //fetch data and set it to variable
    while($row = mysqli_fetch_assoc($result)){
        $booking_ID = $row['booking_ID'];
        $booking_date_time = $row['booking_date_time'];
        $booking_status = $row['booking_status'];
        $booking_title = $row['booking_title'];
        $booking_comment = $row['booking_comment'];
        $services_name = $row['services_name'];
        $created_at = $row['created_at'];
        $tech_email = $row['tech_email'];
        $tech_firstname = $row['tech_firstname'];
        $tech_lastname = $row['tech_lastname'];
        $tech_mobilenum = $row['tech_mobilenum'];
        $tech_age = $row['tech_age'];
        $tech_gender = $row['tech_gender'];
    }  
} 
else {
    echo "<script> alert('No record found');</script>";
}

?>