<?php
session_start();
include_once 'config.php';
include_once 'db_module.php';

function search() {
    global $link; 
    if (isset($_GET['searchInput'])) {
        $keyword = $_GET['searchInput'];
        $_SESSION['keyword'] = $keyword; 
        header('Location: product-list.php'); 
        exit(); 
    }
}

if (isset($_GET['searchInput'])) {
    search();
}
?>