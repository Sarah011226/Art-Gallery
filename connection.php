<?php
	
	$servername = "localhost";
	$username = "ddd";
	$password = "123";
	$dbname = "ArGalla";

	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($con->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}

?>
