<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array(); 
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])) {
        $id = $_POST['idofpro']; 
        $hinh = $_POST['img'];
        $tensp = $_POST['tensp'];
        $sl = (int)$_POST['soluong'];
        $totalCash = $_POST['tongtien'];

        //Tạo mảng chứa dữ liệu này
        if ($sl == 0) {
            $sl = 1;
            $sp = array($id, $hinh, $tensp, $sl, $totalCash);
        }
        else             $sp = array($id, $hinh, $tensp, $sl, $totalCash);


        //Kiểm tra không tồn tại để add giỏ hàng mới, còn tồn tại rồi thôi khỏi add nữa, chi cập nhật
            array_push($_SESSION['cart'], $sp);
        

        //Chuyển trang xem giỏ hàng, còn trang này chỉ đẩy nó lên session thôi
        header('Location: viewcart.php');
    }
?>