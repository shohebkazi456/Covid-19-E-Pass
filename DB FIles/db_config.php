<?php

	error_reporting(0);

	class Covid_19_db
	{

		private $host="localhost:3306";
		private $user="root";
		private $pass="";
		private $db="covid_19_db";

		public function connect()
		{
			$con=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
			return $con;
		}

	} // end of db class


	// Below code is for Database connectivity checking


	// $ob = new Covid_19_db();

	// $con=$ob->connect();

	// if($con)
	// {
	// 	echo "Connected";
	// }
	// else
	// {
	// 	echo "Not Connected";
	// }


?>