<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Khung.css">    
    <style>
        /* CSS hiện tại của bạn */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 5px 1px;
            font-size: 14px; /* Giảm kích thước chữ */
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
        }
        button {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 6px 10px; /* Giảm kích thước button */
            background-color: #DF8A8A;
            border: none;
            cursor: pointer;
            margin-right: 5px; /* Giảm khoảng cách giữa các button */
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
            margin-top: 10px;
            text-align: center;
        }
        /* CSS mới để cố định footer ở dưới trang */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            position: relative;
        }

        #footer {
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #FFE5EC; /* Màu nền của footer */
            padding-top: 5px; /* Khoảng cách từ chữ trong footer đến đỉnh của footer */
        }
        /* Thêm CSS cho dòng đầu tiên */
        .pink-row th {
            background-color: #FFC0CB; /* Màu hồng */
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
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / SẢN PHẨM </p>
        </div>
        
        <div id="search">
            <h3>Tra cứu</h3>
            <input type="text" placeholder="Nhập từ khóa...">
            <button>Tìm sản phẩm</button>
            <a href="QLSP_ThemSP.php"><button>Thêm sản phẩm</button></a>

        </div>

        <?php
// Kết nối vào CSDL
require_once("db_module.php");

// Hàm hiển thị sản phẩm
function view_SP() {
    $link = null;
    taoKetNoi($link);

    // Số lượng sản phẩm trên mỗi trang
    $rows_per_page = 3;

    // Trang hiện tại, mặc định là trang 1
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Tính toán vị trí bắt đầu lấy dữ liệu từ CSDL
    $start_from = ($current_page - 1) * $rows_per_page;

    // Thực hiện truy vấn SQL để lấy số lượng sản phẩm trong CSDL
    $total_rows_query = chayTruyVanTraVeDL($link, "SELECT COUNT(*) AS total_rows FROM product");
    $total_rows_data = mysqli_fetch_assoc($total_rows_query);
    $total_rows = $total_rows_data['total_rows'];

    // Tính toán tổng số trang dựa trên số lượng sản phẩm và số sản phẩm trên mỗi trang
    $total_pages = ceil($total_rows / $rows_per_page);

    // Cập nhật câu truy vấn SQL để lấy dữ liệu từ vị trí bắt đầu mới này
    $query = "SELECT * FROM product LIMIT $start_from, $rows_per_page"; 

    // Thực thi câu truy vấn SQL cập nhật
    $result = chayTruyVanTraVeDL($link, $query);

    echo "<table width='100%' border='1' style='margin-bottom: 2%;'>";
    echo "<tr class='pink-row'>"; // Hàng đầu tiên màu hồng
    echo "<th>Mã sản phẩm</th>";
    echo "<th>Tên sản phẩm</th>";
    echo "<th>Số lượng</th>";
    echo "<th>Mô tả</th>";
    echo "<th>Giá sản phẩm</th>";
    echo "<th>Tình trạng</th>";
    echo "<th>Thao tác</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["productID"] . "</td>";
        echo "<td>" . $row["productName"] . "</td>";
        echo "<td>" . $row["quantityAvailable"] . "</td>";
        echo "<td>" . $row["description"] . "</td>";
        echo "<td>" . $row["unitPrice"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>
                <img src='Picture/Icon Xoa.png' alt='Xoa' onclick='confirmDelete(" . $row["productID"] . ")' style='cursor: pointer;'>
                <a href='QLSP_SuaSP.php'><img src='Picture/Icon Sua.png' alt='Sua'></a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
    giaiPhongBoNho($link, $result);

    // Hiển thị nút chuyển trang
    echo "<div id='pagination'>";
    for ($i = 1; $i <= $total_pages; $i++) {
        // Kiểm tra trang hiện tại để áp dụng CSS tương ứng
        $active_class = ($i == $current_page) ? 'active' : '';
        echo "<a href='?opt=view_SP&page=$i'><button class='$active_class'>$i</button></a>";
    }
    echo "</div>";
    }

    // Gọi hàm view_SP() mặc định khi không có tham số opt được truyền
    if (isset($_GET["opt"])) {
        $_opt = $_GET["opt"];
    } else {
        // Nếu 'opt' không được đặt, bạn có thể đặt một giá trị mặc định hoặc xử lý nó theo cách cụ thể
        $_opt = ""; // Đặt giá trị mặc định là chuỗi rỗng
    }

    switch ($_opt) {
        case "view_SP":
            view_SP();
            break;
        //Thêm các trường hợp khác ở đây nếu cần
        default:
            view_SP(); // Mặc định hiển thị danh sách sản phẩm
    }
    ?>

        <script>
            function confirmDelete(productID) {
                var result = confirm("Xác nhận xóa sản phẩm");
                // Kiểm tra kết quả xác nhận
                if (result) {
                    // Nếu người dùng đồng ý
                    alert("Bạn đã đồng ý xóa sản phẩm có ID: " + productID);
                    // Thêm mã xóa sản phẩm ở đây
                } else {
                    // Nếu người dùng không đồng ý
                    alert("Bạn không đồng ý xóa sản phẩm.");
                }
            }
        </script>

    </div>

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>

</body>
</html>
