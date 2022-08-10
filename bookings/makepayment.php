	<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Account</title>
				<link rel="stylesheet" href="../style/style.css"/>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
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
								<div class="link"><a href="./bookings/booking.php">Bookings</a></div>
								<div class="link"><a href="./contact/contact.html">Contact</a></div>
								<div class="link" style="background-color:white"><a href="logout.php">logout</a></div>
							</div>
				</div>
		
		
	<?php
	
	
	session_start();
	if(isset($_SESSION['user']))
{

	
}
else {
	
	session_destroy();
	$_SESSION = array();
header("Location:login.php");
}	



	
	?>

				
			<div class="container">
				<form action="validcc.php" method="post">
	<?php 
		
		if(isset($_GET['error1']))
		{
			echo "<h4>Error - the card number was entered incorrectly </h4>";
		}?>
								<h1>Payment Details</h1>
							   <?php
							   echo "Payment Amount: €".$_SESSION['totalprice'];
							   ?>
							    <label for="cardnum"><b>Card Number</b></label>
								<input type="text" name="cardnum" id="cardnum" class="ccFormatMonitor" placeholder="Card Number">
								<label for="inputExpDate"><b>Expiry Date</b></label>
								<input type="text" id="inputExpDate" name ="inputExpDate" placeholder="MM / YY" maxlength='5'>
								<label for="cvv"><b>CVV</b></label>
								<input type="password" id="cvv" name="cvv" class="cvv" placeholder="CVV">
							     <button type="submit">Make Payment</button>
								
											  
					</form>
			</div>
			
		
		
	
	</body>
</html>