<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vrs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$id = $_GET['usersid'];


$deleteSql = "DELETE FROM booking WHERE usersid = $id";
if ($conn->query($deleteSql) === TRUE) {
  
  header("Location: view_data.php");
  exit();
} else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();
?>
