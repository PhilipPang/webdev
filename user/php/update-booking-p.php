<?php
include("valid-session.php");
include("conn.php");


$user_id = $_SESSION['user_id'];
$booking_id = $_POST['booking_id'];
$current_date = date("Y-m-d");

//SQL Statement
$sql = "SELECT booking.*, technicians.* FROM (booking INNER join technicians ON booking.tech_ID = technicians.tech_ID) WHERE booking.user_ID = '$user_id' AND booking.booking_ID = '$booking_id' ";

//Query data from database
$result = mysqli_query($conn, $sql);

//Check if has result
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
    //fetch data and set it to variable
    while($row = mysqli_fetch_assoc($result)){
        $booking_ID = $row['booking_ID'];
        $booking_date_time = $row['booking_date_time'];
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
    echo "<script> alert('Unable to Find data');</script>";
}


if (empty($_POST['ba-tittle'])) {
	$fba_tittle = $booking_title;
  } else {
	$fba_tittle= $_POST['ba-tittle'];
}

if (empty($_POST["ba-comment"])) {
	$fba_comment = $booking_comment;
  } else {
	$fba_comment = $_POST["ba-comment"];
}

if (empty($_POST["ba-date-time"])) {
	$fba_datetime = $booking_date_time;
	$sql3 = "UPDATE booking SET booking_title = '$fba_tittle' , booking_comment = '$fba_comment' WHERE user_ID = '$user_id' AND booking_ID = '$booking_id ' ";
	$sql4 = "INSERT into inbox(user_ID, inbox_message, created_at, inbox_read) values('$user_id', 'You has update your information for Appointment ID: $booking_id', '$current_date', '0')";
	$execva3 = $conn->query($sql3);
	$execva4 = $conn->query($sql4);
	echo $execva3;
	echo $execva4;
	echo '<script>alert("Done");</script>';
	header('Location: http://localhost/user/success-edit.php');
} else {
	$fba_datetime = $_POST["ba-date-time"];
	//set time
	$parts = explode(" ", $fba_datetime);
	$time = $parts[1];
	$timeParts = explode(":", $time);
	$hours = $timeParts[0];
	$minutes = $timeParts[1];
	$new_time = $hours . ':' . $minutes;

	//convert date from ddmmyyyy to yyyymmdd
	$parts = explode(" ", $fba_datetime);
	$dateParts = explode(".", $parts[0]);
	$year = $dateParts[2];
	$month = $dateParts[1];
	$day = $dateParts[0];
	$newDate = "$year-$month-$day";

	//final date
	$date = $newDate . ' ' . $new_time;
	//valid date

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
		header('Location: http://localhost/user/error-edit.php');
	} else {
		if ($date != $booking_date_time) {
			$sql1 = "UPDATE booking SET booking_title = '$fba_tittle' , booking_comment = '$fba_comment', booking_date_time = '$date' WHERE user_ID = '$user_id' AND booking_ID = '$booking_id' ";
			$sql2 = "INSERT into inbox(user_ID, inbox_message, created_at, inbox_read) values('$user_id', 'You has update your booking time for Appointment ID: $booking_id, You require to wait technician accept it', '$current_date', '0')";
			$execva = $conn->query($sql1);
			$execva2 = $conn->query($sql2);
			echo $execva;
			echo $execva2;
			echo '<script>alert("Done with time");</script>';
			header('Location: http://localhost/user/success-edit.php');
		}
	}
}

echo $fba_datetime;


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}


?>
