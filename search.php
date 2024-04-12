<?php
if (session_status() === PHP_SESSION_NONE) {
    // Phiên chưa được kích hoạt, bắt đầu một phiên mới
    session_start();
}
// Thêm file config.php and db_module.php
include_once 'config.php';
include_once 'db_module.php';

function search() {
    global $link; //
    if (isset($_GET['searchInput'])) {
        $keyword = $_GET['searchInput'];
        $_SESSION['keyword'] = $keyword; // Lưu keyword vào session
        header('Location: product-list.php'); // Chuyển hướng đến product-list.php
        exit(); 
    }
}
if (isset($_GET['searchInput'])) {
    search();
}
?>