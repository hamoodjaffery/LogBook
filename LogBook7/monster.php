<?php
  if (isset($_POST['submit']))
  {
    $servername = 'localhost';
    $db_name = 'db1_21906325';
    $username = 'root';
    $password = '';

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    // Obtain the file sent to the server within the response.
    $image = $_FILES['monsterimage']['tmp_name'];
    $audio = $_FILES['monsteraudio']['tmp_name'];

    // Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));


    $name = $_POST['txtname'];

    $sql = "INSERT INTO monster";
    $sql .= "(Name, Image, Audio) ";
    $sql .= "VALUES ('$name', '$imagedata','$audiodata');";


    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
  }
  else
  {
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<h2>Monster Details</h2>
<form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
 Monster name :
 <input type="text" name="txtname" size="15" class="form-control" />
 </br></br>
 Monster image :
 <input  type="file" name="monsterimage" accept="image/jpeg" class="form-control" />
 </br></br>
 Monster Sound :
 <input  type="file" name="monsteraudio" accept="audio/wav" class="form-control"  />
 </br></br>
 <input type="submit" name = "submit" class="btn btn-default" value="Save"/>
</form>
</body>
</html>
<?php } ?>