<?php
require 'config.php';

$id = $_POST['ad_id'];

// Delete query
// Delete query
$sql = "DELETE FROM ad_manegement WHERE ad_id='$id'"; // Change 'id' to 'ad_id'


if ($con->query($sql)) {
    header("Location: create.php");
    exit();
} else {
    echo "Error: " . $con->error;
}

$con->close();
