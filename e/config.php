<?php
session_start();

$conn = new mysqli("localhost", "root", "", "4002db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8mb4");
?>
