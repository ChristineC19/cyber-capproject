	<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bookings</title>
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
						<div class="link"><a href="../index.html">Home</a></div>
						<div class="link"><a href="booking.php">Bookings</a></div>
						<div class="link"><a href="../contact/contact.html">Contact</a></div>
						<div class="link"><a href="Signin.php">Login</a></div>
						
					</div>
				</div>
		
				<div class="central">
				<h1>Book a Unit</h1>
				<h2>Large and Small Units Available  </h2>
				<h2>Book today! </h2>
				</div>
	
			<div>
		<?php 
		
		if(isset($_GET['error1']))
		{
			echo "<h4>Error - the dates enters are in the past </h4>";
		}
		if(isset($_GET['error2']))
		{
			echo "<h4>Error - the end date cannot be before the start date </h4>";
		}
?>

		<div class="container">
		
					<form action="checkavail.php" method="post">
						<div class="form-group">
							<label>Book your Unit</label>
							<button onclick="Rates()"><a target="_blank" href="../images/daily rates.pdf">Unit Rates</a></button>
							<h3>Start Date</h3>
							<input type="date" name="startdate" id="startdate"/><br><br>
							<h3>End Date</h3>
							<input type="date" name="enddate" id="enddate"/><br><br>
							<input type="submit"/><br><br>
							
						</div>
					</form>	
				</div>
		</div>
				<!--//modified from - ref: Chirag Vidani https://stackoverflow.com-->
					<script  type="text/javascript" >
					
				
				$(function(){
				var dtToday = new Date();
				
				var month = dtToday.getMonth() + 1;
				var day = dtToday.getDate();
				var year = dtToday.getFullYear();
				if(month < 10)
					month = '0' + month.toString();
				if(day < 10)
					day = '0' + day.toString();
				
				var maxDate = year + '-' + month + '-' + day;

				$('#startdate').attr('min', maxDate);
				$('#enddate').attr('min', maxDate);
				

});

				</script>
				
		</body>
</html>
					  
		
		
