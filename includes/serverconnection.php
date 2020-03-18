<?php
// $conn = new mysqli('localhost', 'masenocu', '$aAYhF0GzbsB', 'masenocu_db');
//
$conn = new mysqli('localhost', 'root', '', 'masenocu_db');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 ?>
