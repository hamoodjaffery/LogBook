<?php

 $id = $_GET['id'];

 setcookie('id', $id); 

    // Connect to server and select database

	$mysqli = new mysqli("localhost","root","12345","test");

    if(mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }   

  $sql = "SELECT * from test";

    // Execute query
    $result = mysqli_query($mysqli, $sql); 

    $row = mysqli_fetch_assoc($result);
?>
<html>
<body>
<form action= "wk6ex2action.php" method ="post">

    Name :
    <input type=text name=txtname value="<?php echo $row['name'] ?>" readonly />
    </br>

    Phone number :
    <input type=text name=txttelno value="<?php echo $row['phone_number'] ?>" />
    </br>

    Email :
    <input type=text name=txtemail value="<?php echo $row['email'] ?>" />
    </br>
    <input type=submit name=btnsubmit value="save"/>

</form>
</body>
</html>