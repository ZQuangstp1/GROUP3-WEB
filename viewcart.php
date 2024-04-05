<?php
    session_start();

    if(isset($_SESSION['cart'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js" language="JavaScript"></script>
</head>
<body>
    <h2>Đơn hàng của bạn</h2>
    <table style="border-collapse: collapse;">
        <tr>
            <th>Số thứ tự</th>
            <th>ID sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng sản phẩm</th>
            <th>Giá tiền</th>
            <th>Thành tiền</th>
            <th>Di chuyển khỏi giỏ hàng</th>
        </tr>

        <?php
        if(isset($_GET['id']) && ($_GET['id'] >=0)) {
            array_splice($_SESSION['cart'], $_GET['id'], 1);  
        }
        if(empty($_SESSION['cart'])) {
            header('location: index.php');
        }
            $stt = 0;
            $tong = 0;
            foreach ($_SESSION['cart'] as $sp) {
                $thanhtien = $sp[4] * $sp[3];
                $tong += $thanhtien;
                echo '<tr>
                        <td>'.($stt+1).'</td>
                        <td>'.$sp[0].'</td>
                        <td><img src="'.$sp[1].'" width="100"></td>
                        <td>'.$sp[2].'</td>
                        <td><span id="quantity-display">'.$sp[3].'</span></td>
                        <td>'.$sp[4].'</td>
                        <td>'.$thanhtien.'</td>
                        <td style="text-align: center;"><a href="viewcart.php?id='.$stt.'">Di chuyển</a></td>
                    </tr>';
                    $stt++;
            }
        ?>
        <tr>
            <td>Tong don hang</td>
            <td style="background-color: #ccc;"><?=$tong; ?></td>
            <td></td>
        </tr>
    </table>
    <p><a href="index.php">Tiếp tục đặt hàng</a></p>
    <p><a href="delcart.php">Xoá giỏ hàng</a></p>
    <p><a href="vanchuyen.php">Thanh toán</a></p> 
</body>
</html>
<?php   
    } //Cái ngoặc này của thằng if phía trên á
    else {
        echo '<br>Giỏ hàng rỗng. Bạn <a href="index.php">đặt hàng</a> không?';
    }
?>