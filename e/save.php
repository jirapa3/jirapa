<?php
include 'config.php';

$id = $_POST['a_id'];
$pos = $_POST['a_position'];
$pre = $_POST['a_prefix'];
$name = $_POST['a_fullname'];
$phone = $_POST['a_phone'];
$birth = $_POST['a_birthday'];
$height = $_POST['a_height'];
$color = $_POST['a_color'];

if(empty($id)){
    // เพิ่มใหม่
    $sql = "INSERT INTO for_application (a_position, a_prefix, a_fullname, a_phone, a_birthday, a_height, a_color) 
            VALUES ('$pos', '$pre', '$name', '$phone', '$birth', '$height', '$color')";
} else {
    // แก้ไขข้อมูลเดิม
    $sql = "UPDATE for_application SET 
            a_position='$pos', a_prefix='$pre', a_fullname='$name', 
            a_phone='$phone', a_birthday='$birth', a_height='$height', a_color='$color' 
            WHERE a_id=$id";
}

if($conn->query($sql)){
    echo "<script>alert('สำเร็จ!'); window.location='index.php';</script>";
}
?>