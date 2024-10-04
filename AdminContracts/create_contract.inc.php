<?php

require_once "./connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Matching form names with the ones in your HTML form (snake_case)
  $contractName = $_POST["contract_name"];
  $contractDetails = $_POST["contract_details"];
  $startDate = $_POST["start_date"];
  $endDate = $_POST["end_date"];
  $contractFee = $_POST["contract_fee"];
  $customerName = $_POST["customer_name"];
  $customerEmail = $_POST["customer_email"];
  $customerMobile = $_POST["customer_mobile"];

  // Insert into your contracts table with corresponding database column names
  $sql = "INSERT INTO contracts (contract_name, contract_details, start_date, end_date, contract_fee, customer_name, customer_email, customer_mobile) 
          VALUES ('$contractName', '$contractDetails', '$startDate', '$endDate', '$contractFee', '$customerName', '$customerEmail', '$customerMobile')";

  // Check if query was successful and give appropriate response
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Contract created successfully');</script>";
    echo "<script>window.location.href='contract_list.php';</script>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
