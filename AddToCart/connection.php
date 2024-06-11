<?php


	$con = mysqli_connect("localhost", "phpuser", "1234qwer", "harvesto_database");
	
	if(!$con)
		{
			die('Could not connect : '.mysqli_error($con));
		}
			
?>
