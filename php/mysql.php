<?php
  $conn = new mysqli("mysql-db", "root", "minh123", "minh123");
  
  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database MySQL.<br>';


  $conn->close();
?>
