<?php

    session_start();
    ob_start();
        /*
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array(); //Đáng lẽ nằm trước dòng 16, nhưng vì nó xài nhiều nên thôi tui quăng nó lên đây
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])) {
        $id = $_POST['idofpro']; //là id of product đó
        $hinh = $_POST['img'];
        $tensp = $_POST['tensp'];
        $sl = (int)$_POST['soluong'];
        $totalCash = (int)$_POST['tongtien'];

        //tạo mảng chứa cái đống dữ liệu này
        if ($sl == 0) {
            $sl = 1;
            $sp = array($id, $hinh, $tensp, $sl, $totalCash);
        }
        else             $sp = array($id, $hinh, $tensp, $sl, $totalCash);


        //Kiểm tra không tồn tại để add giỏ hàng mới, còn tồn tại rồi thôi khỏi add nữa, chi cập nhật
            array_push($_SESSION['cart'], $sp);
        
        //chuyển trang xem giỏ hàng, còn trang này chỉ đẩy nó lên session thôi
        header('Location: viewcart.php');
    }
    */
    // Khởi tạo giỏ hàng nếu chưa tồn tại
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['addtocart']) && $_POST['addtocart']) {
    $id = $_POST['idofpro']; // ID của sản phẩm
    $hinh = $_POST['img']; // Đường dẫn đến hình ảnh
    $tensp = $_POST['tensp']; // Tên sản phẩm
    $sl = (int)$_POST['soluong']; // Số lượng
    $totalCash = (int)$_POST['tongtien']; // Tổng tiền

    // Kiểm tra sản phẩm đã tồn tại trong giỏ hàng hay chưa
    $product_exists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item[0] == $id) {
            // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng
            if($sl != 0) {
                $item[3] += $sl;
                $product_exists = true;
                break;
            } else {
                $sl = 1;
                $item[3] += $sl;
                $product_exists = true;
                break;            
            }

        }
    }

    // Nếu sản phẩm chưa tồn tại trong giỏ hàng, thêm mới
    if (!$product_exists) {
        if ($sl == 0) {
            $sl = 1; // Đảm bảo số lượng ít nhất là 1
            
        }
        $sp = array($id, $hinh, $tensp, $sl, $totalCash);
        array_push($_SESSION['cart'], $sp);
    }
    header('Location: viewcart.php');
}

?>