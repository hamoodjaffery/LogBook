<?php

  header("Content-type: audio/wav");

  $servername = 'localhost';
  $db_name = 'db1_21906325';
  $username = 'root';
  $password = '';

  $conn = mysqli_connect($servername, $username, $password, $db_name);

  $id = $_GET['id'];
  $sql = "SELECT audio FROM monster WHERE id= '$id'";

  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $audio = $row["audio"];

  echo $audio;
?>