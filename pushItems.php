<?php

require_once('database-connect.php');

$title = $_POST['title'];
$weight = $_POST['weight'];
$cost = $_POST['cost'];
$description = $_POST['description'];


//PDO
try {
    $conn = new PDO("mysql:host=$hostname;dbname=cracker", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO cookies (title, weight, cost, description) VALUES ('$title', '$weight', '$cost', '$description')";
    $conn->exec($sql);

    echo "<br>New record created successfully. Last inserted title is: " . $title;

}
catch(PDOException $e) {
    echo "Database Connection failed: " . $e->getMessage();
}


//MySQLi Object-Oriented
//try {
//    $conn = new mysqli( $hostname, $username, $password, $database);
//    $sql = "INSERT INTO cookies (title, weight, cost, description) VALUES ('$title', '$weight', '$cost', '$description')";
//    $conn->query($sql);
//    echo "<br> Last inserted item is: " . "<strong>$title</strong>" ;
//}
//catch(PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//}























