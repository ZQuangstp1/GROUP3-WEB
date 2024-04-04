<?php
// Include file config.php và db_module.php
include_once 'config.php';
include_once 'db_module.php';

// Kiểm tra xem có từ khóa tìm kiếm được gửi từ trang search.php hay không
if (isset($_GET['keyword'])) {
    // Lấy từ khóa tìm kiếm
    $keyword = $_GET['keyword'];
    
    // Thực hiện tìm kiếm sản phẩm
    $products = searchProducts($keyword);
    
    // Hiển thị kết quả tìm kiếm
    foreach ($products as $product) {
        echo $product['productName']; // Hiển thị tên sản phẩm, bạn có thể thay đổi để hiển thị các thông tin khác
    }
} else {
    // Nếu không có từ khóa tìm kiếm, có thể hiển thị trang sản phẩm mặc định ở đây
    echo "Trang sản phẩm mặc định";
}
?>
