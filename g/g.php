<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จิราภา บุญสมยา</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-pink: #ff85a2;
            --secondary-blue: #a0c4ff;
            --bg-light: #fef9fb;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 20px;
            color: #444;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        /* หัวข้อรายงาน */
        .header {
            background: white;
            border-radius: 25px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(255, 133, 162, 0.1);
            margin-bottom: 30px;
            border: 1px solid #ffeef2;
        }

        .header h1 {
            color: var(--primary-pink);
            margin: 0;
            font-size: 28px;
        }

        /* การจัดวางกราฟและตาราง */
        .grid-layout {
            display: grid;
            grid-template-columns: 1.5fr 1fr;
            gap: 25px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }

        .card-title {
            font-weight: bold;
            color: #555;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* ตารางสไตล์มินิมอล */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px;
            color: var(--primary-pink);
            border-bottom: 2px solid #fdf0f3;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #f9f9f9;
        }

        .month-label {
            font-weight: bold;
            color: #777;
        }

        .amount-text {
            text-align: right;
            font-weight: 700;
            color: #5a67d8;
        }

        tr:hover {
            background-color: #fff9fa;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>66010914002 จิราภา บุญสมยา</h1>
        <p style="color: #999; margin-top: 5px;">📊 รายงานสรุปยอดขาย Supermarket รายเดือน</p>
    </div>

    <div class="grid-layout">
        <div class="card">
            <div class="card-title">📈 กราฟแสดงแนวโน้มยอดขายรายเดือน</div>
            <canvas id="monthlyLineChart"></canvas>
        </div>

        <div class="card">
            <div class="card-title">🗓️ สรุปยอดเงินรวมแต่ละเดือน</div>
            <table id="monthlyTable">
                <thead>
                    <tr>
                        <th>เดือน</th>
                        <th style="text-align: right;">ยอดขายรวม (บาท)</th>
                    </tr>
                </thead>
                <tbody>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    // ข้อมูลจากรูปภาพที่คุณส่งมา
    const monthlyData = [
        { m: 'มกราคม (1)', val: 89663 },
        { m: 'กุมภาพันธ์ (2)', val: 59145 },
        { m: 'มีนาคม (3)', val: 108183 },
        { m: 'เมษายน (4)', val: 49474 },
        { m: 'พฤษภาคม (5)', val: 203339 },
        { m: 'มิถุนายน (6)', val: 51600 },
        { m: 'กรกฎาคม (7)', val: 80735 },
        { m: 'สิงหาคม (8)', val: 68994 },
        { m: 'กันยายน (9)', val: 102433 },
        { m: 'ตุลาคม (10)', val: 52615 },
        { m: 'พฤศจิกายน (11)', val: 73740 },
        { m: 'ธันวาคม (12)', val: 89813 }
    ];

    // 1. สร้างตาราง
    const tbody = document.querySelector('#monthlyTable tbody');
    monthlyData.forEach(item => {
        const row = `<tr>
            <td class="month-label">${item.m}</td>
            <td class="amount-text">${item.val.toLocaleString()}.00</td>
        </tr>`;
        tbody.innerHTML += row;
    });

    // 2. สร้างกราฟเส้น (Line Chart)
    const ctx = document.getElementById('monthlyLineChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: monthlyData.map(d => d.m.split(' ')[0]), // เอาแค่ชื่อเดือน
            datasets: [{
                label: 'ยอดขายรายเดือน',
                data: monthlyData.map(d => d.val),
                borderColor: '#ff85a2',
                backgroundColor: 'rgba(255, 133, 162, 0.1)',
                fill: true,
                tension: 0.4, // ความโค้งของเส้น
                borderWidth: 3,
                pointBackgroundColor: '#fff',
                pointBorderColor: '#ff85a2',
                pointRadius: 5
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { 
                    beginAtZero: true,
                    grid: { color: '#f0f0f0' }
                },
                x: {
                    grid: { display: false }
                }
            }
        }
    });
</script>

</body>
</html>