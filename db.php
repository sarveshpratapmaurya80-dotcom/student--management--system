<?php

$host = "YOUR_AIVEN_HOST";
$port = 12345;
$user = "avnadmin";
$password = "YOUR_AIVEN_PASSWORD";
$database = "studentdb";

$conn = new mysqli(
    $host,
    $user,
    $password,
    $database,
    $port
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>