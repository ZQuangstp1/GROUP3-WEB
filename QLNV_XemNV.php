
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script>
            function ConfirmDel() {
                var confirmed = confirm("Bạn chắc chắn muốn xóa không?");
                if (confirmed) {
                    // Thực hiện hành động xóa nếu người dùng chọn OK
                    // Ví dụ: gọi hàm xóa hoặc gửi yêu cầu xóa tới server
                    console.log("Đã xóa");
                }
            }
        </script>

        <style>
            #container{
                width: 100%; margin: auto 0px; 
                background-color: azure;
            }

            body {
            margin: 0;
            padding: 0;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        #sidebar {
            width: 13%;
            height: 100vh;
            background: #F9F2E6;
            color: #fff;
            position: fixed;
            float: left;
            border-right: 2px solid #DF8A8A; 
        }
        #sidebar h2 {
            text-align: center;
            margin-top: -25px;
        }

        #sidebar h2 img {
            width: 150px;
            height: auto;

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

        #header {
            font-size:13px;
            font-weight: bold;
            background: #F9F2E6;
            color: #935a5ac9;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 13%;
            width: 100%;
            border-bottom: 2px solid #DF8A8A; 
        }

        #content{
            background-color: white;
            width: 87%;
            height: auto;
            float: left;
            margin-left: 13.2%;
            margin-top: 85px;
        }
        #Data_tb{
            width: 100%;
            height: 500px;
            margin-top: 5%;
            display: flex;
        }
        #Data_tb table thead tr th {
            width: 12.5%;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
        }

        #Data_tb table tbody tr td {
            height: 20%;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            padding-left: 10px;
        }
        #pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 50px;
        padding: 10px 0; /* Thêm padding trên và dưới */
        margin: 10px;
        margin-bottom: 4%;
        }

        #pagination button {
        padding: 10px 20px;
        margin: 0 10px; /* Khoảng cách giữa các nút */
        border: none;
        border-radius: 5px; /* Làm tròn góc */
        background-color: #DF8A8A; /* Màu nền */
        color: white; /* Màu chữ */
        cursor: pointer; /* Hiệu ứng con trỏ */
        transition: background-color 0.3s ease; /* Hiệu ứng chuyển màu */
        }

        #pagination button:hover {
        background-color: #935a5a; /* Màu khi hover */
        }

        #pagination span {
        margin: 0 10px; /* Khoảng cách giữa văn bản và nút */
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

        #hover_img:hover{
            transform: scale(1.1); /* Phóng to ảnh 10% khi hover */
            transition: transform 0.3s ease-in-out; /* Hiệu ứng chuyển đổi mượt mà trong 0.3 giây */
        }
        a {
            text-decoration: none;
            color: inherit; 
        }

        a:hover {
            color: inherit; 
        }
        @media (max-width: 768px) {
        #sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
        #header, #content {
        margin-left: 0;
        width: 100%;
    }
    #content {
        margin-top: 20px;
        }
    }

    @media (max-width: 480px) {
        #Data_tb table, #Data_tb thead, #Data_tb tbody, #Data_tb th, #Data_tb td, #Data_tb tr { 
            display: block;
        }
        #Data_tb th, #Data_tb td {
            text-align: right;
            padding-left: 50%;
        }
    }

        </style>
    </head>

    <body>
        <div id="container">
            <div id="sidebar">
                <h2><img src="Picture/Logo.png" alt="Logo"></h2>
                <ul>
                    <li><a href="Overview.php">Overview</a></li>
                    <li><a href="QLSP.php">Quản lý sản phẩm</a></li>
                    <a href="QLNV.php"><li>Quản lý nhân viên</li></a>
                    <a href="QuanLyDonHang.php"><li>Quản lý đơn hàng</li></a>
                </ul>
            </div>
        
            <div id="header">
                <h2>ADMIN/XEM THÔNG TIN NHÂN VIÊN</h2> 
            </div id="content">
                <?php include "NhanVien.php"; ?>
            </div>
            <div id="footer">
                <p>© 2024 Jewelry Store. All rights reserved.</p>
            </div>

        </div>
    </body>
</html>