<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>รายการใบสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>รายชื่อผู้สมัครงาน</h2>
        <a href="form.php" class="btn btn-success">+ เพิ่มใบสมัครใหม่</a>
    </div>
    
    <table class="table table-bordered table-striped">
        <thead class="table-primary text-center">
            <tr>
                <th>ID</th>
                <th>ตำแหน่ง</th>
                <th>ชื่อ-นามสกุล</th>
                <th>เบอร์โทร</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM for_application";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='text-center'>{$row['a_id']}</td>
                        <td>{$row['a_position']}</td>
                        <td>{$row['a_fullname']}</td>
                        <td>{$row['a_phone']}</td>
                        <td class='text-center'>
                            <a href='form.php?id={$row['a_id']}' class='btn btn-warning btn-sm'>แก้ไข</a>
                            <a href='delete.php?id={$row['a_id']}' class='btn btn-danger btn-sm' onclick='return confirm(\"ยืนยันการลบข้อมูล?\")'>ลบ</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>