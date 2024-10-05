<?php
    $con=new mysqli("localhost","root","","project");

    if($con->connect_error)
    {
        die("connection Faild".$con->connect_error);
    }
?>