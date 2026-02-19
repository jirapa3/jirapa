<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบรับข้อมูล</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f4f7f6; padding: 40px 15px; }
        .form-container { max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 8px 20px rgba(0,0,0,0.08); }
        .header-title { text-align: center; margin-bottom: 25px; color: #333; }
        label { font-weight: 600; margin-bottom: 8px; display: block; }
        .text-danger { color: #e74c3c; }
        .name-input { background-color: #f0f4ff !important; border: 1px solid #d1d9e6; }
        .btn-submit { width: 100%; padding: 12px; font-size: 1.1rem; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h3 class="header-title">ฟอร์มรับข้อมูล จิราภา บุญสมยา (นิ้ง)</h3>
    
    <div class="form-container">
        <form id="dataForm">
            <div class="mb-3">
                <label>ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                <input type="text" id="fullName" class="form-control name-input" placeholder="กรอกชื่อ-นามสกุล" required>
            </div>

            <div class="mb-3">
                <label>เบอร์โทร <span class="text-danger">*</span></label>
                <input type="tel" id="phone" class="form-control" placeholder="08x-xxx-xxxx" required>
            </div>

            <div class="mb-3">
                <label>ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                <input type="number" id="height" class="form-control" placeholder="เช่น 170" required>
            </div>

            <div class="mb-3">
                <label>ที่อยู่</label>
                <textarea id="address" class="form-control" rows="3" placeholder="ระบุที่อยู่ปัจจุบัน"></textarea>
            </div>

            <div class="mb-3">
                <label>วันเดือนปีเกิด</label>
                <input type="date" id="birthDate" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-submit">บันทึกข้อมูล</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('dataForm').addEventListener('submit', function(event) {
        event.preventDefault(); // ป้องกันหน้าเว็บ Refresh เมื่อกดส่ง

        // ดึงค่าจาก Input ต่างๆ มาเก็บไว้ในตัวแปร
        const formData = {
            fullName: document.getElementById('fullName').value,
            phone: document.getElementById('phone').value,
            height: document.getElementById('height').value,
            address: document.getElementById('address').value,
            birthDate: document.getElementById('birthDate').value
        };

        // แสดงผลลัพธ์ผ่าน Console และ Alert (จำลองการส่งข้อมูล)
        console.log("ข้อมูลที่ได้รับ:", formData);
        alert("บันทึกข้อมูลสำเร็จ!\nชื่อ: " + formData.fullName + "\nเบอร์โทร: " + formData.phone);
        
        // ตรงนี้คุณสามารถเพิ่มคำสั่งส่งข้อมูลไปยัง Google Sheets หรือ Database ได้ในอนาคต
    });
</script>

</body>
</html>