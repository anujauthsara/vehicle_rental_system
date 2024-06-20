<?php
include "config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['e-mail'];
    $p_number = $_POST['number'];
    $feedback = $_POST['Needs'];

    $sql = "INSERT INTO `contact` (`Name`, `E-mail`, `Phone Number`, `Feedback`) VALUES ('$name', '$email', '$p_number', '$feedback')";

    $result = $conn->query($sql);

    if($result === TRUE){
        echo "New record created successfully";
    }
    else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
