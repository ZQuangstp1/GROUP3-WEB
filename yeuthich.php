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
    $productName = $_POST['tensp'];
    $unitPrice = $_POST['tongtien'];
    $image = $_POST['img'];

    // Prepare SQL statement to insert data into database
    $sql = "INSERT INTO favProduct (productID, productName, unitPrice, image) VALUES ('$productID', '$productName', '$unitPrice', '$image')";

    // Run the query
    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if ($result) {
        echo "Record added successfully";
        echo "<script>alert('Thêm sản phẩm yêu thích thành công');</script>";
        echo "<script>window.location.href='QLNV_XemNV.php?opt=add_NV';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
        echo "<script>alert('Có lỗi xảy ra, không thể thêm sản phẩm yêu thích');</script>";

    }
}
// Close connection to the database
giaiPhongBoNho($link, $result);

header('Location: product.php');
?>


