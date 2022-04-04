<?php
	// Connecting to server and select database
  $servername = 'localhost';
	$db_name = 'db1_21906325';
	$username = 'root';
	$password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);
	if (mysqli_connect_errno())
	{
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	exit();
	}

	//Sql query
	$sql = "INSERT INTO test (name,email,phone_number) ";
	$sql = $sql . " values ('{$_POST['txtName']}','{$_POST['txtEmail']}','{$_POST['txtPhoneNumber']}')";

	// Execute query
	$result = mysqli_query($conn, $sql);

	if ($result)
	{
  	echo "Record updated!<br/>";
	}
	else
	{
  	echo "Error: " . mysqli_error($conn);
	}

	//Sql query
	$sql = "SELECT * from test";

	// Execute query
	$result = mysqli_query($conn, $sql);

	//Display
	if($result)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			echo "$row[name]  $row[email]  $row[phone_number] <br/>";
		}
	}
	else
	{
		echo "Error fetching data!";
	}
?>