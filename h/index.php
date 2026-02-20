<?php
session_start();
include("connectdb.php");

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin 
            WHERE a_username='$username' 
            AND a_password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['admin'] = $username;
        header("Location: home.php");
        exit();
    }else{
        $error = "Username หรือ Password ไม่ถูกต้อง";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>เข้าสู่ระบบหลังบ้าน-จิราภา</title>
</head>

<body>

<h1>เข้าสู่ระบบหลังบ้าน-จิราภา</h1>

<form method="POST">
    Username <br>
    <input type="text" name="username" required><br><br>

    Password <br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="LOGIN">
</form>

<?php
if(isset($error)){
    echo "<p style='color:red;'>$error</p>";
}
?>

</body>
</html>