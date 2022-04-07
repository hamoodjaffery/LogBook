<?php	

// Connect to server and select database
$mysqli = new mysqli("localhost","root","12345","test");
// Check connection
if ($mysqli -> connect_errno) 
{
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
	
	$sql = "SELECT * from test where name = '$_GET[id]' ";
	// Execute query
	$row = mysqli_fetch_assoc($result);
?>

<html>
<body>
<form action="wk6ex2action.php" method="post">

	Name :
	<input type=text name=txtname value="<?php echo $row["name"] ?>" />
	</br>
	Phone number :
	<input type=text name=txttelno value="<?php echo $row["phone_number"] ?>" />
	</br>
	Email :
	<input type=text name=txtemail value="<?php echo $row["email"] ?>" />
	</br>
	<input type=submit name=btnsubmit value="save"/>
</form>
</body>
</html>