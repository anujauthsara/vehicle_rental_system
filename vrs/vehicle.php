<html>
  <head>
      <link rel="stylesheet" href="vehicle rental sysytem header.css">
      <link rel="stylesheet" href="vehicle rental system footer.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="stylesheet" href="vrsearch.css">
      <script src="vrs.js"></script>
      <script src="amountp.js"></script>
  </head>
  <header style="border-radius: 25px;background-image: url(headrer.jpg);">
        
      <center><h1 style="background-color: rgb(0, 0, 0); color:white"><b><i>Car2Go</i></b></h1>
        <h5 style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color: rgb(0, 0, 0);">Rent-A-Car<br>Since 2023</h5>
        <input type="search"><button style="background-color: black;color: aliceblue;">Search</button></center>
        <img src="login.jpeg" style=" border-radius: 100%; width: 4%; display: block;
        margin-left:96%;">

     
        
        <nav style="display:inline-flex;">
            <b>
                <h3>
          <ul style="list-style: none; margin: 0; padding: 0; background-color: rgb(0, 255, 221,0.8);">
          
          <li class="l1" style="display: inline-block; margin-right: 10px;"><a href="vehicle rental system home page.php" style="color: #000000; text-decoration: none;">Home</a></li>
            <li class="l1" style="display: inline-block; margin-right: 10px;"><a href="vehicle.php" style="color: #000000; text-decoration: none;">Vehicles</a></li>
            <li  class="l1" style="display: inline-block; margin-right: 10px;"><a href="vehicle rental system about us page.php" style="color: #000000; text-decoration: none;">About</a></li>
            <li  class="l1" style="display: inline-block; margin-right: 10px;"><a href="vehicle rental system sevices page.php" style="color: #000000; text-decoration: none;">Services</a></li>
            <li class="l1"  style="display: inline-block; margin-right: 10px;"><a href="Travel.php" style="color: #000000; text-decoration: none;">Travel</a></li>
            <li class="l1" style="display: inline-block; margin-right: 10px;"><a href="rental contact.php" style="color: #000000; text-decoration: none;">Contact Us</a></li>

          </ul>
        </h3>
        </b>
        </nav>  
         <a href="login.php" button class="login-button">Login</button></a>
        <a href="signup.php" button class="signup-button">Signup</button></a>
  
      </header>
      <body>
        <br>
        <!-- Your page content goes here -->
        <form>
          <label>Vehicle Category&nbsp;</label>
          <select id="cate" >
            <option value="suv">SUV</option>
            <option value="van">Van</option>
            <option value="wagon">Wagon</option>
            <option value="salon">Salon</option>
          </select>
          
          <br>
          <label>Pickup Location &nbsp;&nbsp;</label>
          <input type="text">
          
          <br>
          <label>Rent-A-Car On &nbsp;&nbsp;&nbsp;</label>
          <input type="date" id="datePick" onclick="Datefn()">
          
          <br>
          <center>
          <input type="checkbox">
          <label>Self Drive.&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="checkbox">
          <label>Tours with driver.</label>
          <br>
          <br>
          
          <input type="submit" value="Search" onclick="vsearch(); return false;">
          </center>
        </form>
        <div id="search-results">
          <!-- Display search results here -->

        </div>

        <p id="amnt"></p>
        
        <br>
      </body>   
      <footer style="height: 45%;">
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
              <a href="https://www.facebook.com/"><i class="fab fa-facebook-f" style="color:blue;"></i></a>
              <a href="https://twitter.com/"><i class="fab fa-twitter" style="color:rgb(41, 175, 219);"></i></a>
              <a href="https://www.instagram.com/"><i class="fab fa-instagram" style="color:rgb(196, 21, 79);"></i></a>
              <a href="https://www.pinterest.com/"><i class="fab fa-pinterest" style="color:red;"></i></a>
            </div>
          </div>
          <div class="footer-section payment">
            <h2>Payment Options</h2>
            <div class="payment-icons">
              <a href="http://usa.visa.com/" i class="fab fa-cc-visa"></i></a>
              <a href="https://www.mastercard.com/global/en.html"  i class="fab fa-cc-mastercard"></i></a>
              <a href="http://www.paypal.com/"  i class="fab fa-cc-paypal"></i></a>
            </div>
          </div>
        </div>
      </footer>
      
</html>

<! --source web page =w3schools --> 
