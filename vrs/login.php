<?php
include_once 'header.php'
?>

<body>

	<form action="includes/login.inc.php" method="POST">

		<div class="login">  
		
		<h1>Login</h1>
		
		    <label for="email">Email Address:</label><br>
	        <input type="email" name="email" class="lbox" placeholder="abc@gmail.com"required><br><br>
	
		    <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" class="lbox" placeholder="Enter your password" required><br><br><br>	
			
			<button name="submit" type="submit" class="btn">Login</button>
			
		    <p>Haven't got an account? <a href="signup.php">Sign Up here</a></p>
		</div>
		
	    </form>
		
</body>

<?php
include_once 'footer.php'
?>