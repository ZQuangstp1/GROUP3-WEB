<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
    <link rel="stylesheet" type="text/css" href="Khung.css">    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        <div id="main-content">
            <h2>Thống kê</h2>
            <?php
            require_once("db_module.php");
            $link = null;
            taoKetNoi($link);
            $result = chayTruyVanTraVeDL($link, "SELECT SUM(profit) AS total_profit FROM financialreport WHERE DateID BETWEEN '20220101' AND '20221231'");
            $row = mysqli_fetch_assoc($result);
            $totalProfit = $row['total_profit'];
            echo "<p>Tổng doanh thu năm 2022: $totalProfit</p>";
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
            <canvas id="orderSalesChart" width="100" height="75"></canvas>
            <canvas id="topProductsChart" width="100" height="75"></canvas>
            <canvas id="revenueChart" width="100" height="75"></canvas>

            <script>
                var ctxOrderSales = document.getElementById('orderSalesChart').getContext('2d');
                var orderSalesChart = new Chart(ctxOrderSales, {
                    type: 'bar',
                    data: {
                        labels: ['Tháng 10', 'Tháng 11', 'Tháng 12'],
                        datasets: [{
                            label: 'Tổng đơn hàng đã bán',
                            data: [
                                <?= isset($orderSalesData[10]) ? $orderSalesData[10] : 0; ?>,
                                <?= isset($orderSalesData[11]) ? $orderSalesData[11] : 0; ?>,
                                <?= isset($orderSalesData[12]) ? $orderSalesData[12] : 0; ?>
                            ],
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
                            label: 'Số lượng sản phẩm đã bán',
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
                            label: 'Doanh thu',
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
        </div>
    </div>

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>
</body>
</html>
