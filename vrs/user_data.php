<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vrs";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

// Close the database connection
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
        <h2>User Data</h2>

  <table>
    <thead>
      <tr>
        <th>User_ID</th>
        <th>Distance</th>
        <th>Booking_Date</th>
        <th>Payment_Method</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['usersid'] . "</td>";
          echo "<td>" . $row['distance'] . "</td>";
          echo "<td>" . $row['b_date'] . "</td>";
          echo "<td>" . $row['pay_m'] . "</td>";
          echo "<td><a href='edit_data.php?id=" . $row['usersid'] . "'>Edit</a> | <a href='delete_data.php?id=" . $row['usersid'] . "'>Delete</a></td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='4'>No data available</td></tr>";
      }
      ?>
    </tbody>
  </table>
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