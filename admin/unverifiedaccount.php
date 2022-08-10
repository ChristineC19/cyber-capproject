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
								<div class="link"><a href="accountadmin.php">Admin Dashboard</a></div>
								<div class="link"><a href="unverifiedaccount.php">Verify</a></div>
								<div class="link" style="background-color:white"><a href="logout.php">logout</a></div>
					</div>
				</div>
		
	
			
				<h2>Admin Portal</h2>
				

									
		
	

	
		
					 <?php
	
	
	session_start();
	if(isset($_SESSION['admin']))
{

	
}
else {
	
	session_destroy();
	$_SESSION = array();
header("Location:loginadmin.php");
}	




	#display all bookings
	include '../dbconnect.php';
$result = mysqli_query($conn,"SELECT * FROM quickstorage.customer where isverified='no'");
echo "<h3>Unverified accounts</h3>";
echo "<table style ='border-collapse: separate;border-spacing: 15px;'><tr><th>Photo upload</th><th>ID Doc</th><th>Verify </th></tr>";
while($row = mysqli_fetch_array($result))
{
	$customerid= $row['CustomerID'];
	$webphoto=$row['webphoto'];
	$idphoto=$row['idphoto'];
	echo "<tr><td><img height='200px' width='200px'src='../bookings/$webphoto'></td><td><img height='200px' width='200px' src='../bookings/$idphoto'></td><td><form action='verifyaccount.php' method='post'><input type='hidden' id='custid' name='custid' value='$customerid'><input type='submit' value='Approve'></form></td></tr>";
	
}

	
echo "</table>";
if(mysqli_num_rows($result)<1)
{
	Echo "There are no more accounts to verify.. return to <a href='accountadmin.php'>Dashboard</a>";
}


	
	?>
	</body>
				</html>