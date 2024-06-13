<?php

	include("../DB Files/username_retrieve.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">  

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 

  	<!-- for slider start scirpt -->

		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		  
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  	<!-- end script of slider -->

 	<link rel="stylesheet" type="text/css" href="style.css">

 	<style type="text/css">
 		
 		html,body{
 			background-color: #303030;
 			color: white;
			font-family: verdana;
 		}

 		.carousel-inner img {
		      width: 100%;
		      height: 500px;
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
		
			<a href="../logout.php"><button type="button" style="margin-top: -45px; width: 15%; float: right;" class="btn btn-outline-danger">Logout</button></a>

			<br>

			<div id="demo" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			    <li data-target="#demo" data-slide-to="3"></li>
			    <li data-target="#demo" data-slide-to="4"></li>
			    <li data-target="#demo" data-slide-to="5"></li>
			  </ul>

			  <!-- The slideshow -->
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <img src="../Images/pic1.jpg">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/pic2.jpg">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/pic3.jpg">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/pic4.jpg">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/pic5.jpg">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/pic6.jpg">
			    </div>

			  </div>

			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>

			</div> <!-- end of slider -->

		</div> <!-- end of container div -->

			<br><br>

		<div class="container">

			<center>

			<div class="row">
				
				<div class="col-sm-6 col-md-6 col-lg-6">

					<a href="apply_for_e_pass.php"><button type="button" style="height: 250%; width: 100%; font-size: 28px; font-weight: bold;" class="btn btn-outline-info">Apply for E-Pass</button></a>

				</div>

				<div class="col-sm-6 col-md-6 col-lg-6">

					<a href="e_pass_status.php"><button type="button" style="height: 250%; width: 100%; font-size: 28px; font-weight: bold;" class="btn btn-outline-info">E-Pass Status</button></a>

				</div>

			</div><!--  end of row -->

			<br><br><br><br><br>

			<div class="row">
				
				<div class="col-sm-6 col-md-6 col-lg-6">

					<a href="term_and_condition.php"><button type="button" style="height: 250%; width: 100%; font-size: 28px; font-weight: bold;" class="btn btn-outline-info">Term and Condition</button></a>

				</div>

				<div class="col-sm-6 col-md-6 col-lg-6">

					<a href="contact_us.php"><button type="button" style="height: 250%; width: 100%; font-size: 28px; font-weight: bold;" class="btn btn-outline-info">Contact Us</button></a>

				</div>

			</div><!--  end of row -->


			</center>

		</div> <!-- end of container -->

		<br><br><br><br><br>

		<div class="container-fluid">

			<div class="row">
				
				<div class="col-sm-5 col-md-5 col-lg-5">

					<div id="demo1" class="carousel slide" data-ride="carousel">

					  <!-- Indicators -->
					  <ul class="carousel-indicators">
					    <li data-target="#demo1" data-slide-to="0" class="active"></li>
					  </ul>

					  <!-- The slideshow -->
					  <div class="carousel-inner">

					    <div class="carousel-item active">
					      <img src="../Images/symptoms.png">
					    </div>

					  </div>

					</div> 

				</div> <!-- end of column -->


				<div class="col-sm-7 col-md-7 col-lg-7">

					<div id="demo2" class="carousel slide" data-ride="carousel">

			  <!-- Indicators -->
			  <ul class="carousel-indicators">
			    <li data-target="#demo2" data-slide-to="0" class="active"></li>
			    <li data-target="#demo2" data-slide-to="1"></li>
			    <li data-target="#demo2" data-slide-to="2"></li>
			    <li data-target="#demo2" data-slide-to="3"></li>
			  </ul>

			  <!-- The slideshow -->
			  <div class="carousel-inner">

			    <div class="carousel-item active">
			      <img src="../Images/whoimg1.png">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/whoimg2.png">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/whoimg3.png">
			    </div>

			    <div class="carousel-item">
			      <img src="../Images/whoimg4.jpg">
			    </div>

			  </div>

			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo2" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>

			</div> <!-- end of slider -->

				</div> <!-- end of column -->

			</div> <!-- end of row -->

		</div> <!-- end of container-fluid -->

		<br>

</body>
</html>