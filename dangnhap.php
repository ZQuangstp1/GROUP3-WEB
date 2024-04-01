<html>
<head>
    <title>Đăng Nhập</title>
    <style>
       
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .login-container {
            background-color: #f9f2e6;
            padding: 28px 33px 50px;
            max-width: 584px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .logo {
            display: block;
           margin-left :auto;
            margin-right: 0%;
            width: 35px;
        }
        .login-title {
            text-align: center;
            margin-top: 15px;
            margin-bottom : 20px;
            font: 600 30px Barlow, sans-serif;
            color: #333;
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
        .forgot-password {
            text-align: center;
            margin-top: 25px;
            font: 15px Poppins, sans-serif;
            color: #3766e8;
        }
    </style>
</head>
<body>


    <div class="login-container">
        <img
            loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/616c9d301410ca581dfc86f37ec6202edb3d0cefd2cbbcf217383b2388515c5f?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
            class="logo"
            onclick="CloseTab()"
            style="cursor: pointer;"
        />
        <div class="login-title">Đăng Nhập</div>
        <?php require_once "msg.php";?>
        <form id="loginForm" action="xulydangnhap.php" method="post" enctype="multipart/form-data">
    <input type="text" class="input-field" id="username" name="username" placeholder="Tên đăng nhập" required>
    <input type="password" class="input-field" id="password" name="password" placeholder="Mật khẩu" required>
    <button type="submit" class="login-button">Đăng nhập</button>
</form>

     
        <div class="forgot-password" onclick="window.location.href='QMK1.html'" style="cursor: pointer;">
            Quên mật khẩu ?
        </div>
        
    </div>
   
    <script>
        function CloseTab() {
            window.location.href = 'admin.php';
        }
    </script>
    
</body>
</html>