<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา</title>
</head>
<body>

    <h2>จิราภา บุญสมยา(นิ้ง)</h2>

    <form method="post" action="">
        <label>กรอกตัวเลข </label>
        <input type="number" name="a" required>
        <input type="submit" name="Submit" value="OK">
    </form>

    <br>

    <?php
    // ส่วนประมวลผล PHP ตามภาพ
    if(isset($_POST['Submit'])) {
        $gender = $_POST['a'];

        if ($gender == 1) {
            echo "เพศชาย";
        } else if ($gender == 2) {
            echo "เพศหญิง";
        } else if ($gender == 3) {
            echo "เพศทางเลือก";
        } else {
            echo "อื่นๆ";
        }
    }
    ?>

</body>
</html>