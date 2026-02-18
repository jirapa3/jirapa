<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา(นิ้ง)</title>
</head>
<body>

    <h2>จิราภา บุญสมยา(นิ้ง)</h2>

    <form method="post" action="">
        66010914046 <input type="text" name="a" autofocus required>
        <button type="submit" name="Submit">OK</button>
    </form>
    
    <hr>

    <?php
    if (isset($_POST['Submit'])) {
        $id = $_POST['a']; // รับรหัสนักศึกษา เช่น 66010914046
        
        // ใช้ substr เพื่อตัดเอาเลข 2 ตัวแรกของรหัสมาเก็บในตัวแปร $y
        // เช่น ถ้ากรอก 66... $y จะเท่ากับ 66
        $y = substr($id, 0, 2); 

        // แสดงผลรูปภาพโดยดึงจาก URL ของมหาวิทยาลัยตามโครงสร้างที่กำหนด
        echo "<img src='รูปนิสิต.jpg' width='250'>";
    }
    ?>

</body>
</html>