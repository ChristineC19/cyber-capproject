<?php 
include '../dbconnect.php';
$username = $_POST['uname'];
$secret = $_POST['scrt'];

if (empty($username)) { array_push($errors, "Username is required"); }
  
if (empty($scrt)) { array_push($errors, "secret word is required"); }

if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");}
  
  
$result = mysqli_query($conn,"SELECT CustomerID FROM quickstorage.customer WHERE email = '$username' and secret='$scrt' ");
session_start();
while($row = mysqli_fetch_array($result))
{
	echo "customer id ".$row['CustomerID'];
	$_SESSION['user']=$row['CustomerID'];
	
}
if(mysqli_num_rows($result)<0)
{
	echo " Username does not exist" 


}
else {
	header('email:newpassword?error=true');
}
 mysqli_close($conn);
?>