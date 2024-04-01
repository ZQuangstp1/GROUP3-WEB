<?php

session_start();
require_once "db_module.php";

require_once "validate_module.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])) 
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        if (kiemTraMatKhau($_POST['password'], $_POST['password2'])) {
            $valid = true;
            $valid = $valid && validateLenUP($_POST['username']);
            $valid = $valid && validateLenUP($_POST['password']);

            if ($valid) {
                if (existsUsername($link, $_POST["username"])) {
                    $_SESSION['error'] = "Tài khoản đã tồn tại";
                } else {
                    // Handle user registration
                    $new_account_id = '';
                    $new_cus_id = '';

                    $link = null;
                    taoKetNoi($link);

                    $query = "SELECT COUNT(*) AS num_records FROM useraccount";
                    $result = mysqli_query($link, $query);
                    $row = mysqli_fetch_assoc($result);
                    $num_records = $row['num_records'];

                    $new_account_id = 'A' . str_pad($num_records + 1, 6, '0', STR_PAD_LEFT);
                    $new_cus_id = 'CS' . str_pad($num_records + 1, 5, '0', STR_PAD_LEFT);

                    $insert_query = "INSERT INTO useraccount (accountID, username, password, customerID) VALUES ('$new_account_id', '$username', '$password', '$new_cus_id')";

                    if (chayTruyVanKhongTraVeDL($link, $insert_query)) {
                        $_SESSION['success'] = "Đăng ký tài khoản thành công!";
                        header("Location: dangnhap.php");
                        exit();
                    } else {
                        $_SESSION['error'] = "Có lỗi xảy ra trong quá trình đăng ký tài khoản";
                    }
                }
        } else {
            $_SESSION['error'] = "Mật khẩu không trùng khớp";
        }
    }
}
}

?>
