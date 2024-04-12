<?php
require_once "config.php";
require_once "db_module.php";
// Kết nối database
$link = null;
taoKetNoi($link);
session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Nếu phương thức yêu cầu là POST, người dùng đang thêm sản phẩm vào danh sách yêu thích
        if (!empty($_POST['idofpro'])) {
            $productID = $_POST['idofpro'];
             if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                    // Truy vấn SQL trực tiếp để lấy accountID
                    $query = "SELECT accountID FROM UserAccount WHERE username = '$username'";
                    $result = mysqli_query($link, $query);
            
                    if ($result && mysqli_num_rows($result) > 0) {
                        // Lấy accountID từ kết quả
                        $row = mysqli_fetch_assoc($result);
                        $accountID = $row['accountID'];
                    } else {
                        echo "<div class='popup-container'><div class='popup'><span class='close-btn' onclick='closePopup()'>&times;</span><img src='exclamation_mark.svg' alt='Error icon' class='check-icon'><p>Không tìm thấy thông tin tài khoản!</p></div></div>";
                        return;
                    }
            
                    // Giải phóng kết quả
                    mysqli_free_result($result);

                    } else {
                        echo "<div class='popup-container'><div class='popup'><span class='close-btn' onclick='closePopup()'>&times;</span><img src='exclamation_mark.svg' alt='Error icon' class='check-icon'><p>Không tìm thấy thông tin đăng nhập!</p></div></div>";
                        return;
                    }
                    // Truy vấn đề thêm dữ liệu vào database
                    $sql = "INSERT INTO favProduct (productID, accountID) VALUES ('$productID', '$accountID')";
                    //$sql = "INSERT INTO favProduct (productID) VALUES ('$productID')";
                    $result = chayTruyVanKhongTraVeDL($link, $sql);

                    if ($result) {
                        echo "Thêm sản phẩm yêu thích thành công";
                    } else {
                        echo "Có lỗi xảy ra, không thể thêm sản phẩm yêu thích";
                    }
                }
            } elseif ($_SERVER["REQUEST_METHOD"] === "DELETE") {
                // Nếu phương thức yêu cầu là DELETE, người dùng đang xoá sản phẩm khỏi danh sách yêu thích
                parse_str(file_get_contents("php://input"), $_DELETE);
                if (!empty($_DELETE['idofpro'])) {
                    $productID = $_DELETE['idofpro'];
                    if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                            // Truy vấn SQL trực tiếp để lấy accountID
                            $query = "SELECT accountID FROM UserAccount WHERE username = '$username'";
                            $result = mysqli_query($link, $query);
                    
                            if ($result && mysqli_num_rows($result) > 0) {
                                // Lấy accountID từ kết quả
                                $row = mysqli_fetch_assoc($result);
                                $accountID = $row['accountID'];
                            } else {
                                echo "<div class='popup-container'><div class='popup'><span class='close-btn' onclick='closePopup()'>&times;</span><img src='exclamation_mark.svg' alt='Error icon' class='check-icon'><p>Không tìm thấy thông tin tài khoản!</p></div></div>";
                                return;
                            }
                    
                            // Giải phóng kết quả
                            mysqli_free_result($result);
                            } else {
                                echo "<div class='popup-container'><div class='popup'><span class='close-btn' onclick='closePopup()'>&times;</span><img src='exclamation_mark.svg' alt='Error icon' class='check-icon'><p>Không tìm thấy thông tin đăng nhập!</p></div></div>";
                                return;
                            }
                    // Truy vấn để xóa dữ liệu khỏi database
                    $sql = "DELETE FROM favProduct WHERE productID = '$productID' AND accountID = '$accountID'";                    //$sql = "DELETE FROM favProduct WHERE productID = '$productID'";
                    $result = chayTruyVanKhongTraVeDL($link, $sql);
                    if ($result) {
                        echo "Xóa sản phẩm yêu thích thành công";
                    } else {
                        echo "Có lỗi xảy ra, không thể xóa sản phẩm yêu thích";
                    }
                }
        }
giaiPhongBoNho($link, $result);
?>