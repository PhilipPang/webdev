<?php
    $con = mysqli_connect("localhost","apu_sdp", "apu_sdp" ,"apu_sdp"); //remember to add table name

    if (mysqli_connect_errno()){
        echo "Connection Status: Failed to connect to MySQL:" . mysqli_connect_error();
    }
    /*
    else{
        echo "Connection Status: Connection success";
    }
    */
?>  