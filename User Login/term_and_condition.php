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

			<center><label><h4>Terms and Conditions</h4></label></center>
			
			<br><br>

			<p>
      <b>The use of this website is subject to the following terms of use:</b><br><br>

The content of the pages of this website is for your general information and use only. It is subject to change without notice.<br><br>
This website uses cookies to monitor browsing preferences. If you do allow cookies to be used, the following personal information may be stored by us for use by third parties: [insert list of information].
Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.<br><br>
Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It shall be your own responsibility to ensure that any products, services or information available through this website meet your specific requirements.<br><br>
This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance and graphics. Reproduction is prohibited other than in accordance with the copyright notice, which forms part of these terms and conditions.
All trade marks reproduced in this website which are not the property of, or licensed to, the operator are acknowledged on the website.<br><br>
Unauthorised use of this website may give rise to a claim for damages and/or be a criminal offence.
From time to time this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s).<br><br>
Your use of this website and any dispute arising out of such use of the website is subject to the laws of England, Northern Ireland, Scotland and Wales.<br>
    </p>



		</div>

	<br><br>
	

</body>
</html>