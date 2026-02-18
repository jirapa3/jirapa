<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา (นิ้ง)</title>
</head>
<body>

    <h1>จิราภา บุญสมยา(นิ้ง)</h1>

    <?php
    // ใช้ for loop เพื่อสั่งให้ทำงานซ้ำ 10 รอบ
    for ($a = 1; $a <= 10; $a++) {
        
        // แสดงลำดับที่ตามด้วยชื่อ
        echo "$a : จิราภา บุญสมยา(นิ้ง) <br />";
        
        // แสดงรูปภาพ (ต้องมีไฟล์ชื่อ 1.jpg อยู่ในโฟลเดอร์เดียวกัน)
        echo "<img src='download.jpg' width='250'><hr>";
        
    }
    ?>

</body>
</html>