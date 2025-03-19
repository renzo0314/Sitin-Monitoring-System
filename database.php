<?php

$hostName = "localhost";  // my database host
$dbUser = "root";   // my database username
$dbPassword = "";   // my database password
$dbName = "monitoring";   // my database name

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die ("something went wrong!! ");
}
?>