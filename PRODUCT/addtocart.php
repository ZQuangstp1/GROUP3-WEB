<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array(); //Đáng lẽ nằm trước dòng 16, nhưng vì nó xài nhiều nên thôi tui quăng nó lên đây
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])) {
        $id = $_POST['idofpro']; //là id of product đó
        $hinh = $_POST['img'];
        $tensp = $_POST['tensp'];
        $sl = (int)$_POST['soluong'];
        $totalCash = $_POST['tongtien'];

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
?>