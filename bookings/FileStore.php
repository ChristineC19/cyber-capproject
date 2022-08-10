<?php
    if (isset($_FILES['upload'])) {
        $uploadDir = 'upload/Id/'; //Path were file will be uploaded to
        $uploadedFile = $uploadDir . basename($_FILES['upload']['name']);
        if(move_uploaded_file($_FILES['upload']['tmp_name'], $uploadedFile)) {
            echo 'File was uploaded successfully.';
        } else {
            echo 'There was a problem saving the uploaded file';
        }
        echo '<br/><a href="IDupload.php">Back to Uploader</a>';
    } else {
    ?>
   

        <?php
    }	
	session_start();
	include '../dbconnect.php';
	$username= $_SESSION['username']; 
	mysqli_query($conn,"update quickstorage.Customer set idphoto ='$uploadedFile' where email ='$username'");
	mysqli_close($conn);
	header('Location:account.php');
?>