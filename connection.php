<?php
    $con = mysqli_connect("localhost","root","","otp");
    if($con){
        echo "CONNECTION FAILED", mysqli_connect_error() or die;
    }
    // echo $myname = "HELLO WORLD 2";
?>