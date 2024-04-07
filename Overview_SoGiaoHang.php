<html>
<head>
    <link rel="stylesheet" type="text/css" href="Khung.css">    
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 15px 1px;
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
        }

        button {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 8px 16px;
            background-color: #DF8A8A;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #6a4141;
        }

        #search {
            display: flex;
            justify-content: center; 
            align-items: center; 
            padding: 20px;
            margin-top: 50px; 
            text-align: center;
        }

        #search h3 {
            margin-right: 10px; 
        }

        input[type="text"] {
            flex: 1; 
            margin-right: 10px; 
            margin-top: 8px; 
        }

        #pagination {
            margin-top: 20px;
            text-align: center;
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
            <p>ADMIN / OVERVIEW / SỔ GIAO HÀNG</p>
        </div>
    
        <script>
            function searchDeliveryBook() {
                var keyword = document.getElementById("searchInput").value.trim();
                window.location.href = '?keyword=' + encodeURIComponent(keyword);
            }
        </script>
        <div id="search">
            <h3>Tra cứu</h3>
            <input type="text" id="searchInput" placeholder="Nhập từ khóa...">
            <button onclick="searchDeliveryBook()">Tìm</button>
        </div>

<?php
// Kết nối vào CSDL
require_once("db_module.php");

// Hàm hiển thị Sổ giao hàng với phân trang và tìm kiếm
function show_delivery_book($page = 1, $rows_per_page = 5) {
    $link = null;
    taoKetNoi($link);

    // Tính toán offset
    $offset = ($page - 1) * $rows_per_page;

    // Xử lý từ khóa tìm kiếm
    $keyword = isset($_GET['keyword']) ? trim($_GET['keyword']) : '';

    // Tạo điều kiện tìm kiếm trong câu truy vấn
    $search_condition = '';
    if (!empty($keyword)) {
        $search_condition = "WHERE DATE_FORMAT(O.DateID, '%d-%m-%Y') LIKE '%$keyword%' OR O.orderID LIKE '%$keyword%' OR O.status LIKE '%$keyword%' OR CONCAT(C.lastName, ' ', C.firstName) LIKE '%$keyword%'";
    }

    // Truy vấn CSDL để lấy dữ liệu từ bảng Orders với LIMIT và OFFSET
    $result = chayTruyVanTraVeDL($link, "SELECT DATE_FORMAT(O.DateID, '%d-%m-%Y') AS formattedDate, O.orderID, O.status, CONCAT(C.lastName, ' ', C.firstName) AS customerName FROM Orders O LEFT JOIN Customer C ON O.customerID = C.customerID $search_condition LIMIT $offset, $rows_per_page");

    // Bắt đầu hiển thị bảng
    echo "<table>";
    echo "<thead>";
    echo "<tr style='background-color: pink'>";
    echo "<th>Ngày</th>";
    echo "<th>Số hóa đơn</th>";
    echo "<th>Trạng thái HD</th>";
    echo "<th>Khách hàng</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    // Duyệt qua từng hàng dữ liệu và hiển thị
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["formattedDate"] . "</td>"; 
        echo "<td>" . $row["orderID"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>" . $row["customerName"] . "</td>";
        echo "</tr>";
    }

    // Kết thúc bảng
    echo "</tbody>";
    echo "</table>";

    // Giải phóng bộ nhớ và đóng kết nối
    giaiPhongBoNho($link, $result);
}

// Lấy trang hiện tại từ tham số GET
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;

// Gọi hàm hiển thị Sổ giao hàng với phân trang và tìm kiếm
show_delivery_book($current_page);
?>

    <div id="pagination">
        <?php
        // Số lượng hàng dữ liệu
        $total_rows = 100; // Giả sử có 100 hàng dữ liệu

        // Số trang
        $total_pages = ceil($total_rows / 6); // Số trang là tổng số hàng dữ liệu chia cho số hàng trên mỗi trang

        // Hiển thị nút chuyển trang
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='?page=$i'><button>$i</button></a>";
        }
        ?>
    </div>

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>
</body>
</html>