<?php 
include 'config.php'; 
$id = ""; $pos = ""; $pre = ""; $name = ""; $phone = ""; $birth = ""; $height = ""; $color = ""; $addr = "";

// ตรวจสอบว่าเป็นการกดปุ่มแก้ไขหรือไม่
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM for_application WHERE a_id = $id";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    // ดึงค่ามาใส่ตัวแปร
    $pos = $data['a_position'];
    $pre = $data['a_prefix'];
    $name = $data['a_fullname'];
    $phone = $data['a_phone'];
    $birth = $data['a_birthday'];
    $height = $data['a_height'];
    $color = $data['a_color'];
    $addr = $data['a_address'];
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์มใบสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-blue { background-color: #0d6efd; color: white; padding: 20px; text-align: center; }
        .form-container { max-width: 900px; margin: 30px auto; background: white; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-light">
<div class="form-container">
    <div class="header-blue">
        <h3>✨ แบบฟอร์มใบสมัครงาน ✨</h3>
        <p>บริษัท จิราภา บุญสมยา (นิ้ง))</p>
    </div>
    <form action="save.php" method="POST" class="p-4">
        <input type="hidden" name="a_id" value="<?php echo $id; ?>">
        
        <h5>💼 ข้อมูลตำแหน่งงาน</h5>
        <div class="mb-3">
            <label>ตำแหน่งที่ต้องการสมัคร *</label>
            <input type="text" name="a_position" class="form-control" value="<?php echo $pos; ?>" required>
        </div>

        <h5 class="mt-4">👤 ข้อมูลส่วนตัว</h5>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label>คำนำหน้าชื่อ *</label>
                <select name="a_prefix" class="form-select">
                    <option value="นาย" <?php if($pre=="นาย") echo "selected"; ?>>นาย</option>
                    <option value="นางสาว" <?php if($pre=="นางสาว") echo "selected"; ?>>นางสาว</option>
                </select>
            </div>
            <div class="col-md-5 mb-3">
                <label>ชื่อ-นามสกุล *</label>
                <input type="text" name="a_fullname" class="form-control" value="<?php echo $name; ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>เบอร์โทรศัพท์ *</label>
                <input type="text" name="a_phone" class="form-control" value="<?php echo $phone; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>วันเกิด</label>
                <input type="date" name="a_birthday" class="form-control" value="<?php echo $birth; ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>ส่วนสูง (ซม.)</label>
                <input type="number" name="a_height" class="form-control" value="<?php echo $height; ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label>สีที่ชอบ</label>
                <input type="color" name="a_color" class="form-control form-control-color w-100" value="<?php echo $color ?: '#000000'; ?>">
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">บันทึกข้อมูล</button>
        <a href="index.php" class="btn btn-light w-100 mt-2">ยกเลิก</a>
    </form>
</div>
</body>
</html>