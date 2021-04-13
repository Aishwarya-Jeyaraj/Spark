<?php

	$conn = mysqli_connect('localhost:8111','root','','spark');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>