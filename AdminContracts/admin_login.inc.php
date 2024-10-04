<?php

require_once './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $email = $_POST["adminEmail"];
  $password = $_POST["adminPwd"];

  $sql = "SELECT * FROM admin_details WHERE adminEmail='$email' AND adminPwd='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    echo "<script>alert('Login successful');</script>";
    echo "<script>window.location.href='admin_dashboard.php';</script>";
  } else {
    echo "<script>alert('Login failed!');</script>";
    echo "<script>window.location.href='admin_login.php';</script>";
  }
}

$conn->close();
