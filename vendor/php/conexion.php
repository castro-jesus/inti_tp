<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "123";
$dbName = "inti_sistema";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn){
    die ("connection failed: " . mysqli_connect_error());
}

?>