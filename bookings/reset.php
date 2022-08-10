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
						<div class="link"><a href="index.html">Home</a></div>
						<div class="link"><a href="./bookings/bookings.html">Bookings</a></div>
						<div class="link"><a href="./contact/contact.html">Contact</a></div>
						<div class="link"><a href="./bookings/Signin.html">Login</a></div>
						
					</div>
		</div>
		
		
	

<?php 
		
		if(isset($_GET['error']))
		{
			echo "<h4>Error - the username and/or password are incorrect</h4>";
		}
?>
				<form action="checkuser.php" method="post">

							  <div class="container">
							    <label for="uname"><b>Username</b></label>
							    <input type="text" placeholder="Enter Username" name="uname" id="uname" required>

							    <label for="scrt"><b>secret</b></label>
							    <input type="secret" placeholder="Enter your secret word" name="scrt" id="scrt" required>
								
								<label for="psw1"><b>Password</b></label>
								<input type="password_1" placeholder="Enter Password" name="psw1" id="psw1" required>
								<label for="psw2"><b>Confirm password</b></label>
								<input type="password_2" placeholder="Confirm Password" name="psw2" id="psw2" required>
					


							    <button type="submit">Request</button>
							
							  </div>
				</form>
				
				
			
			 <script src="index.js"></script>	 


			    

	</body>
</html>