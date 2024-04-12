<?php
require_once "config.php";
require_once "db_module.php";
// Kết nối database
$link = null;
taoKetNoi($link);
session_start();

if (!empty($_POST)) {
    $productID = $_POST['idofpro'];
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    
            // Truy vấn SQL trực tiếp
            $query = "SELECT accountID FROM UserAccount WHERE username = '$username'";
            $result = mysqli_query($link, $query);
    
            if ($result && mysqli_num_rows($result) > 0) {
                // Lấy accountID từ kết quả
                $row = mysqli_fetch_assoc($result);
                $accountID = $row['accountID'];
            } else {
                echo "<div class='popup-container'><div class='popup'><span class='close-btn' onclick='closePopup()'>&times;</span><img src='exclamation_mark.svg' alt='Error icon' class='check-icon'><p>Không tìm thấy thông tin tài khoản!</p></div></div>";
                return;
            }
    
            // Giải phóng kết quả
            mysqli_free_result($result);

    } else {
        echo "<div class='popup-container'><div class='popup'><span class='close-btn' onclick='closePopup()'>&times;</span><img src='exclamation_mark.svg' alt='Error icon' class='check-icon'><p>Không tìm thấy thông tin đăng nhập!</p></div></div>";
        return;
    }
    // Truy vấn đề thêm dữ liệu vào database
    $sql = "INSERT INTO favProduct (productID, accountID) VALUES ('$productID', '$accountID')";

    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if ($result) {
        echo "<script>alert('Thêm sản phẩm yêu thích thành công');</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra, không thể thêm sản phẩm yêu thích');</script>";

    }
}
giaiPhongBoNho($link, $result);
?>


