<?php
$conn = new mysqli("localhost", "jirapa_user", "123456", "4002db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
