<?php
    require 'config.php';
    if(isset($_POST['submit']))
    {
        $UID = $_POST["U_ID"];
        $dis = $_POST["dist"];
        $Date = $_POST["date"];
        $type = $_POST["paymentMethod"];
        $cname = $_POST["name"];
        $cNo = $_POST["cardnumber"];
        $Exp = $_POST["expiry"];
        $CVC = $_POST["cvc"];

        $sql = "INSERT INTO `booking` (`usersid`, `distance`, `b_date`, `pay_m`) VALUES ('$UID', '$dis', '$Date', '$type')";
        if($con->query($sql)) {
            echo "Inserted successfully";
        }
        else {
            echo "Error: " . $con->error;
        }

        $sql2 = "INSERT INTO `card` (`usersid`, `ch_name`, `c_no`, `ex_date`, `cvc`) VALUES ('$UID', '$cname', '$cNo', '$Exp', '$CVC')";
        if($con->query($sql2)) {
            echo "Inserted successfully";
        }
        else {
            echo "Error: " . $con->error;
        }
        
        $con->close();
    }
?>
