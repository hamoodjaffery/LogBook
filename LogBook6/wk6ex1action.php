<?php
	
	$mysqli = new mysqli("localhost","root","12345","test");

	// Check connection
	if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
	}

	$sql = "INSERT INTO Test (`name`,`email`,`phone_number`) values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";
	// Connect to server and select database
	$result = $mysqli->query($sql);
	// Execute sql statement		
	$sql = 'SELECT * from Test';
	
	// Execute sql statement
	$result = $mysqli->query($sql);
	while ($row = mysqli_fetch_assoc($result))
	{
		echo "$row[name]  $row[email]  $row[phone_number] <br/>";
	}

	echo '<a href="wk6ex1.html">back</a>'
?>