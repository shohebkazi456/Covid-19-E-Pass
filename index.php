<?php

	session_start();
	
?>
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


 		input[type="text"],input[type="password"]
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
				
				<label><h5>Login Here</h5></label>

			</div>
			
			<div class="form-group">
				
				<input type="text" class="form-control" name="username" placeholder="Enter your username" autocomplete="off" required="">

			</div>

			<div class="form-group">
				
				<input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" required="">

			</div>

			<button style="height: 40px;" type="submit" name="login" class="btn btn-outline-success">Login</button>

			<a href="registration.php"><button type="button" style="margin-top: 10px; height: 40px;" class="btn btn-outline-info">New to E-Pass Register Here</button></a>

		</form>	

	</center>

	</div>

</body>
</html>

<?php

	error_reporting(0);
	
	include("DB Files/db_config.php");

	class Login extends Covid_19_db
	{

		public function checkLogin($username,$password)
		{
			$con=$this->connect();

			$res=mysqli_query($con,"select * from registration where username='$username' and password='$password'");

			$data=mysqli_num_rows($res);

			if($data>0)
			{
				$_SESSION['username']=$username;
				echo '<br><center>User Login successfully</center>';
				header('refresh:1,url=User Login/user_dashboard.php');
			}
			else if($username=='police' && $password=='police@123')
			{
				$_SESSION['username']=$username;
				echo '<br><center>Police Login successfully</center>';
				header('refresh:1,url=Police Login/police_dashboard.php');	
			}
			else
			{
				echo '<br><center>Incorrect username or password</center>';
				header('refresh:1,url=index.php');
			}

		}

	}// end of Login class

	$ob = new Login();

	extract($_POST);

	if(isset($login))
	{
		$ob->checkLogin($username,$password);
	}


?>