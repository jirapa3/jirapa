<?php
include("../h/connectdb.php");

/* ===== เพิ่มข้อมูล ===== */
if(isset($_POST['submit'])){
    $r_name = $_POST['r_name'];

    $sql = "INSERT INTO regions (r_name)
            VALUES ('$r_name')";
    mysqli_query($conn,$sql);
}

/* ===== ลบข้อมูล ===== */
if(isset($_GET['del'])){
    $r_id = $_GET['del'];

    $sql = "DELETE FROM regions WHERE r_id = '$r_id'";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>จัดการภาค</title>

<style>
table { border-collapse: collapse; }
th, td { padding: 8px; border: 1px solid black; }

.delete-img {
    width: 22px;
    cursor: pointer;
}
.delete-img:hover {
    opacity: 0.6;
}
</style>

</head>
<body>

<h2>งาน i -- จิราภา บุญสมยา</h2>

<form method="post">
    ชื่อภาค
    <input type="text" name="r_name" required>
    <input type="submit" name="submit" value="บันทึก">
</form>

<br><br>

<table>
<tr>
    <th>รหัสภาค</th>
    <th>ชื่อภาค</th>
    <th>ลบ</th>
</tr>

<?php
$sql = "SELECT * FROM regions";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo $row['r_id']; ?></td>
    <td><?php echo $row['r_name']; ?></td>
    <td align="center">
        <a href="?del=<?php echo $row['r_id']; ?>"
           onclick="return confirm('ต้องการลบหรือไม่?')">
           <img src="images/delete.jpg" class="delete-img">
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>