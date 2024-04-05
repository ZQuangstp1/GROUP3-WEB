<html>
<head>
    <link rel="stylesheet" type="text/css" href="Khung.css">    
    <style>
        #thongtin {
            margin-top: 20px; 
            display: flex;
            flex-direction: column;
            padding: 20px;
        }
        
        #thongtin label,
        #thongtin input,
        #thongtin select,
        #thongtin textarea {
            margin-bottom: 10px; 
        }

        button {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 8px 16px;
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
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / THÊM SẢN PHẨM</p>
        </div>
    </div>

    <div id="content">
        <div id="header">
            <p>ADMIN / QUẢN LÝ SẢN PHẨM / SỬA THÔNG TIN SẢN PHẨM</p>
        </div>
    
        <div id="thongtin">
            <label for="product-code">Mã sản phẩm:</label>
            <input type="text" id="product-code" name="product-code"><br><br>
    
            <label for="product-name">Tên sản phẩm:</label>
            <input type="text" id="product-name" name="product-name"><br><br>
    
            <label for="quantity">Số lượng:</label>
            <input type="number" id="quantity" name="quantity"><br><br>
    
            <label for="description">Mô tả:</label><br>
            <textarea id="description" name="description" rows="4" cols="50"></textarea><br><br>
    
            <label for="price">Giá sản phẩm:</label>
            <input type="text" id="price" name="price"><br><br>
    
            <label for="status">Tình trạng:</label>
            <select id="status" name="status">
                <option value="available">Có sẵn</option>
                <option value="out-of-stock">Hết hàng</option>
            </select><br><br>
    
            <button>Thêm thông tin</button>
        </div>
    </div>    

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>

</body>
</html>
