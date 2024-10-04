<?php

require_once './connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $contract_name = $_POST['contract_name'];
  $contract_details = $_POST['contract_details'];
  $start_date = $_POST['start_date'];
  $end_date = $_POST['end_date'];
  $contract_fee = $_POST['contract_fee'];
  $customer_name = $_POST['customer_name'];
  $customer_email = $_POST['customer_email'];
  $customer_mobile = $_POST['customer_mobile'];

  $sql = "UPDATE contracts SET contract_name='$contract_name', contract_details='$contract_details', start_date='$start_date', end_date='$end_date', contract_fee='$contract_fee', customer_name='$customer_name', customer_email='$customer_email', customer_mobile='$customer_mobile' WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Contract updated successfully');</script>";
    echo "<script>window.location.href='contract_list.php';</script>";
  } else {
    echo "Error updating contract: " . $conn->error;
  }
}

$conn->close();
