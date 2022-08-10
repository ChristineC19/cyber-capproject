	<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="../style/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
		
		
	</head>
	<body>
			<div id="header">

					<div id="header2">
						<h1>Quick Storage</h1>
						<br>
						<div class="link"><a href="./index.html">Home</a></div>
						<div class="link"><a href="booking.php">Bookings</a></div>
						<div class="link"><a href="../contact/contact.html">Contact</a></div>
						<div class="link"><a href="Signin.php">Login</a></div>
						
					</div>
		</div>
		
		
	

<?php 
		
		 if(isset($_GET['error']))
		{
			echo "<h4>Error - the username and/or password are incorrect</h4>";
			echo "<h4>or an Administator still needs to verify your account</h4>";
			
		} 
		
		if(isset($_GET['error1']))
		{
			echo "<h4>Error1 - You forget your email address  </h4>";
		}
		if(isset($_GET['error2']))
		{
			echo "<h4>Error2 - Email Address is not correct </h4>";
		}
		if(isset($_GET['error3']))
		{
			echo "<h4>Error3 - Your Password Must Contain At Least 8 Characters!</h4>";
		}
		if(isset($_GET['error4']))
		{
			echo "<h4>Error4 - Your Password Must Contain At Least 1 Number! </h4>";
		}
		if(isset($_GET['error5']))
		{
			echo "<h4>Error5 - Your Password Must Contain At Least 1 Capital Letter! </h4>";
		}
		if(isset($_GET['error6']))
		{
			echo "<h4>Error6 - Your Password Must Contain At Least 1 Lowercase Letter! </h4>";
		}
		if(isset($_GET['error7']))
		{
			echo "<h4>Error7 - Your Password Must Contain At Least 1 Special Character!</h4>";
		}
		if(isset($_GET['error9']))
		{
			echo "<h4>Error9 - Please enter password </h4>";
		}
?>
				<form action="checkuser.php" method="post">

							  <div class="container">
							    <label for="uname"><b>Username</b></label>
							    <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

							    <label for="psw"><b>Password</b></label>
							    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

							    <button type="submit">Login</button>
							
							  </div>
				</form>
				
				<div class="central">
				 <a href="reset.php">Forgot password Click Here? </a>
				<br>
				
				<br>
				
				
				<h4>Don't have an account?</h4>
				 <a href="register.php">Click here to create a New Account</a>
				 </div>
			
			
			 <script src="index.js"></script>	 


			    

	</body>
</html>