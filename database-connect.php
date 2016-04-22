<?php
$username = "root";
$password = "1";
$hostname = "localhost";
$database = "cracker";

$db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);

$stmt = $db->prepare("INSERT INTO id, firstname, lastname FROM MyGuests");
$stmt->execute();


