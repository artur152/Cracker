<?php

//    include 'database-connect.php';
//    require_once('database-connect.php');

function chooseDonuts(){
    $username = "root";
    $password = "1";
    $hostname = "localhost";
    $database = "cracker";

    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM cookies");
    $stmt->execute();

    return ($stmt->fetchAll());

}



