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
            --bg-light: #fdf6f8;
            --card-bg: #ffffff;
        }

        body {
            font-family: 'Sarabun', sans-serif;
            background-color: var(--bg-light);
            margin: 0;
            padding: 20px;
            color: #444;
        }

        /* ส่วนหัวสีพาสเทล */
        .header-banner {
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(255, 133, 162, 0.1);
            margin-bottom: 30px;
            border: 2px solid var(--primary-pink);
        }

        .header-banner h1 {
            color: var(--primary-pink);
            margin: 0;
            font-size: 28px;
        }

        .header-banner p {
            margin: 5px 0 0;
            color: #888;
        }

        /* การจัดเลย์เอาต์กราฟ */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* ตารางรายละเอียด */
        .table-container {
            background: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            padding: 12px;
            color: var(--primary-pink);
            border-bottom: 2px solid #eee;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #f9f9f9;
        }

        .amount-cell {
            text-align: right;
            font-weight: bold;
            color: #5a67d8;
        }

        .rank-circle {
            background: #eee;
            width: 25px;
            height: 25px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="header-banner">
        <h1>จิราภา บุญสมยา</h1>
        <p>✨ รายงานสรุปยอดขาย Supermarket รายประเทศ ✨</p>
    </div>

    <div class="dashboard-grid">
        <div class="card">
            <div class="card-title">📊 สัดส่วนยอดขาย</div>
            <canvas id="donutChart"></canvas>
        </div>

        <div class="card">
            <div class="card-title">📈 ยอดขายรวมแต่ละประเทศ (รายได้)</div>
            <canvas id="barChart"></canvas>
        </div>
    </div>

    <div class="table-container">
        <div class="card-title">📄 รายละเอียดข้อมูลสรุป</div>
        <table id="summaryTable">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>ประเทศ</th>
                    <th style="text-align: right;">ยอดขายรวม (บาท)</th>
                </tr>
            </thead>
            <tbody>
                </tbody>
        </table>
    </div>

    <script>
        // ข้อมูลจำลองตามรูปภาพของคุณ
        const dataSales = [
            { country: 'United States', amount: 267133 },
            { country: 'United Kingdom', amount: 173137 },
            { country: 'Germany', amount: 155168 },
            { country: 'Sweden', amount: 141056 },
            { country: 'Australia', amount: 131713 },
            { country: 'Canada', amount: 94745 },
            { country: 'New Zealand', amount: 66782 }
        ];

        // สีพาสเทลสำหรับกราฟ
        const pastelColors = [
            '#ffadad', '#ffd6a5', '#fdffb6', '#caffbf', '#9bf6ff', '#a0c4ff', '#bdb2ff'
        ];

        // 1. สร้างตารางสรุป
        const tbody = document.querySelector('#summaryTable tbody');
        dataSales.forEach((item, index) => {
            const row = `<tr>
                <td><span class="rank-circle">${index + 1}</span></td>
                <td>${item.country}</td>
                <td class="amount-cell">${item.amount.toLocaleString()}.00</td>
            </tr>`;
            tbody.innerHTML += row;
        });

        // 2. สร้างกราฟ Donut
        new Chart(document.getElementById('donutChart'), {
            type: 'doughnut',
            data: {
                labels: dataSales.map(d => d.country),
                datasets: [{
                    data: dataSales.map(d => d.amount),
                    backgroundColor: pastelColors,
                    borderWidth: 2
                }]
            },
            options: {
                plugins: { legend: { position: 'bottom' } }
            }
        });

        // 3. สร้างกราฟแท่ง (Bar Chart)
        new Chart(document.getElementById('barChart'), {
            type: 'bar',
            data: {
                labels: dataSales.map(d => d.country),
                datasets: [{
                    label: 'ยอดขายรวม',
                    data: dataSales.map(d => d.amount),
                    backgroundColor: pastelColors,
                    borderRadius: 10
                }]
            },
            options: {
                indexAxis: 'y', // ทำให้เป็นแท่งแนวนอน
                plugins: { legend: { display: false } },
                scales: {
                    x: { beginAtZero: true, grid: { display: false } },
                    y: { grid: { display: false } }
                }
            }
        });
    </script>
</body>
</html>