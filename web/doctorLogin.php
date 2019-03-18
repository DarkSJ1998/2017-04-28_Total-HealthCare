<?php

		include('connection.php');
	
		$emailID = $_POST['email'];
		$password = $_POST['password'];
	
		$query = "SELECT * FROM `doctorlogin` WHERE `emailID` = '$emailID' AND `password` = '$password'";

		$result = $connection->query($query);
		if ($result->num_rows<=0 ) {
			echo "<script> alert('Wrong Email ID/Password!') </script>";
			header("location: /web/wrongDetails.html");
			die; 
			}

		else {
			$row = $result->fetch_row();
			echo "<script> alert('Welcome!') </script>";
			header("location: doctorPanel.php");
			}
	
?>