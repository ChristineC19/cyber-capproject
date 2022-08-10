<?php


$number= $_POST['cardnum'];
//echo $number;
function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";	
	//echo "here";
	header('location: processbooking.php');
	
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
	//echo "here2";
    header('location: processbooking.php');
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
	//echo "here3";
    header('location: processbooking.php');
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
	//echo "here4";
    header('location: processbooking.php');
    }
    else
    {
       //echo "here5";
		header("Location:makepayment.php?error1=true");
    } 
 }
validatecard($number);
?>