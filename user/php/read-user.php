<?php

include("conn.php");
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
        $user_ID = $row['user_ID'];
        $email = $row['user_email'];
        $password = $row['user_passwrd'];
        $firstname = $row['user_firstname'];
        $lastname = $row['user_lastname'];
        $age = $row['user_age'];
        $gender = $row['user_gender'];
        $phone = $row['user_mobilenum'];
        $ic = $row['user_icnum'];
        $address = $row['user_addressline'];
        $city = $row['user_city'];
        $state = $row['user_state'];
        $postcode = $row['user_poscode'];
        $prfpic = $row['user_profilepic'];
    }  
} 
else {
    echo "<script> alert('Unable to Find data');</script>";
}
$name = $firstname.'&nbsp'.$lastname;

?>

