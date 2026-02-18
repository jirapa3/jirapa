<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา</title>
    <style>
        body { font-family: 'Sarabun', sans-serif; padding: 20px; }
        
        /* หัวข้อและส่วนค้นหา */
        .header-section { margin-bottom: 15px; }
        h1 { font-size: 24px; margin-bottom: 10px; }
        
        .search-container { margin-bottom: 20px; }
        input[type="text"] { width: 250px; padding: 5px; border: 2px solid #000; }
        button { padding: 5px 15px; cursor: pointer; }

        /* ตาราง */
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #777; padding: 10px; text-align: left; }
        th { background-color: #f9f9f9; }

        .product-img { width: 50px; height: auto; display: block; margin: 0 auto; }
        
        /* ซ่อนแถวที่ไม่ตรงเงื่อนไข */
        .hidden { display: none; }
    </style>
</head>
<body>

    <div class="header-section">
        <h1>66010914002 จิราภา บุญสมยา </h1>
        
        <div class="search-container">
            คำค้น <input type="text" id="searchInput" placeholder="กรอกชื่อสินค้าหรือประเทศ...">
            <button onclick="filterTable()">OK</button>
        </div>
    </div>

    <hr>

    <table id="orderTable">
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
                <td>9</td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>2022-01-16</td>
                <td>Sweden</td>
                <td>2,417</td>
                <td><img src="Vegetables.jpg" class="product-img"></td>
            </tr>
            <tr>
                <td>10</td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>2022-01-16</td>
                <td>Canada</td>
                <td>7,431</td>
                <td><img src="Vegetables.jpg" class="product-img"></td>
            </tr>
            <tr>
                <td>15</td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>2022-01-24</td>
                <td>Sweden</td>
                <td>6,946</td>
                <td><img src="Vegetables.jpg" class="product-img"></td>
            </tr>
            <tr>
                <td>20</td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>2022-02-02</td>
                <td>United States</td>
                <td>1,161</td>
                <td><img src="Vegetables.jpg" class="product-img"></td>
            </tr>
            <tr>
                <td>30</td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>2022-02-21</td>
                <td>Sweden</td>
                <td>7,602</td>
                <td><img src="Vegetables.jpg" class="product-img"></td>
            </tr>
            <tr>
                <td>32</td>
                <td>Apple</td>
                <td>Fruit</td>
                <td>2022-02-23</td>
                <td>Australia</td>
                <td>8,892</td>
                <td><img src="Vegetables.jpg" class="product-img"></td>
            </tr>
        </tbody>
    </table>

    <script>
        function filterTable() {
            // ดึงค่าจากช่อง Input
            let input = document.getElementById("searchInput");
            let filter = input.value.toLowerCase();
            let table = document.getElementById("orderTable");
            let tr = table.getElementsByTagName("tr");

            // วนลูปทุกแถวในตาราง (เริ่มที่ index 1 เพราะ 0 คือหัวตาราง)
            for (let i = 1; i < tr.length; i++) {
                let showRow = false;
                let tds = tr[i].getElementsByTagName("td");
                
                // ตรวจสอบข้อมูลในทุกคอลัมน์ของแถวนั้นๆ
                for (let j = 0; j < tds.length - 1; j++) { // ไม่ตรวจคอลัมน์รูปภาพ
                    if (tds[j]) {
                        if (tds[j].textContent.toLowerCase().indexOf(filter) > -1) {
                            showRow = true;
                            break;
                        }
                    }
                }

                // แสดงหรือซ่อนแถว
                if (showRow) {
                    tr[i].classList.remove("hidden");
                } else {
                    tr[i].classList.add("hidden");
                }
            }
        }

        // เพิ่มฟังก์ชันให้กด Enter ในช่องค้นหาได้
        document.getElementById("searchInput").addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                filterTable();
            }
        });
    </script>

</body>
</html>