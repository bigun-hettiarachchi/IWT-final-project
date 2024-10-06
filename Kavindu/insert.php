
<?php
require 'config.php';

// Retrieve form data
$name = $_POST['title'];
$message = $_POST['message'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Insert query
$sql = "INSERT INTO ad_manegement (title,message, start_date, end_date) VALUES ('$name','$message','$start_date', '$end_date')";

// Execute the query
if ($con->query($sql)) {
    // Redirect back to the ManageAds.html page
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $con->error;
}

// Close the connection
$con->close();
?>
