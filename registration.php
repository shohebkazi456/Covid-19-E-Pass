<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 

 	<link rel="stylesheet" type="text/css" href="style.css">

 	<style type="text/css">
 		
 		html,body{
 			background-color: #303030;
 			color: white;
			font-family: verdana;
 		}

 		input[type="text"],input[type="password"],input[type="email"]
 		{
			color: white;
 			background: transparent;
 		}

 	</style>
 	
</head>
<body>

	<br><br>

	<center>

		<div class="container-fluid">
			<h1>Covid-19 E-Pass</h1>
		</div>

		<br>

		<div class="container">

		<form method="post" style="width: 50%;">

			<div class="form-group">
				
				<label><h5>Register Here</h5></label>

			</div>
			
			<div class="form-group">
				
				<input type="text" class="form-control" name="fname" placeholder="Enter your first name" required="" autocomplete="off">

			</div>

			<div class="form-group">
				
				<input type="text" class="form-control" name="lname" placeholder="Enter your last name" required="" autocomplete="off">

			</div>

			<div class="form-group">
				
				<input type="email" class="form-control" name="email" placeholder="Enter your email id" required="" autocomplete="off">

			</div>

			<div class="form-group">
				
				<input type="text" class="form-control" name="username" placeholder="Enter your username" required="" autocomplete="off">

			</div>

			<div class="form-group">
				
				<input type="password" class="form-control" name="password" placeholder="Enter your password" required="" autocomplete="off">

			</div>

			<button style="height: 40px;" type="submit" name="register" class="btn btn-outline-success">Register</button>

			<a href="index.php"><button type="button" style="margin-top: 10px; height: 40px;" class="btn btn-outline-info">E-Pass Login Here</button></a>
			

		</form>	

	</center>

	</div>

</body>
</html>

<?php

	error_reporting(0);
	
	include("DB Files/db_config.php");

	class Registration extends Covid_19_db
	{

		public function insertRecordRegister($fname,$lname,$email,$username,$password)
		{
			$con=$this->connect();

			mysqli_query($con,"insert into registration values ('','$fname','$lname','$email','$username','$password')");
		}

	}// end of Registration class

	$ob = new Registration();

	extract($_POST);

	if(isset($register))
	{
		$ob->insertRecordRegister($fname,$lname,$email,$username,$password);
		
		echo '<br><center>User Registered successfully</center>';
		header('refresh:1,url=index.php');
		
	}
	

?>