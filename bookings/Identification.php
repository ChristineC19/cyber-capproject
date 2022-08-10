<!doctype html>
<html lang="en">
	<head>
	<title>Facial ID</title>
			<link rel="stylesheet" href="./style/style.css"/>
			<meta charset="utf-8">
			
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			  <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
			 
 
  
	
	</head>
	<body>

			<div id="header">

					<div id="header2">
						<h1>Quick Storage</h1>
						<br>
						<div class="link"><a href="../index.html">Home</a></div>
						<div class="link"><a href="booking.php">Bookings</a></div>
						<div class="link"><a href="../contact/contact.html">Contact</a></div>
						<div class="link"><a href="signin.php">Login</a></div>
						
					</div>
			</div>
	


	<?php 
		
		if(isset($_GET['error']))
		{
			echo "<h4>Error - the username and/or password are incorrect</h4>";
		}
	?>
	   <div class="container">
		<h1 class="text-center">Upload Account Holder Facial Image</h1>
	   
		<form method="POST" action="storeimage.php">
			<div class="row">
				<div class="col-md-6">
					<div id="my_camera"></div>
					<br/>
					<input type=button value="Take Snapshot" onClick="take_snapshot()">
					<input type="hidden" name="image" class="image-tag">
				</div>
				<div class="col-md-6">
					<div id="results">Your image will appear here, Submit Image or retake photo...</div>
				</div>
				<div class="col-md-12 text-center">
					<br/>
					<button class="btn btn-success">Submit</button>
				</div>
			</div>
		</form>
		</div>
		
  
	<!-- Configure a few settings and attach camera -->
	<script language="JavaScript"> 
		
		Webcam.set({
			width: 300,
			height: 300,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
	  
		Webcam.attach( '#my_camera' );
	  
		function take_snapshot() {
			Webcam.snap( function(data_uri) {
				$(".image-tag").val(data_uri);
				document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
			} );
		}
		</script>
		<script src="js/script.js"></script>
		
</body>
</html>



