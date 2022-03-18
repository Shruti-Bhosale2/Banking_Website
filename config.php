<?php

	$servername = "localhost";
	$username = "root";
	$password = "ezFYKIIMqs#3";
	$dbname = "BANK_DATA";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?> 