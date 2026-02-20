<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา</title>
    <style>
        /* ตั้งค่าฟอนต์และการจัดวางหัวข้อ */
        body {
            font-family: 'Sarabun', sans-serif;
            padding: 20px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* สไตล์ของตาราง */
        table {
            width: 100%;
            border-collapse: collapse; /* ทำให้เส้นขอบติดกัน */
        }

        /* สไตล์ของช่อง (Cell) ทั้งหัวข้อและเนื้อหา */
        th, td {
            border: 1px solid #000; /* เส้นขอบสีดำ */
            padding: 10px;
            text-align: left;
            vertical-align: middle;
        }

        /* สไตล์เฉพาะหัวข้อตาราง */
        th {
            font-weight: bold;
        }

        /* กำหนดขนาดรูปภาพในตาราง */
        .product-img {
            width: 80px;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <h1>66010914002 จิราภา บุญสมยา (นิ้ง)</h1>

    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>วันที่</th>
                <th>ประเทศ</th>
                <th>จำนวนเงิน</th>
                <th>รูปภาพ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Carrots</td>
                <td>Vegetables</td>
                <td>2022-01-06</td>
                <td>United States</td>
                <td>4,270</td>
                <td><img src="images/Carrots.jpg" alt="Carrots" class="images/Carrots.jpg"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Broccoli</td>
                <td>Vegetables</td>
                <td>2022-01-07</td>
                <td>United Kingdom</td>
                <td>8,239</td>
                <td><img src="images/Broccoli.jpg" alt="Broccoli" class="images/Broccoli.jpg"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Banana</td>
                <td>Fruit</td>
                <td>2022-01-08</td>
                <td>United States</td>
                <td>617</td>
                <td><img src="images/Banana.jpg" alt="Banana" class="images/Banana.jpg"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Banana</td>
                <td>Fruit</td>
                <td>2022-01-10</td>
                <td>Canada</td>
                <td>8,384</td>
                <td><img src="images/Banana.jpg" alt="Banana" class="images/Banana.jpg"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Beans</td>
                <td>Vegetables</td>
                <td>2022-01-10</td>
                <td>Germany</td>
                <td>2,626</td>
                <td><img src="images/Beans.jpg" alt="Beans" class="images/Beans.jpg"></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Orange</td>
                <td>Fruit</td>
                <td>2022-01-11</td>
                <td>United States</td>
                <td>3,610</td>
                <td><img src="images/Orange.jpg" alt="Orange" class="images/Orange.jpg"></td>
            </tr>
        </tbody>
    </table>

</body>
</html>