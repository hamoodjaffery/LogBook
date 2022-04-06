<?php	

	// Connect to server and select database
  $mysqli = new mysqli("localhost","root","12345","test");
	$sql = "SELECT * from test";
	// Execute sql statement
	
?>
<html>
<body>

<?php
while ($row = mysqli_fetch_assoc($result))
{
      echo "<a href=\"wk6ex2action.php?id=$row[name]\">$row[name]</a></br>";  	
}
?>
</body>
</html