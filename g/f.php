<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สรุปยอดขายรายเดือน - จิราภา บุญสมยา</title>
    <style>
        /* ตั้งค่าพื้นฐานและฟอนต์ */
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #fdf6f8; /* พื้นหลังสีนวลพาสเทล */
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* กล่องคอนเทนเนอร์ */
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(255, 133, 162, 0.1);
            width: 100%;
            max-width: 600px;
        }

        /* หัวข้อชื่อ */
        h1 {
            color: #333;
            font-size: 28px;
            text-align: center;
            margin-bottom: 5px;
        }

        .subtitle {
            color: #ff85a2;
            text-align: center;
            font-weight: bold;
            margin-bottom: 25px;
        }

        /* ตารางสไตล์มินิมอลพาสเทล */
        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 15px;
            overflow: hidden; /* ให้ขอบตารางมน */
        }

        thead {
            background-color: #ff85a2;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ffeef2;
        }

        tbody tr:hover {
            background-color: #fff9fa;
        }

        /* แถวสรุปยอดรวม */
        .total-row {
            background-color: #fff0f3;
            font-weight: bold;
            color: #ff5c8d;
        }

        .amount-cell {
            text-align: right;
            padding-right: 40px;
        }

        /* ตกแต่งตัวเลขลำดับ */
        .month-circle {
            background: #f0f0f0;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 13px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>66010914002 จิราภา บุญสมยา</h1>
        <p class="subtitle">📊 รายงานสรุปยอดขายรายเดือน (Supermarket)</p>

        <table>
            <thead>
                <tr>
                    <th>เดือน</th>
                    <th style="text-align: right; padding-right: 40px;">ยอดขาย (บาท)</th>
                </tr>
            </thead>
            <tbody id="sales-data">
                </tbody>
            <tfoot>
                <tr class="total-row">
                    <td>ยอดรวมทั้งหมด</td>
                    <td id="grand-total" class="amount-cell">0.00</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        // ข้อมูลยอดขายจากรูปภาพของคุณ
        const monthlySales = [
            { id: 1, amount: 89663 },
            { id: 2, amount: 59145 },
            { id: 3, amount: 108183 },
            { id: 4, amount: 49474 },
            { id: 5, amount: 203339 },
            { id: 6, amount: 51600 },
            { id: 7, amount: 80735 },
            { id: 8, amount: 68994 },
            { id: 9, amount: 102433 },
            { id: 10, amount: 52615 },
            { id: 11, amount: 73740 },
            { id: 12, amount: 89813 }
        ];

        const tableBody = document.getElementById('sales-data');
        let totalSum = 0;

        // วนลูปสร้างแถวในตาราง
        monthlySales.forEach(item => {
            totalSum += item.amount;
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><span class="month-circle">${item.id}</span></td>
                <td class="amount-cell">${item.amount.toLocaleString(undefined, {minimumFractionDigits: 2})}</td>
            `;
            tableBody.appendChild(row);
        });

        // แสดงผลยอดรวม
        document.getElementById('grand-total').textContent = totalSum.toLocaleString(undefined, {minimumFractionDigits: 2});
    </script>
</body>
</html>