<?php

require_once './connection.php';

$sql = "SELECT * FROM contracts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["contract_name"] . "</td>";
    echo "<td>" . $row["contract_details"] . "</td>";
    echo "<td>" . $row["start_date"] . "</td>";
    echo "<td>" . $row["end_date"] . "</td>";
    echo "<td>" . $row["contract_fee"] . "</td>";
    echo "<td>" . $row["customer_name"] . "</td>";
    echo "<td>" . $row["customer_email"] . "</td>";
    echo "<td>" . $row["customer_mobile"] . "</td>";

    echo "<td> <center>";
    echo "<button onClick=\"redirectToUpdateForm(" . $row["id"] . ")\" class='edit-btn'>Edit</button>";
    echo "<button onClick=\"deleteContract(" . $row["id"] . ")\" class='delete-btn'>Delete</button>";
    echo "</center></td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='10'>No contracts available</td></tr>";
}

$conn->close();
