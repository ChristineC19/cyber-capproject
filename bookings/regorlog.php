<?php
#get form details

						#<input type='hidden' name='type' id='unittype' value ='$unittype'/>
$unittype=	$_POST['type'];
$startdate = $_POST['startdate'];
$enddate = $_POST['enddate'];
session_start();
$_SESSION['unittype'] = $unittype;
$_SESSION['startdate'] = $startdate;
$_SESSION['enddate'] = $enddate;
$_SESSION['inflight']=1;

if(isset($_SESSION['user']))
{
	header('Location:account.php');
}
else {
	header('Location:signin.php');

}
#store form details in session

#check if user is logged in

#if user is not login prompt login

#if user does not have account prompt register





?>