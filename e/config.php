<?php
$conn = new mysqli("localhost", "root", "รหัสผ่านจริงของเซิร์ฟเวอร์", "4002db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
