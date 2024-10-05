<?php
    require 'config.php';

    $U_name=$_POST["name"];
    $U_email=$_POST["email"];
    $U_mobile=$_POST["mobile"];
    $U_message=$_POST["message"];

    $sql="INSERT INTO support VALUES ('$U_name','$U_email','$U_mobile','$U_message')";
    if($con->query($sql))
    {
        header("Location: Contact Us.php");
        exit();
    }
    else{
        echo "Error".$con->error;
    }
    $con->close();
?>