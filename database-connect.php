<?php

$username = "root";
$password = "";
$hostname = "localhost";
$database = "cracker";

//PDO
//try {
//    $conn = new PDO("mysql:host=$hostname;dbname=cracker", $username, $password);
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//}
//catch(PDOException $e) {
//    echo "Database Connection failed: " . $e->getMessage();
//}


//MySQLi Object-Oriented
$conn = new mysqli( $hostname, $username, $password, $database);

if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




























