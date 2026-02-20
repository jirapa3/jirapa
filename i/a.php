<?php
// ตั้งค่าการเชื่อมต่อฐานข้อมูล
$host = "localhost";
$user = "root";       // เปลี่ยนถ้าไม่ใช่ root
$pass = "";           // ใส่รหัสผ่านถ้ามี
$db   = "4002db";

// เชื่อมต่อ
$conn = new mysqli($host, $user, $pass, $db);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลไม่สำเร็จ: " . $conn->connect_error);
}

// เพิ่มข้อมูล
if (isset($_POST['add'])) {
    $r_name = $conn->real_escape_string($_POST['r_name']);
    if (!empty($r_name)) {
        $conn->query("INSERT INTO regions (r_name) VALUES ('$r_name')");
    }
    header("Location: a.php");
    exit();
}

// ลบข้อมูล
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM regions WHERE r_id = $id");
    header("Location: a.php");
    exit();
}

// ดึงข้อมูล
$result = $conn->query("SELECT * FROM regions ORDER BY r_id ASC");
?>

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>งาน i - จิราภา บุญสมยา (นิ้ง)</title>
<style>
body { font-family: Tahoma; background:#eee; }
.container { width:600px; margin:auto; }
h1 { text-align:center; }
input[type=text] { width:70%; padding:5px; }
button { padding:5px 10px; }
table { width:100%; border-collapse: collapse; margin-top:20px; }
th, td { border:1px solid #000; padding:8px; text-align:center; }
th { background:#ddd; }
.delete { color:red; text-decoration:none; }
</style>
</head>
<body>

<div class="container">
<h1>งาน i - จิราภา บุญสมยา (นิ้ง)</h1>

<form method="POST">
    ชื่อภาค
    <input type="text" name="r_name" required>
    <button type="submit" name="add">บันทึก</button>
</form>

<table>
<tr>
    <th>รหัสภาค</th>
    <th>ชื่อภาค</th>
    <th>ลบ</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['r_id']; ?></td>
    <td><?php echo $row['r_name']; ?></td>
    <td>
        <a class="delete" 
           href="?delete=<?php echo $row['r_id']; ?>"
           onclick="return confirm('ต้องการลบข้อมูลหรือไม่?')">
           🗑
        </a>
    </td>
</tr>
<?php endwhile; ?>

</table>
</div>

</body>
</html>

<?php $conn->close(); ?>