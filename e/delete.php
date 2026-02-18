<?php
include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM for_application WHERE a_id = $id";
    if($conn->query($sql)){
        echo "<script>alert('ลบข้อมูลเรียบร้อย!'); window.location='index.php';</script>";
    }
}
?>