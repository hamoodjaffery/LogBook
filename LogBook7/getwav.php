<?php

  header("Content-type: audio/wav");

  $servername = 'localhost';
  $dbname = 'phpmyadmin';
  $username = 'root';
  $password = '12345';

  $connect = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "SELECT audio FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  
  $audio = $row["audio"];

  echo $audio;
?>
