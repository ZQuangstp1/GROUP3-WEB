<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quên Mật Khẩu</title>
    <style>
         body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .forgot-password-container {
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
        .title {
            text-align: center;
            margin-top: 15px;
            margin-bottom : 20px;
            font: 600 30px Barlow, sans-serif;
            color: #333;
        }
       
        .input-field {
            font-family: Barlow, sans-serif;
            width: 95%;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid rgba(212, 213, 217, 1);
            border-radius: 0px;
        }
        .submit-button {
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
    <div class="forgot-password-container">
        <div class="header">
            <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/789c8c6fcda2ba4492a8efdc23c58abf6053ef6bfee07980265a57634f455d73?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                class="logo"
            />
            <div class="title">Quên Mật Khẩu</div>
        </div>
        <div class="input-section">
            <input type="text" id="username" placeholder="Số điện thoại/ Email đăng nhập" class="input-field">
            <button class="submit-button" onclick="checkAndRedirect()" style="cursor: pointer;">Kiểm tra</button>
            <div id="error-message" class="error-message" style="display: none; margin-top : 20px;   font-family: Barlow, sans-serif; color :#fa0945; " ></div> <!-- Ô thông báo lỗi -->
        </div>
    </div>
    
    <script>
        function checkAndRedirect() {
            var username = document.getElementById('username').value;
            var existsInDatabase = checkUsernameInDatabase(username);
    
            if (existsInDatabase) {
                window.location.href = "KT.html";
            } else {
                var errorMessage = document.getElementById('error-message');
                errorMessage.textContent = "Email/ Số điện thoại không tồn tại";
                errorMessage.style.display = "block"; // Hiển thị ô thông báo lỗi
            }
        }
    
        function checkUsernameInDatabase(username) {
            // Đây là nơi bạn thực hiện kiểm tra username trong cơ sở dữ liệu
            // Trong ví dụ này, tôi sẽ giả định username được kiểm tra là 'test@example.com'
            return username === 'test@example.com'; // Giả sử username này tồn tại trong database
        }
    </script>
    
    </body>
    </html>