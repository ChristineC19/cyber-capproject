<?php
session_start();
	if(isset($_SESSION['admin']))
{
// connect to the database
include '../dbconnect.php';
$user=$_POST['custid'];
mysqli_query($conn, "update quickstorage.Customer set isverified ='yes' where CustomerID ='$user'");
header("Location:unverifiedaccount.php");
}
else {
	
	session_destroy();
	$_SESSION = array();
header("Location:loginadmin.php");
}	

?>