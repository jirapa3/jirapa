<?php
include("../connectdb.php");

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin (a_name, a_username, a_password)
            VALUES ('$name','$username','$password')";

    if(mysqli_query($conn,$sql)){
        echo "✅ บันทึกข้อมูลเรียบร้อย";
    }else{
        echo "❌ Error: " . mysqli_error($conn);
    }
}
?>