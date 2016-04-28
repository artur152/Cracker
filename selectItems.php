<?php

require_once 'database-connect.php';

    function chooseDonuts(){
        $username = "root";
        $password = "1";
        $hostname = "localhost";
//        $database = "cracker";

//PDO
    try {
        $conn = new PDO("mysql:host=$hostname;dbname=cracker", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM cookies");
        $stmt->execute();

        return ($stmt->fetchAll());
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

//MySQLi Object-Oriented
//    try {
//        $conn = new mysqli( $hostname, $username, $password, $database);
//        $sql = "SELECT * FROM cookies";
//        $conn->query($sql);
////        return $conn->fetch_assoc();
////        echo "<br> Last selected item is: " . "<strong>$title</strong>" ;
//    }
//    catch(PDOException $e) {
//        echo "Connection failed: " . $e->getMessage();
//    }


    }


