<html>
<head>
    <link rel="stylesheet" type="text/css" href="Khung.css">    
    <style>
       #thongtin {
            margin-right: 100px;
            margin-top: 20px; 
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        

        button {
            margin-left: 350px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 5px 16px;
            background-color: #DF8A8A;
            border: none;
            cursor: pointer;
        }
        button:hover {
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
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / SỬA THÔNG TIN SẢN PHẨM</p>
        </div>
    </div>

    <div id="content">
        <div id="header">
            <p>ADMIN / KHUYẾN MÃI / THÊM KHUYẾN MÃI</p>
        </div>
    
        <div id="content">
            <div id="header">
                <p>ADMIN / KHUYẾN MÃI / THÊM KHUYẾN MÃI</p>
            </div>
        
            <div id="thongtin">
                <label for="promo-id">ID:</label>
                <input type="text" id="promo-id" name="promo-id"><br><br>
        
                <label for="promo-name">Tên Chương trình khuyến mãi:</label>
                <input type="text" id="promo-name" name="promo-name"><br><br>
        
                <label for="discount">Giảm giá:</label>
                <input type="text" id="discount" name="discount"><br><br>
        
                <label for="status">Trạng thái:</label>
                <select id="status" name="status">
                    <option value="active">Hoạt động</option>
                    <option value="inactive">Ngưng hoạt động</option>
                </select><br><br>
        
                <label for="start-date">Ngày bắt đầu:</label>
                <input type="date" id="start-date" name="start-date"><br><br>
        
                <label for="end-date">Ngày kết thúc:</label>
                <input type="date" id="end-date" name="end-date"><br><br>
        </div>        
            <button>Thêm khuyến mãi</button>
        </div>
    </div>    

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>

</body>
</html>
