<?php
// Kết nối đến cơ sở dữ liệu
require_once("db_module.php");
$link = null;
taoKetNoi($link);
$customerID = dangnhap($link, $_username, $_password);
if(isset($_POST['submit'])) {
    // Lấy dữ liệu từ form
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateOfBirth'];

    // Mã SQL cập nhật thông tin vào cơ sở dữ liệu
    $sql = "UPDATE customer SET lastName='$lastName', firstName='$firstName', phone='$phone', email='$email', gender='$gender', dateOfBirth='$dateOfBirth' WHERE customerID='$customerID'";

    // Thực thi truy vấn
    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if($result) {
        echo "<script>alert('Cập nhật thông tin thành công');</script>";
        // Redirect hoặc chuyển hướng tới trang khác sau khi cập nhật thành công
        echo "<script>window.location.href='TTKH.php';</script>";
    } else {
        echo "<script>alert('Cập nhật thông tin thất bại');</script>";
    }
}

giaiPhongBoNho($link);
?>
