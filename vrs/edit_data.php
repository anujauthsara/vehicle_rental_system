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


$sql = "SELECT * FROM users WHERE usersid = $id";
$result = $conn->query($sql);


$usersid = '';
$distance = '';
$b_date = '';
$p_method = '';

if ($result->num_rows > 0) {
  
  $row = $result->fetch_assoc();
  $usersid = $row['usersid'];
  $distance = $row['distance'];
  $b_date = $row['b_date'];
  $p_method = $row['p_method'];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $newUsersid = $_POST['usersid'];
  $newDistance = $_POST['distance'];
  $newBDate = $_POST['b_date'];
  $newPMethod = $_POST['p_method'];

  
  $updateSql = "UPDATE booking SET usersid = '$newUsersid', distance = '$newDistance', b_date = '$newBDate', p_method = '$newPMethod' WHERE id = $id";
  if ($conn->query($updateSql) === TRUE) {
    
    header("Location: view_data.php");
    exit();
  } else {
    echo "Error updating record: " . $conn->error;
  }
}


$conn->close();
?>
<html>
  <head>
      <link rel="stylesheet" href="vehicle rental sysytem header.css">
      <link rel="stylesheet" href="vehicle rental system footer.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="admin.css">
      
  </head>
  <header style="border-radius: 25px;background-image: url(headrer.jpg);">
        
      <center><h1 style="background-color: rgb(0, 0, 0); color:white"><b><i>Car2Go</i></b></h1>
        <h5 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color: rgb(0, 0, 0);">Rent-A-Car<br>Since 2023</h5>
        <input type="search"><button style="background-color: black;color: aliceblue;">Search</button></center>
        <img src="C:\Users\anuja uthsara\Desktop\IWT\login.jpeg" style=" border-radius: 100%; width: 4%; display: block;
        margin-left:96%;">

     
        
        <nav style="display:inline-flex;">
            <b>
                <h3>
          <ul style="list-style: none; margin: 0; padding: 0; background-color: rgb(0, 255, 221,0.8);">
          
            <li class="l1" style="display: inline-block; margin-right: 10px;"><a href="#" style="color: #000000; text-decoration: none;">Home</a></li>
            <li class="l1" style="display: inline-block; margin-right: 10px;"><a href="#" style="color: #000000; text-decoration: none;">Vehicles</a></li>
            <li  class="l1" style="display: inline-block; margin-right: 10px;"><a href="#" style="color: #000000; text-decoration: none;">About</a></li>
            <li  class="l1" style="display: inline-block; margin-right: 10px;"><a href="#" style="color: #000000; text-decoration: none;">Services</a></li>
            <li class="l1"  style="display: inline-block; margin-right: 10px;"><a href="#" style="color: #000000; text-decoration: none;">Travel</a></li>
            <li class="l1" style="display: inline-block; margin-right: 10px;"><a href="#" style="color: #000000; text-decoration: none;">Contact Us</a></li>

          </ul>
        </h3>
        </b>
        </nav>  
         <button class="login-button">Login</button>
        <button class="signup-button">Signup</button>
  
      </header>
      <body>
        <br>
        <h2>Edit Booking Data</h2>

  <form method="post" action="">
    <label for="usersid">Users ID:</label>
    <input type="text" id="usersid" name="usersid" value="<?php echo $usersid; ?>" required><br>

    <label for="distance">Distance:</label>
    <input type="text" id="distance" name="distance" value="<?php echo $distance; ?>" required><br>

    <label for="b_date">Booking Date:</label>
    <input type="date" id="b_date" name="b_date" value="<?php echo $b_date; ?>" required><br>

    <label for="p_method">Payment Method:</label>
    <input type="text" id="p_method" name="p_method" value="<?php echo $p_method; ?>" required><br>

    <input type="submit" value="Update">
  </form>
        <br>
        <footer style="height: 30%;">
          <div class="container">
            <div class="footer-section about">
              <h2>About Us</h2>
              <p>Welcome to our vehicle rental system! We provide reliable, convenient, and budget-friendly options for all your transportation needs. Choose from a wide range of well-maintained vehicles.</p>
            </div>
            <div class="footer-section contact">
              <h2>Contact Us</h2>
              <ul>
                <li><i class="fas fa-phone" style="color:green;"></i>  +94 76 920 9743</li>
                <li><i class="fas fa-envelope" style="color:red;"></i> car2go@gmail.com</li>
                <li><i class="fas fa-map-marker-alt" style="color:blue;"></i>car2go.co(pvt).Ltd  3A,Boralla road Malabe</li>
              </ul>
            </div>
            <div class="footer-section find-us">
              <h2>Find Us</h2>
              <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f" style="color:blue;"></i></a>
                <a href="#"><i class="fab fa-twitter" style="color:rgb(41, 175, 219);"></i></a>
                <a href="#"><i class="fab fa-instagram" style="color:rgb(196, 21, 79);"></i></a>
                <a href="#"><i class="fab fa-pinterest" style="color:red;"></i></a>
              </div>
            </div>
            <div class="footer-section payment">
              <h2>Payment Options</h2>
              <div class="payment-icons">
                <i class="fab fa-cc-visa"></i>
                <i class="fab fa-cc-mastercard"></i>
                <i class="fab fa-cc-paypal"></i>
              </div>
            </div>
          </div>
        </footer>
      </body>    
</html>