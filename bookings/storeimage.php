<?php
    
    $img = $_POST['image'];
    $folderPath = "upload/";
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.png';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
	
    //print_r($fileName);
	session_start();
	include '../dbconnect.php';
	$username= $_SESSION['username'];
	mysqli_query($conn,"update quickstorage.Customer set webphoto ='$file' where email ='$username'");
	mysqli_close($conn);
	header('Location:Idupload.php');
  
?>