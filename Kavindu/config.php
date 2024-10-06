<?php
$con = new mysqli("localhost", "root", "", "project");

// Check for connection errors
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>