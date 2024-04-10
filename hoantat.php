<?php
$tong=0;
session_start();
ob_start();
require_once "db_module.php";
$link = null;
taoKetNoi($link);
if (isset($_POST['tieptheo']) && ($_POST['tieptheo'])) {
    $ptthanhtoan = $_POST['exampleRadio'];
}

// Lấy số lượng bản ghi hiện có trong bảng Order
$query = "SELECT COUNT(*) AS num_records FROM orders";
$result = chayTruyVanTraVeDL($link, $query);
$row = mysqli_fetch_assoc($result);

// Lấy số lượng bản ghi hiện có
$num_records = $row['num_records'];

// Tạo mới orderID dựa trên số lượng bản ghi hiện có
$new_order_id = 'OD' . str_pad($num_records + 1, 5, '0', STR_PAD_LEFT);


foreach ($_SESSION['cart'] as $sp) {
    $thanhtien = $sp[4] * $sp[3];
    $tong += $thanhtien;
}
// Chèn dữ liệu vào bảng useraccount
$insert_query = "INSERT INTO orders (orderID, totalAmount, status, paymentMethod,DateID,TimeAltKey, customerID) 
                        VALUES('$new_order_id', '$tong', 'Đã xác nhận' ,'$ptthanhtoan','20220106', '73000' ,'" . $_SESSION['customerID'] . "')";
$rs = chayTruyVanKhongTraVeDL($link, $insert_query);
if ($rs) {
    echo "<script>alert('Đặt hàng thành công');</script>";
    header("Location:index.php");
} else {
    echo "<script>alert('Cập nhật thất bại');</script>";
    header("Location:vanchuyen.php");
}
?>