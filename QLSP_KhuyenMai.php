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
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            width: 200px;
        }
        button {
            font-family: Barlow, sans-serif;
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
        /* CSS mới để cố định footer ở dưới trang */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            position: relative;
        }

        #footer {
            font-size: 11px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: #FFE5EC; /* Màu nền của footer */
            padding-top: 5px; /* Khoảng cách từ chữ trong footer đến đỉnh của footer */
        }
        .pink-row {
        background-color: pink; /* Định nghĩa màu hồng cho dòng */
    }
    /* Đảm bảo các trường nhập liệu có chiều rộng như nhau */
    form input[type="text"],
    form input[type="date"],
    form input[type="submit"] {
        width: calc(100% - 12px); /* Trừ điều chỉnh của padding */
        padding: 6px; /* Điều chỉnh padding để tạo khoảng cách */
        margin-bottom: 2px; /* Tạo khoảng cách giữa các dòng */
    }

    /* Điều chỉnh kích thước nút thêm chương trình khuyến mãi */
    form input[type="submit"] {
        width: auto; /* Điều chỉnh chiều rộng tự động */
        margin-top: 10px; /* Tạo khoảng cách từ trường nhập liệu cuối cùng */
        font-family: 'Barlow, sans-serif';
            padding: 6px 10px; /* Giảm kích thước button */
            background-color: #DF8A8A;
            border: none;
            cursor: pointer;
            margin-right: 5px; /* Giảm khoảng cách giữa các button */
    }

    form input[type="submit"]:hover {
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
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / KHUYẾN MÃI </p>
        </div>

        <?php
            include("KhuyenMai.php");
        ?>

    <div id="footer">
        <p>© 2024 Công Ty Cổ Phần Vàng Bạc Đá Quý Flamingo.</p>
    </div>

</body>
</html>
