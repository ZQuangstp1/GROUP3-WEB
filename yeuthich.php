<?php
require_once "config.php";
require_once "db_module.php";
// Kết nối database
$link = null;
taoKetNoi($link);


if (!empty($_POST)) {
    $productID = $_POST['idofpro'];

    // Truy vấn đề thêm dữ liệu vào database
    $sql = "INSERT INTO favProduct (productID) VALUES ('$productID')";
    //$sql = "INSERT INTO favProduct (accountID) VALUES ('$accountID')";

    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if ($result) {
        echo "<script>alert('Thêm sản phẩm yêu thích thành công');</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra, không thể thêm sản phẩm yêu thích');</script>";

    }
}
giaiPhongBoNho($link, $result);
?>


