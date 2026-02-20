<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เข้าสู่ระบบหลังบ้าน</title>
</head>
<body>

    <h1>เข้าสู่ระบบหลังบ้าน-จิราภา </h1>

    <form method="post">
        Username <input type="text" name="username"><br><br>
        Password <input type="password" name="password"><br><br>
        <input type="submit" value="LOGIN">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $user = $_POST["username"];
        $pass = $_POST["password"];

        // กำหนด username และ password ที่ถูกต้อง
        if ($user == "admin" && $pass == "1234") {
            echo "<h3 style='color:green;'>เข้าสู่ระบบสำเร็จ</h3>";
        } else {
            echo "<h3 style='color:red;'>Username หรือ Password ไม่ถูกต้อง</h3>";
        }
    }
    ?>

</body>
</html>