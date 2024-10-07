<?php
require 'config.php';

$id = $_POST['ad_id'];
$name = $_POST['title'];
$message = $_POST['message'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date']; // Include end_date

// Update query
$sql = "UPDATE ad_manegement SET title='$name',message='$message', start_date='$start_date', end_date='$end_date' WHERE ad_id='$id'"; // Change 'id' to 'ad_id'


if ($con->query($sql)) {
    header("Location: create.php");
    exit();
} else {
    echo "Error: " . $con->error;
}

$con->close();
