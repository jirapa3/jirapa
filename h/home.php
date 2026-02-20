<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: index.php");
    exit();
}
?>

<h2>ยินดีต้อนรับ <?php echo $_SESSION['admin']; ?></h2>
<a href="logout.php">ออกจากระบบ</a>