<?php

//include 'database-connect.php';
//$username = "root";
//$password = "1";
//$hostname = "localhost";
//$database = "cracker";

require_once('database-connect.php');

$title = $_POST['title'];
$weight = $_POST['weight'];
$cost = $_POST['cost'];
$description = $_POST['description'];

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO cookies (title, weight, cost, description) VALUES ('$title', '$weight', '$cost', '$description')";
    $conn->exec($sql);
    echo "New record created successfully. Last inserted title is: " . $title;
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


