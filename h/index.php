<?php
include("connectdb.php");

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password)
            VALUES ('$username','$password')";

    mysqli_query($conn,$sql);

    echo "บันทึกข้อมูลเรียบร้อย";
}
?>

<h1>เข้าสู่ระบบหลังบ้าน-จิราภา</h1>

<form method="post">
    Username <input type="text" name="username"><br><br>
    Password <input type="password" name="password"><br><br>
    <input type="submit" name="submit" value="LOGIN">
</form>