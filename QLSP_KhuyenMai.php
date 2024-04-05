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
            font-size: 15px; /* Giảm kích thước chữ */
        }
        .pink-row th { /* Lớp CSS cho dòng đầu tiên */
            background-color: #FFC0CB; /* Màu hồng */
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
        }
        button {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 8px 12px; /* Giảm kích thước button */
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
    </style>
    <script>
        function confirmDelete() {
            var result = confirm("Xác nhận xóa khuyến mãi");
            
            // Kiểm tra kết quả xác nhận
            if (result) {
                // Nếu người dùng đồng ý, thực hiện hành động xóa
                alert("Bạn đã đồng ý xóa khuyến mãi.");
            } else {
                // Nếu người dùng không đồng ý
                alert("Bạn không đồng ý xóa khuyến mãi.");
            }
        }
    </script>
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
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / KHUYẾN MÃI </p>
        </div>
        
        <div id="search">
            <h3>Tra cứu</h3>
            <input type="text" placeholder="Nhập từ khóa...">
            <button>Tìm</button>
            <a href="QLSP_ThemKM.php"><button>Thêm khuyến mãi</button></a>
        </div>

        <?php
    //Tạo kết nối vào CSDL
    require_once ("db_module.php");

    function view_KM()
    {
        $link = null;
        taoKetNoi($link);
        //Kết nối và lấy dữ liệu từ CSDL
        $result = chayTruyVanTraVeDL($link, "SELECT * FROM discount");

        echo "<table width='100%' cellspacing='5' cellpadding='5' border='1' style='margin-bottom: 3%;margin-top: 2%' >";
        echo "<tr class='pink-row'>";
        echo "<th>ID</th>";
        echo "<th>Tên Chương trình khuyến mãi</th>";
        echo "<th>Giảm giá</th>";
        echo "<th>Trạng thái</th>";
        echo "<th>Ngày bắt đầu</th>";
        echo "<th>Ngày kết thúc</th>";
        echo "<th>Thao tác</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["discountID"] . "</td>";
            echo "<td>" . $row["voucherCode"] . "</td>";
            echo "<td>" . $row["discountAmount"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "<td>" . $row["startDate"] . "</td>";
            echo "<td>" . $row["endDate"] . "</td>";
            echo "<td><img src='Picture/Icon Xoa.png' alt='Xoa' onclick='confirmDelete()' style='cursor: pointer;'><a href='QLSP_SuaKM.php'><img src='Picture/Icon Sua.png' alt='Sua'></a></td>";
            echo "</tr>";
        }

        echo "</table>";
        giaiPhongBoNho($link, $result);
    }

    // Gọi hàm view_KM() mặc định khi không có tham số opt được truyền
    if (isset($_GET["opt"])) {
        $_opt = $_GET["opt"];
    } else {
        // Nếu 'opt' không được đặt, bạn có thể đặt một giá trị mặc định hoặc xử lý nó theo cách cụ thể
        $_opt = ""; // Đặt giá trị mặc định là chuỗi rỗng
    }

    switch ($_opt) {
        case "view_KM":
            view_KM();
            break;
        //Thêm các trường hợp khác ở đây nếu cần
        default:
            view_KM(); // Mặc định hiển thị danh sách khuyến mãi
    }
?>        

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>

</body>
</html>
