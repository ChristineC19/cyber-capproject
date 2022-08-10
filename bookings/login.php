	<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="../style/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		
		
		<div id="header">
			<h1>Quick Storage</h1>
						<br>
			<div id="header2">
				<div class="link"><a href="../index.html">Home</a></div>
				<div class="link"><a href="../units/unit.html">Units</a></div>
				<div class="link"><a href="../contact/contact.html">Contact</a></div>
				<div class="link"><a href="bookings/bookings.html">Bookings</a></div>
			</div>
		</div>
	</head>
		<body>
			
		
		
	

<?php 
		
		if(isset($_GET['error']))
		{
			echo "<h4>Error - the username and/or password are incorrect</h4>";
		}
?>
				<form action="checkuser.php" method="post">

							  <div class="container">
							    <label for="uname"><b>Username</b></label>
							    <input type="text" placeholder="Enter Username" name="uname" id="uname"required>

							    <label for="psw"><b>Password</b></label>
							    <input type="password" placeholder="Enter Password" name="psw" id="psw">

							    <button type="submit">Login</button>
							
							  </div>
				</form>
				<br />
				
				<br />
				
				
				<div><h4>Don't have an account?</h4>
				 <a href="register.php">create an account</a></div>
			
			
			 <script src="index.js"></script>	 


			    

	</body>
</html>