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

include '../dbconnect.php';
$bookingdate= date("Y-m-d");
$startdate=$_SESSION['startdate'];
$enddate=$_SESSION['enddate'];
$customerid=$_SESSION['user'];
$unitid=0; 
$result2 = mysqli_query($conn,"SELECT UnitID FROM quickstorage.storageunit WHERE UnitSize='".$_SESSION['unittype']."'");

	while($row2 = mysqli_fetch_array($result2))
	{
		$unitid= $row2['UnitID'];
	}
$totaldays=$_SESSION['totaldays'];
$totalprice=$_SESSION['totalprice'];
mysqli_query($conn,"insert into quickstorage.booking (BookingDate, BookingStartDate, BookingEndDate, CustomerID, UnitID,  TotalDays, TotalAmount)  values ('$bookingdate','$startdate','$enddate','$customerid','$unitid','$totaldays','$totalprice') ");


echo" insert into quickstorage.booking (BookingDate, BookingStartDate, BookingEndDate, CustomerID, UnitID,  TotalDays, TotalAmount )
values ('$bookingdate','$startdate','$enddate','$customerid','$unitid','$totaldays','$totalprice') ";


#insert into Payment (TotalAmount, PaymentDate, BookingID, PaymentConfirmation ) values(100, "2202-07-26", 1, "Confirmed" );

$bookingid=0;
$paymentconfirmation="confirmed";
$result3 = mysqli_query($conn,"SELECT BookingID FROM quickstorage.booking WHERE BookingStartDate='$startdate' AND BookingEndDate='$enddate' AND UnitID='$unitid'");

	while($row3 = mysqli_fetch_array($result3))
	{
		$bookingid= $row3['BookingID'];
	}
#echo "<br/><br/>$bookingid";

mysqli_query($conn,"insert into quickstorage.payment (TotalAmount, PaymentDate, BookingID, PaymentConfirmation ) values($totalprice, '$bookingdate',$bookingid, 'Confirmed' ) ");
echo "insert into quickstorage.payment (TotalAmount, PaymentDate, BookingID, PaymentConfirmation ) values($totalprice, '$bookingdate',$bookingid, 'Confirmed' ) ";


unset ($_SESSION['inflight']);
header('Location:account.php?error=true');
 ?>