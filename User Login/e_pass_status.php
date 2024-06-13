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

			<h5 style="text-align: center;">E-Pass Status</h5><br>
			
			<!-- <div class="table-responsive"> -->
				
				<table class="table table-secondary table-bordered table-striped table-hover" style="color: black;">
				    
				    <thead class="thead-dark">

				      <tr>
				        <th>User Id</th>
				        <th>Username</th>
				        <th>E-Pass Id</th>
				        <th>Name</th>
				        <th>Gender</th>
				        <th>Age</th>
				        <th>Phone No</th>
				        <th>Medical Certificate</th>
				        <th>Relation</th>
				        <th>Current City</th>
				        <th>Destination City</th>
				        <th>Status</th>			        
				      </tr>

				    </thead>
				    
				    <tbody>
				              
				        <?php

							class E_Pass_Status extends Covid_19_db
							{

								public function retrieveEpassStatus($userid,$username)
								{

									$con=$this->connect();

									$query=mysqli_query($con,"select * from e_pass where userid='$userid' and username='$username'");

									while($res=mysqli_fetch_array($query))
									{

										echo "<tr><td>".$res['userid']."</td>";
										echo "<td>".$res['username']."</td>";
										echo "<td>".$res['e_pass_id']."</td>";
										echo "<td>".$res['name']."</td>";
										echo "<td>".$res['gender']."</td>";
										echo "<td>".$res['age']."</td>";
										echo "<td>".$res['phoneno']."</td>";
										echo "<td>".$res['m_certificate']."</td>";
										echo "<td>".$res['relation']."</td>";
										echo "<td>".$res['c_city']."</td>";
										echo "<td>".$res['d_city']."</td>";
										echo "<td>".$res['status']."</td></tr>";


									}

								}

							}

							$ob = new E_Pass_Status();

							$ob->retrieveEpassStatus($userid,$username);

						?>

				    </tbody>

			  </table>

			<!-- </div>	 -->

		</div>

		<br>

</body>
</html>