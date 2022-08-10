<?php
session_start();

// connect to the database
include '../dbconnect.php';
 

// REGISTER USER
//if (isset($_POST['Register'])) {
  // receive all input values from the form
  $username = $_POST['uname'];
  $password_1 = $_POST['psw1'];
  $password_2 =  $_POST['psw2'];
  $secret =  $_POST['scrt']; 
  $fname =  $_POST['fname'];
  $sname =  $_POST['sname'];	
  $number =  $_POST['no'];
  $address =  $_POST['add'];
  

  
 // to check to see inputs were received run this next line
//echo "<div><h3>your details are $username and $password_1 and $password_2 and $secret and $fname and $sname and $number and $address</h3></div>";
  
// define variables and set to empty values
$usernameErr = "";


if (empty($_POST["uname"])) {
        $header = ("Location:register.php?error1=true");
    } else {
        $username = test_input($_POST["uname"]);
        // check if e-mail address syntax is valid

		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$username)) {
          // header("Location:register.php?error2=true");  
		  echo $username;
		
        }
		
    }
	


 if(!empty($_POST["psw1"]) && isset( $_POST['psw1'] )) {
	$password_1 = $_POST["psw1"];
    $password_2 = $_POST["psw2"];
    if (mb_strlen($_POST["psw1"]) <= 8) {
        header("Location:register.php?error3=true"); 
    }
	
    elseif(!preg_match("#[0-9]+#",$password_1)) {
        header("Location:register.php?error4=true"); 
    }
    elseif(!preg_match("#[A-Z]+#",$password_1)) {
        header("Location:register.php?error5=true"); ;
    }
    elseif(!preg_match("#[a-z]+#",$password_1)) {
        header("Location:register.php?error6=true"); 
	}
    elseif(!preg_match("#[\W]+#",$password_1)) {
        header("Location:register.php?error7=true"); 
    } 
    elseif (strcmp($password_1, $password_2) !== 0) {
        header("Location:register.php?error8=true"); 
    }

 }
else {
    header("Location:register.php?error9=true"); 
	}
	
 if (empty($_POST["fname"])) {
        header("Location:register.php?error10=true"); 
    } else {
        $fname = test_input($_POST["fname"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            header("Location:register.php?error11=true"); 
        }
    }

if (empty($_POST["sname"])) {
        header("Location:register.php?error12=true"); 
    } else {
        $sname = test_input($_POST["sname"]);
        //Checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$sname)) {
           header("Location:register.php?error13=true"); 
        }
    }

 if (empty($_POST["no"])) {
         header("Location:register.php?error14=true"); 
		
    } else {
		$number = test_input($_POST["no"]);
		if(!preg_match("/^\d+$/", $number)){
        
		//header("Location:register.php?error15=true"); 
		}
	}
		
/*Each $_POST variable with be checked by the function*/

function test_input($data) {
     $data = trim($data); // trim removes white spacing 
     $data = stripslashes($data);  // strip forward or backward slashes to just give a string 
     $data = htmlspecialchars($data);// greater than and less than are converted into entities
	 $data = rawurldecode($data);
 	 //return filter_var($data = filter_var($_GET['data'], FILTER_SANITIZE_STRING)); 
     return $data;
	 }	
	

//check to see if user already exists 
																																
$result = mysqli_query($conn,"SELECT CustomerID FROM quickstorage.customer WHERE email = '$username' ");

while($row = mysqli_fetch_array($result))
{
	echo "customer id ".$row['CustomerID'];
	$_SESSION['user']=$row['CustomerID'];
	
}

if(mysqli_num_rows($result)>=1)
{
	$errors = 1;
}
else {
		$errors = 0;
	}		


 //Finally, register user if there are no errors in the form
if ($errors == 0) {
 #$password = md5($password_1);//encrypt the password before saving in the database
$password = hash('sha256', $password_1);

  		  
 mysqli_query($conn,"insert into quickstorage.customer ( firstname, surname,  contactNumber, email, address,  userpass, secret, isverified)  values ('$fname','$sname','$number','$username','$address','$password','$secret','no') ");
		# echo  $theoutput;
			  

  	$_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
 
}
	mysqli_close($conn);

header('location: identification.php'); 
  
  
  	

?>