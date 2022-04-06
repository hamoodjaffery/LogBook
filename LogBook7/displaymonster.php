<?php
  
  $servername = 'localhost';
  $dbname = 'phpmyadmin';
  $username = 'root';
  $password = '12345';

  $connect = mysqli_connect($servername, $username, $password, $dbname);

 $sql = "SELECT id, name from monster;";

 $result = mysqli_query($connect, $sql);
 $row = mysqli_fetch_array($result);
 while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td><a href='getwav.php?id=" . $row['id']. "'>Click to play</a></td>";
    echo "<td><img src='getjpg.php?id=" . $row['id']. "' height='100' width='100'</td>";
    echo "</tr>";   
  }

 mysqli_close($connect);
?>