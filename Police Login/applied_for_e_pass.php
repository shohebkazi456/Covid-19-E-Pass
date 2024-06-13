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

			<h5>Welcome Police</h5>
		
			<a href="police_dashboard.php"><button type="button" style="margin-top: -45px; width: 15%; float: right;" class="btn btn-outline-danger">Go to Dashboard</button></a>

		</div>

		<br>

		<div class="container">
			
			<div class="table-responsive">

			<h5 style="text-align: center;">Applied for E-Pass</h5><br>
				
				<table class="table table-secondary table-bordered table-striped table-hover" style="color: black;">
				    
				    <thead class="thead-dark">

				      <tr>
				      	<th>Sr. No</th>
				        <th>User Id</th>
				        <th>Name</th>
				        <th>Email</th>
				        <th>Username</th>			        
				      </tr>

				    </thead>
				    
				    <tbody>
				              
				        <?php

							include("../DB Files/db_config.php");
							
							class EpassUsers extends Covid_19_db
							{

								public function appliedUsers()
								{

									$con=$this->connect();

									$query1=mysqli_query($con,"select userid from registration");

									$query2=mysqli_query($con,"select userid from e_pass group by userid");

									$i=1;


									while($res=mysqli_fetch_array($query1))
									{
										
										$userid=$res['userid'];


										while($res=mysqli_fetch_array($query2))
										{
											
											$userid=$res['userid'];


											$query3=mysqli_query($con,"select * from registration where userid='$userid'");

											while($res=mysqli_fetch_array($query3))
											{

												echo "<tr><td>".$i."</td>";
												echo "<td>".$res['userid']."</td>";

												$fname=$res['fname'];
												$lname=$res['lname'];
												
												$fullname=$fname." ".$lname;
												echo "<td>".$fullname."</td>";	
												echo "<td>".$res['email']."</td>";
												echo "<td>".$res['username']."</td></tr>";

												$i++;

											}

											
										}

									}




								}

							}

							$ob = new EpassUsers();

							$ob->appliedUsers();



						?>

				    </tbody>

			  </table>

			</div>	

		</div>

		<br>

</body>
</html>