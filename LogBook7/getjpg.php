<?php

  header("Content-type: image/jpeg");

  $servername = 'localhost';
  $dbname = 'phpmyadmin';
  $username = 'root';
  $password = '12345';

  $connect = mysqli_connect($servername, $username, $password, $dbname);

  $sql = "SELECT image FROM monster WHERE id='" . $_GET['id'] ."';";
	
  $result = mysqli_query($connect, $sql);
  $row = mysqli_fetch_array($result);
  
  $jpg = $row["image"];

  echo $jpg;
?>
