<?php

$username = "root";
$password = "1";
$hostname = "localhost";
$database = "cracker";

//mysqli method
$mysqli = new mysqli( $hostname, $username, $password, $database);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

























