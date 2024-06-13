<?php

	include("../DB Files/username_retrieve.php");
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 

 	<link rel="stylesheet" type="text/css" href="../style.css">

 	<style type="text/css">
 		
 		html,body{
 			background-color: #303030;
 			color: white;
			font-family: verdana;
 		}

 	</style>

</head>
<body>

	<br><br>

		<center>

			<div class="container-fluid">
				<h1>Covid-19 E-Pass</h1>
			</div>

		</center>

		<br>

		<div class="container-fluid">

			<h5>Welcome <?php echo $fullname; ?></h5>
		
			<a href="user_dashboard.php"><button type="button" style="margin-top: -45px; width: 15%; float: right;" class="btn btn-outline-danger">Go to Dashboard</button></a>

		</div>

		<br>



		<div class="container">

			<center><label><h2>Contact Us</h2></label></center>
			
			<br><br>

			<p style="font-size: 25px;">
				Anvistar IT Training and Services<br>
				Near Manaji Road, Narhe, Pune<br>
				Ph No : 9975612580<br>
				Email Id : technicalamit1@gmail.com
			</p>


		</div>

	<br><br>
	

</body>
</html>