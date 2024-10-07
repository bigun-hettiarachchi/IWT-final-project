<?php
$con = new mysqli("localhost", "root", "", "brightsparkads");

if ($con->connect_error) {
    die("connection Faild" . $con->connect_error);
}
