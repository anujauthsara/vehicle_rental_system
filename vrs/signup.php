<?php
include_once 'header.php'
?>
<body>

	<form action="includes/signup.inc.php" method="POST">
	
	    <div class="signup">
		
		<h1>Sign Up</h1>
		
		
		    <label for="first_name">First name:</label><br>
            <input type="text" name="first_name" placeholder="First Name" class="sbox" required><br><br>
	
            <label for="last_name">Last name:</label><br>
            <input type="text" name="last_name" placeholder="Last Name" class="sbox" required><br><br>
		
		    <label for="mobile_number">Phone Number:</label><br>
	        <input type="phone" name="mobile_number" pattern="[0-9]{10}" class="sbox" placeholder="0771234567" required><br><br>
	
		    <label for="email">Email:</label><br>
	        <input type="email" name="email" class="sbox" placeholder="abc@gmail.com"required><br><br>
	
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" class="sbox" placeholder="Enter your password" required><br><br>
	        
	        <label for="confirm_password">Confirm password:</label><br>
	        <input type="password" name="confirm_password" id="confirm_password" class="sbox" placeholder="Confirm your password" required><br><br>	
	        
			<button name="submit" type="submit" class="btn">Signup</button>
		    
			<p>Already have an account? <a href="login.php">Login here</a></p>
			
		</div>
		
	    </form>

</body>
<?php
include_once 'footer.php'
?>