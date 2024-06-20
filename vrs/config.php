<?php
$conn = new mysqli("localhost","root","","vrs");
if($conn->connect_error){
    die("connection Failed".$conn->connect_error);
}
?>