<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            color: inherit;
        }

        #sidebar {
            width: 250px;
            height: 100vh;
            background: #F9F2E6;
            color: #fff;
            float: left;
            border-right: 2px solid #DF8A8A;
        }

        #sidebar ul {
            color: #10090d81;
            list-style: none;
            padding: 0;
            margin: 0;
            margin-top: -50px;
        }

        #sidebar ul li {
            padding: 15px;
            text-align: center;
            cursor: pointer;
            border-bottom: 2px solid #DF8A8A;
        }

        #sidebar ul li:hover {
            background-color: #DF8A8A;
            color: #fff;
        }

        #content {
            margin-left: 250px;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        #header {
            font-size: 13px;
            font-weight: bold;
            background: #F9F2E6;
            color: #935a5ac9;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            border-bottom: 2px solid #DF8A8A;
        }

        #footer {
            font-size: x-small;
            background: #FFE5EC;
            color: #10090d81;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 2px solid #DF8A8A;
        }

        #sidebar h2 {
            text-align: center;
            margin-top: -25px;
        }

        #sidebar h2 img {
            width: 150px;
            height: auto;
        }

        #Button {
            margin-top: 50px;
            text-align: center;
        }

        #Button button {
            margin: 10px;
        }

        #thongtinnhanvien,
        #phanquyentruycap {
            background-color: #FFE5EC;
            color: #832E43;
            border: none;
            cursor: pointer;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 14px;
            width: 950px;
            text-align: center;
            height: 100px;
        }

        #thongtinnhanvien img,
        #phanquyentruycap img {
            width: 70px;
        }

        #thongtinnhanvien:hover,
        #phanquyentruycap:hover {
            background-color: #dea3a385;
            color: #fff;
        }

        @media (max-width: 768px) {
            #sidebar {
                width: 100%;
                height: auto;
                position: relative;
                float: none;
            }

            #content,
            #header {
                margin-left: 0;
                width: 100%;
            }

            #header {
                position: relative;
                top: 0;
                left: 0;
            }

            #Button {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            #thongtinnhanvien,
            #phanquyentruycap {
                width: 90%;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 480px) {

            #thongtinnhanvien,
            #phanquyentruycap {
                font-size: 12px;
            }

            #thongtinnhanvien img,
            #phanquyentruycap img {
                width: 50px;
            }
        }
    </style>
</head>

<body>

    <div id="sidebar">
        <h2><img src="Picture/Logo.png" alt="Logo"></h2>
        <ul>
            <li><a href="Overview.php">Overview</a></li>
            <li><a href="QLSP.php">Quản lý sản phẩm</a></li>
            <a href="QLNV.php">
                <li>Quản lý nhân viên</li>
            </a>
            <a href="QuanLyDonHang.php">
                <li>Quản lý đơn hàng</li>
            </a>
        </ul>
    </div>

    <div id="content">
        <div id="header">
            <p>ADMIN / QUẢN LÝ NHÂN VIÊN</p>
        </div>
    </div>

    <div id="Button">
        <a href="QLNV_XemNV.php">
            <button id="thongtinnhanvien">
                <img src="Picture/Icon Thongtinnhanvien.png" alt="Icon Thông tin nhân viên">
                <br>
                Thông tin nhân viên
            </button>
        </a>
        <a href="QLNV_Shift.php">
            <button id="phanquyentruycap">
                <img src="Picture/Icon Phanquyen.png" alt="Icon Phân quyền truy cập">
                <br>
                Phân quyền truy cập
            </button>
        </a>
    </div>

    <div id="footer">
        <p>© 2024 Jewelry Store. All rights reserved.</p>
    </div>

</body>

</html>