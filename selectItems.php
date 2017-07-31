<?php

require_once 'database-connect.php';

function chooseDonuts(){
    $username = "cracker";
    $password = "1";
    $hostname = "localhost";
    $database = "cracker";

//PDO
//    try {
//        $conn = new PDO("mysql:host=$hostname;dbname=cracker", $username, $password);
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//        $stmt = $conn->prepare("SELECT * FROM cookies");
//        $stmt->execute();
//        return ($stmt->fetchAll());
//    }
//    catch(PDOException $e) {
//        echo "Error: " . $e->getMessage();
//    }

//MySQLi Object-Oriented
    try {
        $conn = new mysqli( $hostname, $username, $password, $database);
//        $sql = "SELECT *, image.title AS img_title, cookies.title AS title FROM cookies LEFT JOIN image ON image.id = cookies.id";
        $sql = "SELECT * FROM cookies";
        $result = $conn->query($sql);

        $rows = array();

        while( $row = $result->fetch_assoc() ) {
            $rows[] = $row;
        }
//        var_dump($rows);
        return $rows;
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return '';
}
















