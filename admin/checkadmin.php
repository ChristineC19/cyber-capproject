<?php 
include '../dbconnect.php';
$username = $_POST['uname'];
$password = $_POST['psw'];

// to check to see inputs were received run this next line
//echo "<div><h3>your details are $username and $password</h3></div>";
  

if (empty($_POST["uname"])) {
        $header = ("Location:checkadmin.php?error=true");
    } else {
        $username = ($_POST["uname"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$username)) {
            header("Location:checkadmin.php?error2=true"); 
        }
	}
	
	
	 	//Each $_POST variable with be checked by the function


function test_input($password) {
     $password = trim($password); // trim removes white spacing 
     $password = stripslashes($password);  // strip forward or backward slashes to just give a string 
     $password = htmlspecialchars($password);// greater than and less than are converted into entities
	 $password = rawurldecode($password);
 	 return filter_var($password = filter_var($_POST['psw'], FILTER_SANITIZE_STRING)); 
     return $password;
	 }	
test_input($password);

$password= hash('sha256', $password);

$result = mysqli_query($conn,"SELECT AdminID FROM quickstorage.admins WHERE email = '$username' and userpass='$password' ");
session_start();
while($row = mysqli_fetch_array($result))
{
	echo "Admin id ".$row['AdminID'];
	$_SESSION['admin']=$row['AdminID'];
	 
}
if(mysqli_num_rows($result)>0)
{
	header('Location:accountadmin.php');

 
}
else {
	header('Location:loginadmin.php?error=true');
}
mysqli_close($conn);
  
 	
?>