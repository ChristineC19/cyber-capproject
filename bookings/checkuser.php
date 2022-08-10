<?php 
include '../dbconnect.php';
$username = $_POST['uname'];
$password = $_POST['psw'];

// to check to see inputs were received run this next line
//echo "<div><h3>your details are $username and $password</h3></div>";
  

if (empty($_POST["uname"])) {
        $header = ("Location:Signin.php?error1=true");
    } else {
        $username = ($_POST["uname"]);
        // check if e-mail address syntax is valid
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$username)) {
            header("Location:Signin.php?error2=true"); 
        }
	}
	

	
if(!empty($_POST["psw"]) && isset( $_POST['psw'] )) {
	$password = $_POST["psw"];
       if (mb_strlen($_POST["psw"]) <= 8) {
        header("Location:register.php?error3=true"); 
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        header("Location:register.php?error4=true"); 
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        header("Location:register.php?error5=true"); ;
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        header("Location:register.php?error6=true"); 
	}
    elseif(!preg_match("#[\W]+#",$password)) {
        header("Location:register.php?error7=true"); 
    } 
    

 }
else {
    header("Location:register.php?error9=true"); 
	}
	
	 	//Each $_POST variable with be checked by the function
/* function test_input($data) {
     $data = trim($data); // trim removes white spacing 
     $data = stripslashes($data);  // strip forward or backward slashes to just give a string 
     $data = htmlspecialchars($data);// greater than and less than are converted into entities
	 $data = rawurldecode($data);
	 return filter_var($data = filter_var($_GET['data'], FILTER_SANITIZE_STRING));
     return $data;
	 }
 */


$password= hash('sha256', $password);

$result = mysqli_query($conn,"SELECT CustomerID FROM quickstorage.customer WHERE email = '$username' and userpass='$password' and isverified='yes' ");
session_start();
while($row = mysqli_fetch_array($result))
{
	echo "customer id ".$row['CustomerID'];
	$_SESSION['user']=$row['CustomerID'];
	 
}
if(mysqli_num_rows($result)>0)
{
	header('Location:account.php');

 
}
else {
	header('Location:signin.php?error=true');
}
mysqli_close($conn);
  
 	
?>