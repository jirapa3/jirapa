<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา(นิ้ง) - โปรแกรมสูตรคูณ</title>
</head>
<body>

    <h1>จิราภา บุญสมยา(นิ้ง) - โปรแกรมสูตรคูณ</h1>

    <form method="post" action="">
        แม่สูตรคูณ 
        <input type="number" min="2" max="1000" name="a" autofocus required>
        <button type="submit" name="Submit">OK</button>
    </form>
    
    <hr>

    <?php
    // ตรวจสอบว่ามีการกดปุ่ม Submit หรือไม่
    if (isset($_POST['Submit'])) {
        $m = $_POST['a']; // รับค่าแม่สูตรคูณจาก input ชื่อ 'a'

        // ใช้ for loop วนซ้ำ 12 รอบ (แม่สูตรคูณปกติคูณถึง 12)
        for ($i = 1; $i <= 12; $i++) {
            $x = $m * $i; // คำนวณผลคูณ
            echo "{$m} x {$i} = {$x} <br />"; // แสดงผลลัพธ์
        }
    }
    ?>

</body>
</html>