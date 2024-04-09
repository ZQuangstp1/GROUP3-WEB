<?php
require_once "db_module.php";

// Gather form data
$comment = $_POST['comment'];
$rating = $_POST['rating'];
$productId = $_POST['idofpro'];

// Connect to the database
$link = null;
taoKetNoi($link);

if (!empty($_POST)) {
    $productID = $_POST['idofpro'];
    
    $sql = "INSERT INTO reviews (comment, rating, product_id) VALUES ('$comment', '$rating', '$productId')";
    $result = chayTruyVanKhongTraVeDL($link, $sql);

    if ($result) {
        echo "<script>alert('Thêm bình luận thành công');</script>";
    } else {
        echo "<script>alert('Có lỗi xảy ra, không thể thêm bình luận');</script>";
    }
}

// Close connection
giaiPhongBoNho($link, $result);

echo "Data inserted successfully.";

?>

