<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê doanh thu và đơn hàng</title>
    <link rel="stylesheet" type="text/css" href="Khung.css">    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .chart-row1 {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            max-width: 100%;
        }

        .chart-container {
            width: 100%;
            margin-right: 53px; /* Add space between charts */
            margin-left: 43px; /* Add space between charts */

        }

        .chart-canvas {
            max-width: 100%;

        }

        .view-report-btn {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 8px 12px; /* Giảm kích thước button */
    background-color: #DF8A8A;
    border: none;
    cursor: pointer;
    margin-right: 5px; /* Giảm khoảng cách giữa các button */
    position: absolute;
    top: 100px;
    right: 10px;
}

.view-report-btn:hover {
    background-color: #6a4141;
}

    </style>
</head>
<body>
    <div id="sidebar">
        <h2><img src="Picture/Logo.png" alt="Logo"></h2>
        <ul>
            <li><a href="Overview.php">Overview</a></li>
            <li><a href="QLSP.php">Quản lý sản phẩm</a></li>
            <li>Quản lý nhân viên</li>
            <li>Quản lý đơn hàng</li>
        </ul>
    </div>

    <div id="content">
        <div id="header">
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / THỐNG KÊ </p>
        </div>
        <button class="view-report-btn" onclick="window.location.href='Overview_BaoCaoBanHang.php';">Xem báo cáo</button>
        <div id="main-content">
            <h2>Thống kê doanh thu và đơn hàng năm 2022</h2>
            <?php
            require_once("db_module.php");
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "SELECT SUM(profit) AS total_profit FROM financialreport WHERE DateID BETWEEN '20220101' AND '20221231'");
            $row = mysqli_fetch_assoc($result);
            $totalProfit = $row['total_profit'];
            $result = chayTruyVanTraVeDL($link, "SELECT MONTH(DateID) AS month, SUM(totalOrders) AS total_orders FROM financialreport WHERE YEAR(DateID) = 2022 AND MONTH(DateID) >= 10 GROUP BY MONTH(DateID)");
            $orderSalesData = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $orderSalesData[$row['month']] = $row['total_orders'];
            }
            $result = chayTruyVanTraVeDL($link, "SELECT od.productID, SUM(od.quantity) AS total_quantity FROM orderdetail od INNER JOIN financialreport fr ON od.orderID = fr.orderID WHERE YEAR(fr.DateID) = 2022 AND MONTH(fr.DateID) >= 10 GROUP BY od.productID ORDER BY total_quantity DESC LIMIT 10");
            $productSalesData = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $productSalesData[$row['productID']] = $row['total_quantity'];
            }
            ?>
            <!-- First row of charts -->
            <p><strong>Tổng doanh thu năm 2022: </strong> <?php echo number_format($totalProfit, 0, ',', '.') . ' VND'; ?></p>
            <div class="chart-row1">
                <div class="chart-container">
                    <canvas id="orderSalesChart" class="chart-canvas"></canvas>
                </div>
                <div class="chart-container">
                    <canvas id="topProductsChart" class="chart-canvas"></canvas>
                </div>
            </div>

            <!-- Second row of charts -->
            <div class="chart-row2">
                <div class="chart-container">
                    <canvas id="revenueChart" class="chart-canvas"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        <p>© 2024 Công Ty Cổ Phần Vàng Bạc Đá Quý Flamingo.</p>
    </div>

    <script>
        var ctxOrderSales = document.getElementById('orderSalesChart').getContext('2d');
        var orderSalesChart = new Chart(ctxOrderSales, {
            type: 'bar',
            data: {
                labels: ['Tháng 10', 'Tháng 11', 'Tháng 12'],
                datasets: [{
                    label: 'Tổng đơn hàng đã bán',
                    data: [<?= isset($orderSalesData[10]) ? $orderSalesData[10] : 0; ?>, <?= isset($orderSalesData[11]) ? $orderSalesData[11] : 0; ?>, <?= isset($orderSalesData[12]) ? $orderSalesData[12] : 0; ?>],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctxTopProducts = document.getElementById('topProductsChart').getContext('2d');
        var topProductsChart = new Chart(ctxTopProducts, {
            type: 'bar',
            data: {
                labels: [<?= "'" . implode("', '", array_keys($productSalesData)) . "'"; ?>],
                datasets: [{
                    label: 'Sản phẩm bán chạy',
                    data: [<?= implode(', ', $productSalesData); ?>],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        var ctxRevenue = document.getElementById('revenueChart').getContext('2d');
        var revenueChart = new Chart(ctxRevenue, {
            type: 'line',
            data: {
                labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
                datasets: [{
                    label: 'Biến động về doanh thu năm 2022',
                    data: [
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            $result = chayTruyVanTraVeDL($link, "SELECT SUM(profit) AS monthly_profit FROM financialreport WHERE YEAR(DateID) = 2022 AND MONTH(DateID) = $i");
                            $row = mysqli_fetch_assoc($result);
                            echo $row['monthly_profit'] ? $row['monthly_profit'] : 0;
                            echo ",";
                        }
                        ?>
                    ],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>