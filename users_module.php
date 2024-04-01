<?php 
session_start();
function dangki($link, $_username, $_password)
{   
     // Lấy số lượng bản ghi hiện có trong bảng useraccount
     $query = "SELECT COUNT(*) AS num_records FROM useraccount";
     $result = mysqli_query($link, $query);
     $row = mysqli_fetch_assoc($result);
 
     // Lấy số lượng bản ghi hiện có
     $num_records = $row['num_records'];
 
     // Tạo mới accountID và customerID dựa trên số lượng bản ghi hiện có
     $new_account_id = 'A' . str_pad($num_records + 1, 6, '0', STR_PAD_LEFT);
     $new_cus_id = 'CS' . str_pad($num_records + 1, 5, '0', STR_PAD_LEFT);
     
     // Chèn dữ liệu vào bảng useraccount
     $insert_query = "INSERT INTO useraccount (accountID, username, password, customerID) VALUES ('$new_account_id', '$_username', '$_password', '$new_cus_id')";
     $rs = chayTruyVanKhongTraVeDL($link, $insert_query);
     


}

// Hàm kiểm tra đăng nhập
function dangnhap($link, $username, $password) {
    // Escape các giá trị đầu vào để tránh SQL injection
    $escaped_username = mysqli_real_escape_string($link, $username);
    $escaped_password = mysqli_real_escape_string($link, $password);
    
    // Tạo câu truy vấn SQL để kiểm tra tên người dùng và mật khẩu
    $query = "SELECT username,password FROM useraccount WHERE username = '$escaped_username' AND password = '$escaped_password'";
    
    // Thực thi truy vấn
    $result = mysqli_query($link, $query);
    
    // Kiểm tra xem có dòng dữ liệu phù hợp không
    if ($result && mysqli_num_rows($result) > 0) {
        // Đăng nhập thành công
        return true;
    } else {
        // Đăng nhập thất bại
        return false;
    }
    //Lấy customerID
$query1 = "SELECT customerID FROM useraccount WHERE username = '$escaped_username' AND password = '$escaped_password'";
$result1 = chayTruyVanTraVeDL($link, $query1);

// Kiểm tra kết quả trả về
if ($result1 && mysqli_num_rows($result1) > 0) {
    // Đăng nhập thành công, trả về customerID
    $row = mysqli_fetch_assoc($result1);
    $_SESSION['customerID'] = $row['customerID']; // Gán customerID từ mảng $row vào session
    return $row['customerID'];
} else {
    // Đăng nhập thất bại
    return false;
}

}



function dangxuat()
{
    if (isset($_SESSION['username'])) { 
        unset($_SESSION['username']);
        return true;
    } else 
    return false;
}
?>