<!DOCTYPE html>
<html lang="en">
	<head>
		<title>FileUpload</title>
		<link rel="stylesheet" href="../style/style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<url>
			<loc>t</loc>
			<lastmod></lastmod>
			<priority></priority>

		</url>
	</head>
	<body>
		<div id="header">
			
			<div id="header2">
				<h1>Quick Storage</h1>
				<br>
				<div class="link"><a href="identification.php">FacialID</a></div>
				<div class="link"><a href="IDupload.php">FileUpload</a></div>
			</div>
		</div>

		
		
			<?php
    if (isset($_FILES['upload'])) {
        //todo: handle the uploaded file
        echo "Your file was uploaded successfully";
    } else {
    ?>
        <form action="FileStore.php" method="post" enctype="multipart/form-data">
            <label for="upload">Select your ID to upload</label>
            <input type="file" name="upload" id="upload"><br/>
            <input type="submit" name="submit" value="Upload">
        </form>
    <?php
    }
?>
				
			
		</body>
</html>