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

 		input[type="text"],input[type="password"],input[type="email"],input[type="radio"],input[type="number"],#bgcolorid
 		{
			color: white;
 			background: transparent;
 		}

 		option{
 			color: black;
 			background-color: white;
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

		<center>

		<div class="container">

		<form method="post" style="width: 50%;">

			<div class="form-group">
				
				<label><h5>Apply for E-Pass</h5></label>

			</div>
			
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Enter your fullname" autocomplete="off" required="">
			</div>

			<div class="form-group" style="float: left;">
				
				<label>Gender :</label>&nbsp;&nbsp;
				<input type="radio" name="gender" value="Male">Male &nbsp;
				<input type="radio" name="gender" value="Female">Female

			</div>

			<div class="form-group">
				<input type="number" class="form-control" name="age" placeholder="Enter your age" required="" autocomplete="off">
			</div>

			<div class="form-group">
				
				<input type="number" class="form-control" name="phoneno" placeholder="Enter your phone no" required="" autocomplete="off">

			</div>

			<!-- <div class="form-group">
				
				<input type="email" class="form-control" name="email" placeholder="Enter your email id" required="" autocomplete="off">

			</div> -->

			<div class="form-group" style="float: left;">
				
				<label>Medical Certificate :</label>&nbsp;&nbsp;
				<input type="radio" name="mcertificate" value="Yes">Yes &nbsp;
				<input type="radio" name="mcertificate" value="No">No

			</div>

			<div class="form-group">
				
				<select id="bgcolorid" name="relation" class="form-control" required="">
					<option value="" disabled="" selected="">------ Select Relation (Of the Person Applying for E-Pass) ------</option>
					<option value="Myself">Myself</option>
					<option value="Husband">Husband</option>
					<option value="Wife">Wife</option>
					<option value="Son">Son</option>
					<option value="Daughter">Daughter</option>
					<option value="Mom">Mom</option>
					<option value="Dad">Dad</option>
					<option value="Brother">Brother</option>
					<option value="Sister">Sister</option>
					<option value="Friend">Friend</option>
				</select>

			</div>

			<div class="form-group">
				
				<textarea id="bgcolorid" rows="3" class="form-control" name="address" placeholder="Enter your address" required="" autocomplete="off"></textarea>

			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="currentcity" placeholder="Enter your current city" autocomplete="off" required="">
			</div>

			<div class="form-group">
				<input type="text" class="form-control" name="destinationcity" placeholder="Enter your destination city" autocomplete="off" required="">
			</div>


			<button style="height: 40px;" type="submit" name="epass_submit_btn" class="btn btn-outline-success">Submit</button>

			<button style="height: 40px; margin-top: 10px;" type="reset" class="btn btn-outline-danger">Cancel</button>

			<br><br><br>

		</form>	

	</center>

	</div>

</body>
</html>

<?php

	class E_Pass extends Covid_19_db
	{

		public function insertEpass($userid,$username,$name,$gender,$age,$phoneno,$mcertificate,$relation,$address,$currentcity,$destinationcity)
		{
			
			$con=$this->connect();

			$status="Pending";

			mysqli_query($con,"insert into e_pass values ($userid,'$username','','$name','$gender','$age','$phoneno','$mcertificate','$relation','$address','$currentcity','$destinationcity','$status')");

		}
		
	}

	$ob = new E_Pass();

	extract($_POST);

	if(isset($epass_submit_btn))
	{
		$ob->insertEpass($userid,$username,$name,$gender,$age,$phoneno,$mcertificate,$relation,$address,$currentcity,$destinationcity);

		echo '<center>E-Pass Form Applied Successfully</center><br><br>';
		header('refresh:1,url=apply_for_e_pass.php');

	}


?>