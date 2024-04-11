<?php

// Include file config.php and db_module.php
include_once 'config.php';
include_once 'db_module.php';

function search() {
    global $link; // Ensure $link is accessible if you're using it for database operations
    if (isset($_GET['searchInput'])) {
        $keyword = $_GET['searchInput'];
        $_SESSION['keyword'] = $keyword; // Store keyword in session
        header('Location: product-list.php'); // Redirect to product-list.php
        exit(); // Make sure to exit to prevent further script execution after a redirect
    }
}
// Call the search function when the page loads if searchInput is set
if (isset($_GET['searchInput'])) {
    search();
}
?>