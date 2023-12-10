<?php

include("conn.php");
include("valid-session.php");
$user_id = $_SESSION['user_id'];


//SQL Statement
$sql = "SELECT * FROM users WHERE user_ID = '$user_id'";
//Query data from database
$result = mysqli_query($conn, $sql);
//Check if has result
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0){
    //fetch data and set it to variable
    while($row = mysqli_fetch_assoc($result)){
        $age = $row['user_age'];
        $phone = $row['user_mobilenum'];
        $address = $row['user_addressline'];
        $city = $row['user_city'];
        $state = $row['user_state'];
        $postcode = $row['user_poscode'];
        $profilepic = $row['user_profilepic'];
    }  
} 
else {
    echo "<script> alert('Unable to Find data');</script>";
}

if (empty($_POST['acc-phone'])) {
	$fphone = $phone;
  } else {
	$fphone = $_POST['acc-phone'];
}

if (empty($_POST["acc-age"])) {
	$fage = $age;
  } else {
	$fage = $_POST["acc-age"];
}

if (empty($_POST["acc-state"])) {
	$fstate = $state;
  } else {
	$fstate = $_POST["acc-state"];
}

if (empty($_POST["acc-zipcode"])) {
	$fpostcode= $postcode;
  } else {
	$fpostcode = $_POST["acc-zipcode"];
}

if (empty($_POST["acc-city"])) {
	$fcity = $city;
  } else {
	$fcity = $_POST["acc-city"];
}

if (empty($_POST["acc-address"])) {
	$faddress = $address;
  } else {
	$faddress = $_POST["acc-address"];
}

if (!empty($_FILES["acc-pfpic"])) {
  $image = $_FILES['acc-pfpic']['tmp_name'];
  $fprofilepic  = base64_encode(file_get_contents(addslashes($image)));
  } else {
  $fprofilepic = $profilepic;

}
  

$sql = "UPDATE users SET user_age = '$fage' , user_mobilenum = '$fphone', user_addressline = '$faddress', user_city = '$fcity', user_state = '$fstate', user_poscode = '$fpostcode', user_profilepic = '$fprofilepic ' WHERE user_ID = '$user_id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
    header('Location: http://localhost/user/dashboard.php');


?>