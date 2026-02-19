<?php
$conn = new mysqli("103.114.201.133", "root", "ใส่รหัสผ่านตรงนี้", "4002db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn, "utf8mb4");

echo "เชื่อมต่อสำเร็จ";
?>
