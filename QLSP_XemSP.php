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
            font-family: 'Barlow, sans-serif';
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
        .pagination {
    text-align: center;
}

.pagination-button {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 8px 16px;
    background-color: #DF8A8A;
    border: none;
    cursor: pointer;
    margin: 0 5px; /* Khoảng cách giữa các button */
}

.pagination-button:hover {
    background-color: #6a4141;
}

.product-name,
.product-description {
    text-align: justify;
}

.form-container input[type="text"],
.form-container input[type="number"],
.form-container select {
    font-size: 12px;
    width: calc(100% - 4px); /* Chiều dài của input/select */
    margin-bottom: 5px; /* Khoảng cách giữa các dòng */
    padding: 2px; /* Khoảng cách bên trong input/select */
    box-sizing: border-box; /* Tính cả padding và border vào chiều rộng và chiều cao */
}
.form-container input[type="submit"]:hover,
.form-container input[type="reset"]:hover,
.form-container button:hover {
    background-color: #6a4141;
}
.form-container button,
.form-container input[type="submit"],
.form-container input[type="reset"] {
    font-family: 'Barlow, sans-serif';
    padding: 6px 10px; /* Giảm kích thước button */
    background-color: #DF8A8A;
    border: none;
    cursor: pointer;
    margin-right: 5px; /* Giảm khoảng cách giữa các button */
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
        <?php
            include("SanPham.php");
        ?>
    </div>

    <div id="footer">
        <p>© 2024 Công Ty Cổ Phần Vàng Bạc Đá Quý Flamingo.</p>
    </div>

</body>
</html>