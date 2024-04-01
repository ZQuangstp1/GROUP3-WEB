<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đổi Mật Khẩu</title>
    <style>
         body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #fff;
        }
        .change-password-container {
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
            margin-bottom: 20px;
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
    <div class="change-password-container">
        <div class="header">
            <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/789c8c6fcda2ba4492a8efdc23c58abf6053ef6bfee07980265a57634f455d73?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                class="logo"
            />
            <div class="title">Đổi Mật Khẩu</div>
        </div>
        <div class="input-section">
            <input type="text" placeholder="Mật khẩu cũ " class="input-field">
            <input type="password" placeholder="Mật khẩu mới" class="input-field">
            <input type="password" placeholder="Xác nhận mật khẩu mới" class="input-field">
            <button class="submit-button">Xác nhận</button>
        </div>
    </div>
</body>
</html>
