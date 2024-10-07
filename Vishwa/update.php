<?php
require 'config.php';

$email = $_POST["email"]; // Primary key email
$U_name = $_POST["name"];
$U_mobile = $_POST["mobile"];
$U_message = $_POST["message"];

if (empty($U_name) || empty($U_mobile) || empty($U_message)) {
    echo "All fields are required";
} else {
    $sql = "UPDATE support SET name='$U_name', mobile='$U_mobile', message='$U_message' WHERE email='$email'";

    if ($con->query($sql)) {
        header("Location: Contact Us.php");
        exit();
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}
