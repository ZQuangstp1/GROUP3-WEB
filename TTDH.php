<?php
// Kết nối đến cơ sở dữ liệu
require_once("db_module.php");
session_start();


$link = null;
taoKetNoi($link);

global $new_customerID;

if(isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];
    
    // Biến $gender là giới tính cần cập nhật
    // Giới tính Nam sẽ được lưu là 'M', Nữ là 'F', và Khác là 'unknown'
    if ($gender == "Nam") {
        $gender_code = "M";
    } elseif ($gender == "Nữ") {
        $gender_code = "F";
    }
    
    // Câu lệnh SQL để chèn dữ liệu mới vào bảng customer
    $sql = "UPDATE customer SET 
        lastName = '$lastName', 
        firstName = '$firstName', 
        phone = '$phone', 
        email = '$email', 
        gender = '$gender_code', 
        dateOfBirth = '$dateOfBirth' 
        WHERE customerID = '" . $_SESSION['newcustomerID']  . "'";

    
    // Thực thi truy vấn
    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if($result) {
        echo "<script>alert('Tạo thông tin thành công');</script>";
        // Redirect hoặc chuyển hướng tới trang khác sau khi cập nhật thành công
        echo "<script>window.location.href='TTKH.php';</script>";
    } else {
        echo "<script>alert('Tạo thông tin thất bại');</script>";
    }
}

?>




<html>
<head>
    <title>Thông tin khách hàng</title>
    <style>


.error-message {
            /* CSS cho thông báo lỗi */
            font-size: bigger;
            padding: 10px;
           
            margin-top : 15px;
            border-radius: 5px;
            text-align: center;
            background-color: #f2dede; /* Màu nền cho thông báo lỗi */
            color: #a94442; /* Màu chữ cho thông báo lỗi */
            font-weight: bold;
        }

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
        <div class="login-title">Thông tin khách hàng</div>
       
        <form id="loginForm" action="TTDH.php" method="post" enctype="multipart/form-data">
        <input type="text" name="lastName" placeholder="Họ" class="input-field">
        <input type="text" name="firstName" placeholder="Tên" class="input-field">
        <input type="tel" name="phone" placeholder="Số điện thoại" class="input-field">
        <input type="email" name="email" placeholder="Địa chỉ Email" class="input-field">
        <select name="gender" class="input-field">
            <option value="" disabled selected>Giới tính</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
            
        </select>
        <input type="date" name="dateOfBirth" placeholder="Ngày sinh" class="input-field">
        
    <input type="submit" value="Tạo" class="login-button">
</form>

     
      
        
    </div>
   
    <script>
        function CloseTab() {
            window.location.href = 'admin.php';
        }
    </script>
    
</body>
</html>
