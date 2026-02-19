<?php include 'config.php'; ?>
<?php include 'check_login.php'; ?>

<?php
$id = "";
$position = "";
$prefix = "";
$fullname = "";
$phone = "";

if(isset($_GET['id'])){
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM for_application WHERE a_id=$id")->fetch_assoc();
$position = $data['a_position'];
$prefix = $data['a_prefix'];
$fullname = $data['a_fullname'];
$phone = $data['a_phone'];
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<title>ฟอร์มสมัครงาน</title>
</head>
<body class="container mt-5">

<h3><?= $id ? "แก้ไขข้อมูล" : "เพิ่มข้อมูล" ?></h3>

<form action="save.php" method="post">
<input type="hidden" name="id" value="<?= $id ?>">

<input type="text" name="position" class="form-control mb-2" placeholder="ตำแหน่ง" value="<?= $position ?>" required>

<select name="prefix" class="form-control mb-2" required>
<option value="นาย" <?= $prefix=="นาย"?"selected":"" ?>>นาย</option>
<option value="นาง" <?= $prefix=="นาง"?"selected":"" ?>>นาง</option>
<option value="นางสาว" <?= $prefix=="นางสาว"?"selected":"" ?>>นางสาว</option>
</select>

<input type="text" name="fullname" class="form-control mb-2" placeholder="ชื่อ-นามสกุล" value="<?= $fullname ?>" required>

<input type="text" name="phone" class="form-control mb-2" placeholder="เบอร์โทร" value="<?= $phone ?>" required>

<button class="btn btn-primary">บันทึก</button>
<a href="index.php" class="btn btn-secondary">กลับ</a>
</form>

</body>
</html>
