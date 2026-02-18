<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา</title>
</head>
<body>

    <h2>จิราภา บุญสมยา(นิ้ง)</h2>

    <form method="post" action="">
        กรอกคะแนน <input type="number" name="a" required>
        <input type="submit" name="Submit" value="OK">
    </form>

    <hr>

    <?php
    // ส่วนประมวลผล PHP ตามตรรกะในภาพ
    if(isset($_POST['Submit'])) {
        $score = $_POST['a'];

        if ($score >= 80) {
            $grade = "A";
        } else if ($score >= 70) {
            $grade = "B";
        } else if ($score >= 60) {
            $grade = "C";
        } else if ($score >= 50) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        // แสดงผลลัพธ์
        echo "<h2>คะแนน $score ได้เกรด $grade</h2>";
    }
    ?>

</body>
</html>