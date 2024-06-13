<?php
	
	session_start();

	$username=$_SESSION['username'];

	error_reporting(0);

	include("db_config.php");

	class UsernameId extends Covid_19_db
	{

		public function retriveName($username)
		{
			$con=$this->connect();

			$query=mysqli_query($con,"select * from registration where username='$username'");

			while($res=mysqli_fetch_array($query))
			{
				$fname=$res['fname'];
				$lname=$res['lname'];

				$fullname=$fname." ".$lname;

			}

			return $fullname;

		}

		public function retriveUserId($username)
		{

			$con=$this->connect();

			$query=mysqli_query($con,"select * from registration where username='$username'");

			while($res=mysqli_fetch_array($query))
			{
				$userid=$res['userid'];
			}

			return $userid;

		}

	}

	$ob = new UsernameId();

	$fullname=$ob->retriveName($username);

	$userid=$ob->retriveUserId($username);
	
?>