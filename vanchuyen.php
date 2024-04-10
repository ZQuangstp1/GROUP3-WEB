<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="vanchuyen.css">
    <script type="text/javascript" src="CK.js" language="javascript"></script>
</head>
<body>
  <?php
    include 'head.php';
  ?>
    <div id="container">
        <div class="content">
            <p><a href="">Trang chủ</a> / <a href="">Tạo đơn hàng</a></p>   
            <div class="navigation-bar">
                <section class="step-wizard">
                    <ul class="step-wizard-list">
                        <li class="step-wizard-item current-item">
                            <!--Nếu chưa đăng nhập mà mua hàng thì bắt buộc người dùng phải đăng nhập-->
                            <span class="progress-count">1</span>
                            <span class="progress-label">Vận chuyển</span>
                        </li>
                        <!--Nếu đăng nhập hoàn tất thì nhảy xuống bước này-->
                        <li class="step-wizard-item">
                            <span class="progress-count">2</span>
                            <span class="progress-label">Thanh Toán</span>
                        </li>
                        <li class="step-wizard-item">
                            <span class="progress-count">3</span>
                            <span class="progress-label">Xác nhận</span>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="infor">
                <!--Thông tin đăng nhập, nhấn đăng nhập sẽ điều hướng qua trang đăng nhập, ngược lại đã đăng nhập sẵn sẽ điều hướng qua bước hai-->
                <div class="personal-infor">
                    <h3>Địa chỉ vận chuyển</h3>
                    <form action="shipment.html" id="dangnhapForm">
                    <div class="row">
                        <div class="col-trai">
                            <label for="email">Địa chỉ Email</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="email" name="dc-email" placeholder="@gmail.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-trai">
                            <label for="pass">Mật khẩu</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="pass" name="mk" placeholder="*****">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-trai">
                            <label for="zip">Mã vùng</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="zip" name="postal" placeholder="70000">
                        </div>
                    </div>  
                    <p style="text-align: left; font-size: 13; color: gray;">Chưa có tài khoản? <a href="">Đăng ký ngay</a></p>
                    <p style="text-align: left; font-size: 13; color: gray;">Bạn phải đăng nhập để sử sử dụng.</p>
                    <br>
                    <div class="row">
                        <input type="submit" value="Đăng nhập">
                        <a href="" style="font-size: 13; padding-left: 3%;">Quên mật khẩu?</a>
                    </div>   
                    <br>
                    <!--thông tin vận chuyển-->
                    <hr>   
                    <div class="row">
                        <div class="col-trai">
                            <label for="name">Họ và tên</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="name" name="name" placeholder="Nhập họ và tên" required>
                        </div>
                    </div>               
                    <div class="row">
                        <div class="col-trai">
                            <label for="cty">Tên công ty</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="cty" name="ten-cty" placeholder="Nhập công ty" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-trai">
                            <label for="address">Địa chỉ</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="address" name="street-address" placeholder="Nhập tên đường" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-trai">
                            <label for="address">Quận</label>                            
                        </div>
                        <div class="col-phai">
                            <input type="text" id="address-con" name="street-address" placeholder="Nhập quận" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-trai">
                            <label for="city">Thành phố</label>
                        </div>
                        <div class="col-phai">
                            <input type="text" id="city" name="ct" placeholder="Nhập thành phố" required>
                        </div>
                    </div>  
                    <br>  
                    <div class="row">
                        <div class="col-trai">
                            <input type="submit" value="Tiếp >>">
                        </div>
                        <div class="col-phai">
                            <button type="button" onclick="goback()" style="float: right; border: none; background-color: white; cursor: pointer;">Quay lại</button>
                        </div>
                    </div>   
                    </form>
                </div>
                <div class="img-order">
                    <div class="order-items">
                        <h3 style="padding-left: 15px;">ĐƠN HÀNG</h3>
                        <select id="country" name="country" style="border: none;">
                            <option value="australia">Loại hàng hoá có trong giỏ hàng</option>
                            <option value="canada">Canada</option>
                            <option value="usa">USA</option>
                            <option value="vietnam">Việt Nam</option>
                        </select>
                        <hr width="95%">

                        <div class="row">
                            <div class="col-trais" style="margin-top: 3%;">
                                <img src="" alt="" width="70%" height="10%" style="border: 1px solid black; margin-left: 10px;">
                            </div>
                            <div class="col-giua">
                                <span style="float: left; font-size: 10px;">Tên của sản phẩm</span>
                                <br>
                                <span style="float: left; font-size: 10px;">Số lượng: <span>...</span></span>
                                <br>
                                <span style="float: left; font-size: 10px;">Xem chi tiết</span>
                            </div>
                            <div class="col-phais">
                                <span style="float: right; font-size: 10px;">Số Tiền</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
<?php
  include 'footer.php';
?>
</html>