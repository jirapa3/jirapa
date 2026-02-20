<?php
include("connectdb.php");

# =========================
# ลบข้อมูล
# =========================
if(isset($_GET['del'])){
    $id = intval($_GET['del']);

    # ดึงชื่อไฟล์รูป
    $q = mysqli_query($conn,"SELECT p_img FROM provinces WHERE p_id=$id");
    $data = mysqli_fetch_assoc($q);

    # ลบรูปออกจากโฟลเดอร์
    if(!empty($data['p_img']) && file_exists("images/".$data['p_img'])){
        unlink("images/".$data['p_img']);
    }

    # ลบข้อมูลในฐานข้อมูล
    mysqli_query($conn,"DELETE FROM provinces WHERE p_id=$id");

    header("Location: b.php");
    exit();
}

# =========================
# เพิ่มข้อมูล
# =========================
if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn,$_POST['p_name']);
    $region = intval($_POST['r_id']);

    $img = "";
    
    # ตรวจสอบว่ามีการอัปโหลดไฟล์
    if(!empty($_FILES['p_img']['name'])){

        $ext = pathinfo($_FILES['p_img']['name'], PATHINFO_EXTENSION);
        $img = time().".".$ext;   # กันชื่อไฟล์ซ้ำ

        move_uploaded_file($_FILES['p_img']['tmp_name'],
                           "images/".$img);
    }

    mysqli_query($conn,"
        INSERT INTO provinces(p_name,p_img,r_id)
        VALUES('$name','$img','$region')
    ");

    header("Location: b.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>จัดการจังหวัด</title>
</head>
<body>

<h1>งาน i -- จิราภา บุญสมยา</h1>

<form method="post" enctype="multipart/form-data">
    ชื่อจังหวัด :
    <input type="text" name="p_name" required><br><br>

    รูปภาพ :
    <input type="file" name="p_img"><br><br>

    ภาค :
    <select name="r_id" required>
        <?php
        $region = mysqli_query($conn,"SELECT * FROM regions");
        while($r = mysqli_fetch_assoc($region)){
        ?>
            <option value="<?php echo $r['r_id']; ?>">
                <?php echo $r['r_name']; ?>
            </option>
        <?php } ?>
    </select>
    <br><br>

    <button type="submit" name="submit">บันทึก</button>
</form>

<br><br>

<table border="1" cellpadding="6">
<tr>
    <th>รหัสจังหวัด</th>
    <th>ชื่อจังหวัด</th>
    <th>ชื่อภาค</th>
    <th>รูป</th>
    <th>ลบ</th>
</tr>

<?php
$sql = mysqli_query($conn,"
    SELECT provinces.*, regions.r_name 
    FROM provinces 
    LEFT JOIN regions ON provinces.r_id = regions.r_id
");

while($row = mysqli_fetch_assoc($sql)){
?>

<tr>
    <td><?php echo $row['p_id']; ?></td>
    <td><?php echo $row['p_name']; ?></td>
    <td><?php echo $row['r_name']; ?></td>

    <td>
        <?php if(!empty($row['p_img'])){ ?>
            <img src="images/<?php echo $row['p_img']; ?>" width="80">
        <?php } ?>
    </td>

    <td align="center">
        <a href="?del=<?php echo $row['p_id']; ?>"
           onclick="return confirm('ต้องการลบหรือไม่?');">
           <img src="images/delete.png" width="25">
        </a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>