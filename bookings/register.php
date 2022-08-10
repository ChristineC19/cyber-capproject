<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>
				<link rel="stylesheet" href="../style/style.css"/>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

				<div id="header">

							<div id="header2">
								<h1>Quick Storage</h1>
								<br>
								<div class="link"><a href="./index.html">Home</a></div>
								<div class="link"><a href="booking.php">Bookings</a></div>
								<div class="link"><a href="./contact/contact.html">Contact</a></div>
								<div class="link"><a href="signin.php">Login</a></div>
								<div class="link" style="background-color:white"><a href="bookings/register.php">Register</a></div>
							</div>
				</div>
	</head>
		<body>

		
		<?php 
		
		if(isset($_GET['error']))
		{
			echo "<h4>Error - the username and/or password are incorrect</h4>";
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
		if(isset($_GET['error8']))
		{
			echo "<h4>Error8 - Passwords must match! </h4>";
			
		}
		if(isset($_GET['error9']))
		{
			echo "<h4>Error9 - Please enter password </h4>";
		}
		 
		if(isset($_GET['error10']))
		{
			echo "<h4>Error10 - You Forgot to Enter Your first Name! </h4>";
		
		}
		if(isset($_GET['error11']))
		{
			echo "<h4>Error11 - Only letters and white space allowed in your first name</h4>";
			  
		}
		if(isset($_GET['error12']))
		{
			echo "<h4>Error12 - You Forgot to Enter Your last Name! </h4>";
		
		}
		if(isset($_GET['error13']))
		{
			echo "<h4>Error13 - Only letters and white space allowed in Surname </h4>";
			  
		}
		if(isset($_GET['error14']))
		{
			echo "<h4>Error14 - You Forgot to Enter Your mobile No!</h4>";
			  
		}
		
		if(isset($_GET['error15']))
		{
			echo "<h4>Error15 - Number is not valid, please correct! </h4>";
			  
		}
?>
	


			<div class="container">
				<form action="NewCustomer.php" method="post">

					<h1>Register to Create an Account</h1>
					<label for="uname"><b>Username</b></label>
					<input type="text" placeholder="Enter Email address" name="uname" id="uname" required>
					<label for="psw1"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw1" id="psw1" required>
					<label for="psw2"><b>Confirm password</b></label>
					<input type="password" placeholder="Confirm Password" name="psw2" id="psw2" required>
					<label for="scrt"><b>Secret</b></label>
					<input type="secret" placeholder="Create a secret Word" name="scrt" id="scrt" required> 
					<label for="fname"><b>Firstname</b></label>
					<input type="text" placeholder="Enter firstname" name="fname" id="fname" required>
					<label for="sname"><b>Surname</b></label>
					<input type="sname" placeholder="Enter Surname" name="sname" id="sname" required>
					<label for="no"><b>Contact No</b></label>
					<input type="no" placeholder="Enter Contact No" name="no" id="no" required>
					<label for="add"><b>Address</b></label>
					<input type="add" placeholder="Enter Address" name="add" id="add" required>
					<button type="submit">Create Account</button>

					<p>
					Already have an account? <a href="login.php">Login Here</a>
					</p>
				</form>
			</div>



		</body>
</html>
