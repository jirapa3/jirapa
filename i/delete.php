<?php
include("connectdb.php");

$id = $_GET['id'];

# ลบรูปก่อน
$data = mysqli_fetch_assoc(mysqli_query($conn,
        "SELECT p_ext FROM provinces WHERE p_id=$id"));

unlink("images/".$data['p_ext']);

# ลบข้อมูล
mysqli_query($conn,"DELETE FROM provinces WHERE p_id=$id");

header("location:b.php");
?>