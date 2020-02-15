<?php
$conn = new mysqli('localhost', 'root', '', 'masenocu_db');
//
// $conn = new mysqli('localhost', 'id12540611_masenocu', 'masenocu', 'id12540611_masenocu_db');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

 ?>
