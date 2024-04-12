
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

        <link rel="stylesheet" type="text/css" href="webstyle.css" />

    </head>

    <body>
        <div id="container">
            <div id="sidebar">
                <h2><img src="Picture/Logo.png" alt="Logo"></h2>
                <ul>
                    <li><a href="Overview.php">Overview</a></li>
                    <li><a href="QLSP.php">Quản lý sản phẩm</a></li>
                    <li><a href="QLNV.php"><li>Quản lý nhân viên</li></a>
                    <li><a href="QLDH.php"><li>Quản lý đơn hàng</li></a>
                </ul>
            </div>
        
            <div id="header">
                <h2>ADMIN/QUẢN LÝ NHÂN VIÊN</h2> 
            </div id="content">
                <?php include "NhanVien.php"; ?>
            </div>
            <div id="footer">
                <p>© 2024 Công Ty Cổ Phần Vàng Bạc Đá Quý Flamingo</p>
            </div>

        </div>
    </body>
</html>