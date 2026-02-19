<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>จิราภา บุญสมยา</title>
    <style>
        body { font-family: 'Sarabun', sans-serif; padding: 30px; background-color: #fff; }
        h1 { font-size: 26px; margin-bottom: 20px; }

        /* สไตล์ตารางให้เหมือนในรูป */
        table { 
            border-collapse: collapse; 
            margin-top: 10px;
        }
        th, td { 
            border: 1px solid #777; 
            padding: 5px 15px; 
            text-align: left; 
        }
        /* หัวตาราง */
        th { background-color: #f2f2f2; font-weight: bold; text-align: center; }
        
        /* จัดตัวเลขยอดขายให้ดูง่าย */
        .amount { text-align: left; }
    </style>
</head>
<body>

    <h1>66010914002 จิราภา บุญสมยา </h1>

    <div id="summaryTableContainer">
        </div>

    <script>
        // 1. ข้อมูลดิบ (จำลองข้อมูลที่ส่งมาจากหน้าแรก)
        const orders = [
            { country: 'Australia', amount: 131713 },
            { country: 'Canada', amount: 94745 },
            { country: 'Germany', amount: 155168 },
            { country: 'New Zealand', amount: 66782 },
            { country: 'Sweden', amount: 141056 },
            { country: 'United Kingdom', amount: 173137 },
            { country: 'United States', amount: 267133 }
        ];

        // 2. ฟังก์ชันสำหรับคำนวณและสร้างตาราง
        function renderSummaryTable(data) {
            let html = '<table>';
            html += `<thead>
                        <tr>
                            <th>ประเทศ</th>
                            <th>ยอดขาย</th>
                        </tr>
                     </thead>`;
            html += '<tbody>';

            // วนลูปข้อมูลเพื่อสร้างแถวตาราง
            data.forEach(item => {
                html += `<tr>
                            <td>${item.country}</td>
                            <td class="amount">${item.amount.toLocaleString()}</td>
                         </tr>`;
            });

            html += '</tbody></table>';
            
            // แสดงผลใน Container
            document.getElementById('summaryTableContainer').innerHTML = html;
        }

        // สั่งให้ทำงานเมื่อโหลดหน้าเว็บ
        renderSummaryTable(orders);
    </script>

</body>
</html>