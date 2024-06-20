<?php
include "config.php";

if(isset($_POST['submit'])){
    $comment = $_POST['textarea'];
    $rate = $_POST['stars'];

    $sql = "INSERT INTO `feedback`(`comment`,`rate`) VALUES ('$comment','$rate')";

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




