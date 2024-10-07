<?php

$serverName = "localhost";
$username = "root";
$password = "";
// $dbname = "contractsDB";
$dbname = "brightsparkads";

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  // echo "Connection successful...";
}
