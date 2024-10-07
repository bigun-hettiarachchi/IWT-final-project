<?php
    require 'config.php';

    $email = $_POST["email"]; 

    $sql = "DELETE FROM support WHERE email='$email'";

    if($con->query($sql)) {
        header("Location: Contact Us.php");
        exit();
    } else {
        echo "Delete failed: " . $con->error;
    }

    $con->close();
?>
