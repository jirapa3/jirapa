<?php
// เชื่อมต่อฐานข้อมูล 4003db
$conn = new mysqli("localhost:3306", "root", "", "4003db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// ตั้งค่าให้อ่านภาษาไทยได้ถูกต้อง
mysqli_set_charset($conn, "utf8");
?>