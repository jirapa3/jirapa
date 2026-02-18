<?php 
include 'config.php'; 

// 1. ตั้งค่าเริ่มต้นให้ตัวแปรทุกตัวเป็นค่าว่าง เพื่อไม่ให้เกิด Error เวลาเปิดหน้าแบบไม่มี ID
$id = ""; $a_position = ""; $a_prefix = ""; $a_fullname = ""; 
$a_phone = ""; $a_birthday = ""; $a_height = ""; $a_color = ""; $a_address = "";

// 2. ตรวจสอบว่ามีการส่ง ID มาจากหน้า index หรือไม่ (กดปุ่มแก้ไข)
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    // ป้องกัน SQL Injection เบื้องต้น
    $id = mysqli_real_escape_string($conn, $id);
    
    // ดึงข้อมูลจากตาราง for_application
    $sql = "SELECT * FROM for_application WHERE a_id = '$id'";
    $result = $conn->query($sql);
    
    if($result && $result->num_rows > 0){
        $data = $result->fetch_assoc();
        
        // ดึงค่ามาใส่ตัวแปรให้ตรงกับชื่อคอลัมน์ใน DB
        $id          = $data['a_id'];
        $a_position  = $data['a_position'];
        $a_prefix    = $data['a_prefix']; // เพิ่มตัวแปรคำนำหน้าชื่อ
        $a_fullname  = $data['a_fullname'];
        $a_phone     = $data['a_phone'];
        $a_birthday  = $data['a_birthday'];
        $a_height    = $data['a_height'];
        $a_color     = $data['a_color'];
        $a_address   = $data['a_address'];
    } else {
        echo "<script>alert('ไม่พบข้อมูล ID นี้ในระบบ'); window.location='index.php';</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>แบบฟอร์มใบสมัครงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; }
        .header-blue { background-color: #0d6efd; color: white; padding: 25px; text-align: center; border-radius: 10px 10px 0 0; }
        .form-container { max-width: 900px; margin: 30px auto; background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        h5 { color: #0d6efd; border-left: 5px solid #0d6efd; padding-left: 10px; }
    </style>
</head>
<body>
<div class="form-container">
    <div class="header-blue">
        <h3>✨ แบบฟอร์มใบสมัครงาน ✨</h3>
        <p class="mb-0">บริษัท จิราภา บุญสมยา (นิ้ง)</p>
    </div>
    
    <form action="save.php" method="POST" class="p-4">
        <input type="hidden" name="a_id" value="<?php echo $id; ?>">
        
        <h5>💼 ข้อมูลตำแหน่งงาน</h5>
        <div class="mb-3">
            <label class="form-label">ตำแหน่งที่ต้องการสมัคร *</label>
            <input type="text" name="a_position" class="form-control" value="<?php echo $a_position; ?>" required>
        </div>

        <h5 class="mt-4">👤 ข้อมูลส่วนตัว</h5>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">คำนำหน้าชื่อ *</label>
                <select name="a_prefix" class="form-select">
                    <option value="นาย" <?php if($a_prefix == "นาย") echo "selected"; ?>>นาย</option>
                    <option value="นางสาว" <?php if($a_prefix == "นางสาว") echo "selected"; ?>>นางสาว</option>
                    <option value="นาง" <?php if($a_prefix == "นาง") echo "selected"; ?>>นาง</option>
                </select>
            </div>
            <div class="col-md-5 mb-3">
                <label class="form-label">ชื่อ-นามสกุล *</label>
                <input type="text" name="a_fullname" class="form-control" value="<?php echo $a_fullname; ?>" required>
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">เบอร์โทรศัพท์ *</label>
                <input type="text" name="a_phone" class="form-control" value="<?php echo $a_phone; ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label class="form-label">วันเกิด</label>
                <input type="date" name="a_birthday" class="form-control" value="<?php echo $a_birthday; ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">ส่วนสูง (ซม.)</label>
                <input type="number" name="a_height" class="form-control" value="<?php echo $a_height; ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">สีที่ชอบ</label>
                <input type="color" name="a_color" class="form-control form-control-color w-100" value="<?php echo $a_color ?: '#0d6efd'; ?>">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">ที่อยู่ปัจจุบัน</label>
            <textarea name="a_address" class="form-control" rows="3"><?php echo $a_address; ?></textarea>
        </div>

        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary w-100 p-2">💾 บันทึกข้อมูลสมัครงาน</button>
            </div>
            <div class="col">
                <a href="index.php" class="btn btn-outline-secondary w-100 p-2">❌ ยกเลิก</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>