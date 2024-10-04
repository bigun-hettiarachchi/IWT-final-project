<?php

require_once './connection.php';

if (isset($_GET['id'])) { // Changed 'delete_id' to 'id' for consistency
  $deleteID = $_GET['id'];

  $sql = "DELETE FROM contracts WHERE id='$deleteID'";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Contract deleted');</script>";
    echo "<script>window.location.href='contract_list.php';</script>";
  } else {
    echo "Error deleting contract: " . $conn->error;
  }
}

$conn->close();
