<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา - Product List</title>
    <style>
        /* ตั้งค่าพื้นฐาน */
        body { 
            font-family: 'Sarabun', sans-serif; 
            padding: 40px; 
            background-color: #f4f7f6; /* สีพื้นหลังเว็บนวลๆ */
            color: #333;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1); /* เงาฟุ้งๆ */
        }

        h1 { 
            font-size: 28px; 
            color: #2c3e50;
            margin-bottom: 25px;
            border-left: 5px solid #3498db; /* เส้นสีฟ้าข้างชื่อ */
            padding-left: 15px;
        }
        
        /* ส่วนค้นหา */
        .search-container { 
            margin-bottom: 25px; 
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        input[type="text"] { 
            width: 300px; 
            padding: 12px 15px; 
            border: 2px solid #e0e0e0; 
            border-radius: 25px; /* ขอบมน */
            outline: none;
            transition: 0.3s;
        }

        input[type="text"]:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52,152,219,0.2);
        }

        button { 
            padding: 10px 25px; 
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer; 
            font-weight: bold;
            transition: 0.3s;
        }

        button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        /* ตารางสไตล์ Modern */
        table { 
            width: 100%; 
            border-collapse: collapse; 
            overflow: hidden;
            border-radius: 10px;
        }

        th { 
            background-color: #3498db;
            color: white;
            padding: 15px;
            text-align: left;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        td { 
            padding: 15px; 
            border-bottom: 1px solid #eee;
            background-color: #fff;
        }

        tr:last-child td { border-bottom: none; }

        /* เอฟเฟกต์แถวตาราง */
        tr:hover td {
            background-color: #f1f9ff; /* สีฟ้าอ่อนเวลาเมาส์ชี้ */
            transition: 0.2s;
        }

        .product-img { 
            width: 60px; 
            height: 60px; 
            object-fit: cover;
            border-radius: 8px; /* มนรูปภาพ */
            border: 1px solid #ddd;
        }

        /* Badge สำหรับประเภทสินค้า */
        .badge {
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            background-color: #e1f5fe;
            color: #0288d1;
            font-weight: bold;
        }
        
        .hidden { display: none; }
    </style>
</head>
<body>

<div class="container">
    <div class="header-section">
        <h1>66010914002 จิราภา บุญสมยา</h1>
        
        <div class="search-container">
            <strong>ค้นหา:</strong> 
            <input type="text" id="searchInput" placeholder="พิมพ์ชื่อสินค้า, ประเทศ หรือวันที่...">
            <button onclick="filterTable()">ค้นหาข้อมูล</button>
        </div>
    </div>

    <table id="orderTable">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภท</th>
                <th>วันที่</th>
                <th>ประเทศ</th>
                <th>จำนวนเงิน</th>
                <th style="text-align: center;">รูปภาพ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>9</td>
                <td><strong>Apple</strong></td>
                <td><span class="badge">Fruit</span></td>
                <td>2022-01-16</td>
                <td>Sweden</td>
                <td style="color: #27ae60; font-weight: bold;">2,417</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="product-img"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><strong>Apple</strong></td>
                <td><span class="badge">Fruit</span></td>
                <td>2022-01-16</td>
                <td>Canada</td>
                <td style="color: #27ae60; font-weight: bold;">7,431</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="product-img"></td>
            </tr>
            <tr>
                <td>15</td>
                <td><strong>Apple</strong></td>
                <td><span class="badge">Fruit</span></td>
                <td>2022-01-24</td>
                <td>Sweden</td>
                <td style="color: #27ae60; font-weight: bold;">6,946</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="product-img"></td>
            </tr>
            <tr>
                <td>20</td>
                <td><strong>Apple</strong></td>
                <td><span class="badge">Fruit</span></td>
                <td>2022-02-02</td>
                <td>United States</td>
                <td style="color: #27ae60; font-weight: bold;">1,161</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="product-img"></td>
            </tr>
            <tr>
                <td>30</td>
                <td><strong>Apple</strong></td>
                <td><span class="badge">Fruit</span></td>
                <td>2022-02-21</td>
                <td>Sweden</td>
                <td style="color: #27ae60; font-weight: bold;">7,602</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="product-img"></td>
            </tr>
            <tr>
                <td>32</td>
                <td><strong>Apple</strong></td>
                <td><span class="badge">Fruit</span></td>
                <td>2022-02-23</td>
                <td>Australia</td>
                <td style="color: #27ae60; font-weight: bold;">8,892</td>
                <td><img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="product-img"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function filterTable() {
        let input = document.getElementById("searchInput");
        let filter = input.value.toLowerCase();
        let table = document.getElementById("orderTable");
        let tr = table.getElementsByTagName("tr");

        for (let i = 1; i < tr.length; i++) {
            let showRow = false;
            let tds = tr[i].getElementsByTagName("td");
            
            for (let j = 0; j < tds.length - 1; j++) {
                if (tds[j] && tds[j].textContent.toLowerCase().indexOf(filter) > -1) {
                    showRow = true;
                    break;
                }
            }
            tr[i].classList.toggle("hidden", !showRow);
        }
    }

    document.getElementById("searchInput").addEventListener("keyup", function(event) {
        if (event.key === "Enter") filterTable();
    });
</script>

</body>
</html>