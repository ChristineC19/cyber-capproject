
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CheckAvail</title>
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
								<div class="link"><a href="checkavail.php">CheckAvail</a></div>
								<div class="link"><a href="Signin.php">Login</a></div>
					</div>
				</div>
		

<div>	
<?php 
include '../dbconnect.php';
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];

#Validatation of start and end dates 

if(strtotime($startdate) < strtotime(date("Y-m-d"))){
	
	header("Location:booking.php?error1=true");
}

if(strtotime($enddate) < strtotime($startdate)){
	
	header("Location:booking.php?error2=true");
}



echo "<div><h3>Availability between $startdate and $enddate</h3></div>";

$startdate =strtotime($startdate);
$enddate=strtotime($enddate);
$available50=0;
$available25=0;

#if the bstart date is >= to estart date AND <= than end date THEN IS UNAVAILABLE

$result = mysqli_query($conn,"SELECT BookingStartDate, BookingEndDate,UnitID FROM quickstorage.booking ");
while($row = mysqli_fetch_array($result))
{
	
	if($startdate >= strtotime($row['BookingStartDate']) AND $startdate <= strtotime($row['BookingEndDate']))
	{
		#ECHO "unavailable ";
		$unitid = $row['UnitID'];
		$result2 = mysqli_query($conn,"SELECT UnitSize FROM quickstorage.storageunit WHERE UnitID=$unitid ");
		while($row2 = mysqli_fetch_array($result2))
		{
			$unittype= $row2['UnitSize'];
			if($unittype=="25")
			{	
			echo "unit 25 unavailable";
			$available25=$available25+1;
			}
			elseif($unittype=="50")
			{	
			echo "unit 50 unavailable";
			$available50=$available50+1;
			}
			else{
					$available50=0;
					$available25=0;
			}
		}
	}
	
	if($enddate >= strtotime($row['BookingStartDate']) AND $enddate <= strtotime($row['BookingEndDate']))
	{
		#ECHO "2Unavailable";
		$unitid = $row['UnitID'];
		$result3 = mysqli_query($conn,"SELECT UnitSize FROM quickstorage.storageunit WHERE UnitID=$unitid ");
		while($row3 = mysqli_fetch_array($result3))
		{
			$unittype= $row3['UnitSize'];
			if($unittype=="25")
			{	
			echo "unit 25 unavailable";
			$available25=$available25+1;
			}
			elseif($unittype=="50")
			{	
			echo "unit 50 unavailable";
			$available50=$available50+1;
			}
			else{
				$available50=0;
				$available25=0;
			}
		}
	}		
}

if($available50<1){
	echo "<form action='regorlog.php' method='post'>
					<div class='form-group'>
					
						<input hidden type='date' name='startdate' id='startdate' value='".$_POST['startdate']."'/>
						<input hidden type='date' name='enddate' id='enddate' value ='".$_POST['enddate']."'/>
						<input type='hidden' name='type' id='unittype' value ='50'/>
						<input  type='submit' value='Book 50m Unit >'/><br><br>
					</div>
				</form>	
	";
}
if($available25<1){
	echo "<form action='regorlog.php' method='post'>
					<div class='form-group'>
						
						<input hidden type='date' name='startdate' id='startdate' value='".$_POST['startdate']."'/>
						<input hidden type='date' name='enddate' id='enddate' value ='".$_POST['enddate']."'/>
						<input type='hidden' name='type' id='unittype' value ='25'/>
						<input  type='submit' value='Book 25m Unit >'/><br><br>
					</div>
				</form>	
	";
}


mysqli_close($conn);



?>
</div>
				</body>
				</html>