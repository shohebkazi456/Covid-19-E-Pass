<?php

	include("../DB Files/db_config.php");

	class RemoveUser extends Covid_19_db
	{
		public function getId()
		{
			$id=$_GET['id'];
			return $id;
		}

		public function removeUser()
		{
			$con=$this->connect();
			
			$id=$this->getId();
			
			mysqli_query($con,"delete from registration where userid='$id'");

			header('location:remove_users.php');

		}

	}
	
	$ob = new RemoveUser();

	$ob->removeUser();

?>