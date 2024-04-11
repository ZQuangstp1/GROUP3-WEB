<?php 
require_once "db_module.php";
require_once "users_module.php";
session_start();


if (isset($_POST)) {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $_username = $_POST["username"];
        $_password = $_POST["password"];

        $link = null;
        taoKetNoi($link);

        $customerID= dangnhap($link, $_username, $_password);
    
        if ($customerID ) { 
            //$_SESSION['customerID'] = $customerID;
            //$_SESSION['accountID'] = $_accountID;
            $_SESSION['username'] = $_username;
            giaiPhongBoNho($link, true);
            header("Location: index.php");
            exit(); // Thoát để ngăn code phía sau chạy khi đã chuyển hướng
        } else {
            giaiPhongBoNho($link, true);
            $_SESSION['error_message'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }

        /* Này lấy cả 2 biến mà k đc 
         list($customerID, $accountID = dangnhap($link, $_username, $_password);
    
        if ($customerID && $accountID) { // Nếu có cả customerID và accountID, tức là đăng nhập thành công
            $_SESSION['customerID'] = $customerID;
            $_SESSION['accountID'] = $accountID;
            giaiPhongBoNho($link, true);
            header("Location: TTKH.php");
            exit(); // Thoát để ngăn code phía sau chạy khi đã chuyển hướng
        } else {
            giaiPhongBoNho($link, true);
            $_SESSION['error_message'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
        }*/
    }
}
?>

<html>

<head>
    <title>Đăng Nhập</title>
    <style>
        .error-message {
            /* CSS cho thông báo lỗi */
            font-size: bigger;
            padding: 10px;

            margin-top: 15px;
            border-radius: 5px;
            text-align: center;
            background-color: #f2dede;
            /* Màu nền cho thông báo lỗi */
            color: #a94442;
            /* Màu chữ cho thông báo lỗi */
            font-weight: bold;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f2e6;
        }

        .login-container {
            background-color: #f9f2e6;
            padding: 28px 33px 50px;
            max-width: 584px;
            width: 100%;
            margin: 0 auto;
            border-radius: 8px;
        }

        .logo {
            display: block;
            margin-left: auto;
            margin-right: 0%;
            width: 35px;
        }

        .login-title {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 20px;
            font: 600 30px Barlow, sans-serif;
            color: #333;
        }
        .cctk {
            text-align: center;
            margin-top: 15px;          
            font: 400 15px Barlow, sans-serif;
            color: #fb6f92;
        }

        .input-field {
            font-family: Barlow, sans-serif;
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid rgba(212, 213, 217, 1);
            border-radius: 0px;
        }

        .login-button {
            background-color: #fb6f92;
            color: #f9f2e6;
            padding: 15px;
            border: none;
            border-radius: 0px;
            margin-top: 20px;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            width: 100%;
            font-family: Oswald, sans-serif;
            letter-spacing: 1.35px;
        }

       
    </style>
</head>

<body>


    
    <div class="login-container">
        
        <div class="login-title">Đăng Nhập</div>

        <form id="loginForm" action="dangnhap.php" method="post" enctype="multipart/form-data">
            <input type="text" class="input-field" id="username" name="username" placeholder="Tên đăng nhập" required>
            <input type="password" class="input-field" id="password" name="password" placeholder="Mật khẩu" required>


            <?php if (isset($_SESSION['error_message'])): ?>
                <div class="error-message">
                    <?php echo $_SESSION['error_message']; ?>
                </div>
                <?php unset($_SESSION['error_message']); ?> <!-- Xóa session để không hiển thị lại -->
            <?php endif; ?>
           
            <button type="submit" class="login-button">Đăng nhập</button>
            <div class="cctk">Chưa có tài khoản? <a href="dangki.php">Đăng ký ngay</a></div>

        </form>

        </div>
        
     
   
</body>

</html>