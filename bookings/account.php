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
								<div class="link"><a href="./index.html">Home</a></div>
								<div class="link"><a href="./bookings/booking.php">Bookings</a></div>
								<div class="link"><a href="./contact/contact.html">Contact</a></div>
								<div class="link" style="background-color:white"><a href="logout.php">logout</a></div>
					</div>
				</div>
		
	
			<h3 class="central"> Welcome to your account information</h3>
				
				
				<p>Here are some things you can do on your account</p>
				
				<p>- Check your Bookings below</p>
				
			<section class="central"> 	
				<a href="reset.php"> - change your password here</a><br>
				
				<a href="booking.php"> - New booking here </a><br>
				
				<a href="logout.php"> - Log out of Account here </a><br>
					<br>
					<br>
					<br>
					<br>
					<br>
			</section>
				
				

									
		
	

	
		
				</body>
				</html>
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



$customerid = $_SESSION['user'];
	#display if the user has any existing bookings
	include '../dbconnect.php';
$result = mysqli_query($conn,"SELECT * FROM quickstorage.booking WHERE CustomerID='$customerid'");

echo "<table style ='border-collapse: separate;border-spacing: 15px;'><tr><th>Booking Ref.</th><th>Booking Date</th><th>Booking Start Date </th><th>Booking End Date</th><th>Unit No</th><th>TotalAmount</th></tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr><td>".$row['BookingID']."</td><td>".$row['BookingDate']."</td><td>".$row['BookingStartDate']."</td><td>".$row['BookingEndDate']."</td><td>".$row['UnitID']."</td><td>".$row['TotalAmount']."</td></tr>";
	
}

	
echo "</table>";
if(mysqli_num_rows($result)<1)
{
	Echo "you have no bookings yet..";
}
#continue the inflight booking

if(isset($_SESSION['inflight']))
{
	#continue booking
	echo "<h3>Continue Active booking</h3>";
	echo "Start Date:".$_SESSION['startdate'];
	Echo "<br/><br/>";
	echo "End Date:".$_SESSION['enddate'];
	Echo "<br/><br/>";
	echo "Unit type:". $_SESSION['unittype']."m";

	$totaldays = ((strtotime($_SESSION['enddate'])-strtotime($_SESSION['startdate']))/86400)+1;
	$priceperday =0; 
	$totalprice = 0;
	$_SESSION['totaldays']=$totaldays ;
	Echo "<br/><br/>";
	echo "Total Days: $totaldays";
	Echo "<br/><br/>";
	$result2 = mysqli_query($conn,"SELECT UnitPrice FROM quickstorage.storageunit WHERE UnitSize='".$_SESSION['unittype']."'");

	while($row2 = mysqli_fetch_array($result2))
	{
		echo "Unit Day Rate: ".$row2['UnitPrice'];
		echo "<br/><br/>";
		$totalprice= $totaldays * $row2['UnitPrice'];
		echo "Total Price: $totalprice";
		 $_SESSION['totalprice']=$totalprice;
	}
	echo "<br/><br/>";
	echo "<form action='makepayment.php'><input type='submit' value='Make Payment'></form>";
}
	
	?>