<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา(นิ้ง)</title>
</head>
<body>

    <h1> จิราภา บุญสมยา(นิ้ง) - do .. while</h1>

    <?php
    $a = 1; // 1. กำหนดค่าเริ่มต้น

    do {
        // 2. สั่งให้ทำงานก่อนทันที (แสดงลำดับชื่อและรูปภาพ)
        echo "$a : จิราภา บุญสมยา(นิ้ง) <br />";
        echo "<img src='download.jpg' width='200'> <hr>";
        
        $a++; // 3. เพิ่มค่าตัวแปร
        
    } while ($a <= 10); // 4. ตรวจสอบเงื่อนไข (ถ้าจริงจะกลับไปทำซ้ำ)
    ?>

</body>
</html>