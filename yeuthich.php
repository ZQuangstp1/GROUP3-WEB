<?php
require_once "config.php";
require_once "db_module.php";

// Establish connection to the database
$link = null;
taoKetNoi($link);

// Check if form is submitted
if (!empty($_POST)) {
    // Retrieve form data
    $productID = $_POST['idofpro'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO favProduct (productID) VALUES ('$productID')";
    //$sql = "INSERT INTO favProduct (accountID) VALUES ('$accountID')";

    // Run the query
    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if ($result) {
        echo "<script>alert('Thêm sản phẩm yêu thích thành công');</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra, không thể thêm sản phẩm yêu thích');</script>";

    }
}
// Close connection to the database
giaiPhongBoNho($link, $result);

?>


