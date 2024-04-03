<html>
<head>  </head>
<body>

<script>
 // JavaScript để mở modal Đổi Mật Khẩu và Thông tin cá nhân
document.addEventListener("DOMContentLoaded", function() {
    // Lấy nút mở modal Đổi Mật Khẩu
    var modalBtn = document.getElementById("openModal");
    // Lấy modal Đổi Mật Khẩu
    var passwordModal = document.getElementById("passwordChangeModal");
    // Lấy phần tử span để đóng modal Đổi Mật Khẩu
    var spanPassword = passwordModal.getElementsByClassName("close")[0];
    
    // Khi người dùng nhấn nút mở modal Đổi Mật Khẩu
    modalBtn.onclick = function() {
        passwordModal.style.display = "block";
    }
    
    // Khi người dùng nhấn vào <span> (x) trong modal Đổi Mật Khẩu, đóng modal
    spanPassword.onclick = function() {
        passwordModal.style.display = "none";
    }
    
    // Khi người dùng nhấn bất kỳ đâu bên ngoài modal Đổi Mật Khẩu, đóng nó lại
    window.onclick = function(event) {
        if (event.target == passwordModal) {
            passwordModal.style.display = "none";
        }
    }

    // Lấy nút mở modal Thông tin cá nhân
    var openInfoBtn = document.getElementById("openInfoModal");
    // Lấy modal Thông tin cá nhân
    var personalInfoModal = document.getElementById("personalInfoModal");
    // Lấy phần tử span để đóng modal Thông tin cá nhân
    var spanPersonalInfo = personalInfoModal.getElementsByClassName("close")[0];
    
    // Khi người dùng nhấn nút mở modal Thông tin cá nhân
    openInfoBtn.onclick = function() {
        personalInfoModal.style.display = "block";
    }
    
    // Khi người dùng nhấn vào <span> (x) trong modal Thông tin cá nhân, đóng modal
    spanPersonalInfo.onclick = function() {
        personalInfoModal.style.display = "none";
    }
    
    // Chưa sửa được
    window.onclick = function(event) {
        if (event.target == personalInfoModal) {
            personalInfoModal.style.display = "none";
        }
    }
});


</script>


<div class="div" id ="TTKH" style ="width :80%; margin: 0 auto; ">
    <div class="div-2">Trang chủ / Trang khách hàng</div>
    <div class="div-3" style ="font-weight: bold;">Thông tin khách hàng</div>
    <div class="div-4">
      <div class="div-5">
        <div class="column">
          <div class="div-6">
            <div class="div-7" onclick="window.location.href='TTKH.php'" style="cursor: pointer;" >Thông tin khách hàng</div>
            <div class="div-8" onclick="window.location.href='SDC.php'" style="cursor: pointer;">Sổ địa chỉ</div>
            <div class="div-9" onclick="window.location.href='DDH.php'" style="cursor: pointer;">Đơn đặt hàng</div>
            <div class="div-10" onclick="window.location.href='YT.php'" style="cursor: pointer;">Yêu thích</div>
          </div>
        </div>
        <div class="column-2">
            
          <div class="div-11">
           
                <div class="div-12" style ="font-weight: bold;">Thông tin chi tiết</div>
           
                



            </div>
            <?php
require_once("view_TTKH.php");

// Gọi hàm view_TTKH() để hiển thị thông tin khách hàng
view_TTKH();
?>

            <div class="div-14">
              <button class="button" id="openInfoModal">Sửa</button>
             
              <div id="personalInfoModal" class="modal">
             
              <div class="modal-content">
    <span class="close">&times;</span>
    <div class="title">Sửa Thông Tin Cá Nhân</div>
    
    <!-- Form sửa thông tin cá nhân -->
    <form action="update_info.php" method="POST">
        <input type="text" name="lastName" placeholder="Họ" class="input-field">
        <input type="text" name="firstName" placeholder="Tên" class="input-field">
        <input type="tel" name="phone" placeholder="Số điện thoại" class="input-field">
        <input type="email" name="email" placeholder="Địa chỉ Email" class="input-field">
        <select name="gender" class="input-field">
            <option value="" disabled selected>Giới tính</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
            
        </select>
        <input type="date" name="dateOfBirth" placeholder="Ngày sinh" class="input-field">
        
        <button type="submit" name="submit" class="submit-button">Lưu Thay Đổi</button>
    </form>
</div>

          </div>
         
             <button class="button" id="openModal">Đổi Mật Khẩu</button>
             <!--Đổi Mật Khẩu -->
             <div id="passwordChangeModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="title">Đổi Mật Khẩu</div>
        <!-- Form đổi mật khẩu -->
        <form action="update_password.php" method="POST">
            <input type="password" name="oldPassword" placeholder="Mật khẩu cũ" class="input-field">
            <input type="password" name="newPassword" placeholder="Mật khẩu mới" class="input-field">
            <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu mới" class="input-field">
            <button type="submit" class="submit-button" name="submit">Xác Nhận</button>
        </form>
    </div>
</div>

</div>
</div>
          </br>
        <div class="column-3">
          <div class="div-19">
            <div class="div-20" style ="font-weight :bold">ĐỊA CHỈ GIAO HÀNG</div>
            <?php
require_once("view_TTKH.php");
view_DC();
?>
            <button class="button" id ="tdc" onclick="window.location.href='SDC.php'">Thêm địa chỉ</button>
           
            <div class="div-23" style ="font-weight :bold">THÔNG TIN LIÊN LẠC</div>
            <?php
require_once("view_TTKH.php");
view_TTLL();
?>
            <button class="button" id ="tdc" onclick="window.location.href='SDC.php'">Thêm địa chỉ</button>
          </div>
        </div>
  
   
   
  </div>

  <style>
    
    .modal {
      display: none;
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: #f9f2e6;
    background-color: rgba(0,0,0,0.4);
}

.title {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 20px;
            font: 600 30px Barlow, sans-serif;
            color: #333;
        }
.submit-button {
            background-color: #fb6f92;
            color: #f9f2e6;
            padding: 15px;
            border: none;
            border-radius: 0px;
            margin-top: 20px;
            cursor: pointer;
            font-weight: 600;
            text-transform: uppercase;
            width: 100%;
            font-family: Oswald, sans-serif;
            letter-spacing: 1.35px;
        }
/* Style cho nội dung modal */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% từ đầu trang và giữa trang */
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Chiều rộng tối đa */
}
.input-field {
            font-family: Barlow, sans-serif;
            width: 95%;
            padding: 15px;
            margin-top: 20px;
            border: 1px solid rgba(212, 213, 217, 1);
            border-radius: 0px;
        }
/* Style cho nút đóng */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

    table {
     
      width : 100%;
      margin : 0%;
      padding : 0%;
      font: 20px Oswald, sans-serif;
    }
    .div {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 0 20px;
    }
    .div-2 {
      color: var(--Gray-1, #828282);
      text-align: center;
      align-self: stretch;
      width: 100%;
      font: 500 14px/68px Barlow, sans-serif;
    }
    @media (max-width: 991px) {
      .div-2 {
        max-width: 100%;
      }
    }
    .div-3 {
      color: #000;
      text-align: center;
      white-space: nowrap;
      font: 400 48px Oswald, sans-serif;
    }
    @media (max-width: 991px) {
      .div-3 {
        font-size: 40px;
        white-space: initial;
      }
    }
    .div-4 {
      margin-top: 48px;
      width: 100%;
      max-width: 1263px;
    }
    @media (max-width: 991px) {
      .div-4 {
        max-width: 100%;
        margin-top: 40px;
      }
    }
    .div-5 {
      gap: 20px;
      display: flex;
    }
    @media (max-width: 991px) {
      .div-5 {
        flex-direction: column;
        align-items: stretch;
        gap: 0px;
      }
    }
    .column {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 23%;
      margin-left: 0px;
    }
    
    @media (max-width: 991px) {
      .column {
        width: 100%;
      }
    }
    .div-6 {
      display: flex;
      flex-direction: column;
      font-size: 16px;
      color: #000;
      font-weight: 500;
      line-height: 144%;
    }
    .div-7 {
      font-family: Barlow, sans-serif;
      background-color: #fb6f92;
      justify-content: center;
      align-items: start;
      color: #fff;
      font-weight: 400;
      padding: 15px 60px 15px 13px;
    }
    @media (max-width: 991px) {
      .div-7 {
        padding-right: 20px;
      }
    }
    .div-8 {
      font-family: Barlow, sans-serif;
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 14px 60px 14px 13px;
    }
    @media (max-width: 991px) {
      .div-8 {
        padding-right: 20px;
      }
    }
    .div-9 {
      font-family: Barlow, sans-serif;
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 15px 60px 15px 13px;
    }
    @media (max-width: 991px) {
      .div-9 {
        padding-right: 20px;
      }
    }
    .div-10 {
      font-family: Barlow, sans-serif;
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 16px 60px 16px 13px;
    }
    @media (max-width: 991px) {
      .div-10 {
        padding-right: 20px;
      }
    }
    .column-2 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 60%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .column-2 {
        width: 100%;
      }
    }
    .div-11 {
      background-color: #fff;
      display: flex;
      flex-direction: column;
      color: #000;
      width: 100%;
      padding: 40px;
    }
    @media (max-width: 991px) {
      .div-11 {
        max-width: 100%;
        padding: 0 20px;
      }
    }
    .div-12 {
      font: 400 30px/283% Oswald, sans-serif;
      margin : 0%;
    }
    .div-13 {
      margin-top: 0px;
      font: 300 16px/50px Poppins, sans-serif;
    }
    .div-14 {
      display: flex;
      margin-top: 40px;
      justify-content: space-between;
      gap: 20px;
      font-size: 18px;
      color: #fff;
      font-weight: 500;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .div-15 {
      display: flex;
      flex-grow: 1;
      flex-basis: 0%;
      flex-direction: column;
      justify-content: center;
      white-space: nowrap;
    }
    @media (max-width: 991px) {
      .div-15 {
        white-space: initial;
      }
    }
    .button {
     
  background-color: #fb6f92;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width : 100%;
  }
  #tdc{justify-content: center;
      background-color: #e6f1fa;
      margin-top: 8px;
      color: var(--Black, #000);
      text-align: center;
      padding: 5px 10px;
      font: 14px/143% Barlow, sans-serif;
      width : 40%}

  .button:hover {
    
  background-color: #ff5476;
  }
   
    .div-18 {
      font-family: Oswald, sans-serif;
      background-color: #fb6f92;
      justify-content: center;
      padding: 11px 21px;
    }
    @media (max-width: 991px) {
      .div-18 {
        padding: 0 20px;
      }
    }
    .column-3 {
      display: flex;
      flex-direction: column;
      line-height: normal;
      width: 30%;
      margin-left: 20px;
    }
    @media (max-width: 991px) {
      .column-3 {
        width: 100%;
      }
    }
    .div-19 {
      align-items: start;
      background-color: #fff;
      display: flex;
      flex-grow: 1;
      flex-direction: column;
      font-size: 18px;
      color: var(--Black-2, #3f3f3f);
      font-weight: 500;
      width: 100%;
      padding: 45px 80px 45px 40px;
    }
    @media (max-width: 991px) {
      .div-19 {
        max-width: 100%;
        padding: 0 20px;
      }
    }
    .div-20 {
      font-family: Oswald, sans-serif;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      white-space: nowrap;
    }
    @media (max-width: 991px) {
      .div-20 {
        white-space: initial;
      }
    }
    .div-21 {
      color: var(--Gray-1, #828282);
      margin-top: 11px;
      font: 400 15px/20px Barlow, sans-serif;
    }
    .div-22 {
      justify-content: center;
      background-color: #e6f1fa;
      margin-top: 8px;
      color: var(--Black, #000);
      text-align: center;
      padding: 5px 10px;
      font: 14px/143% Barlow, sans-serif;
    }
    .div-23 {
      font-family: Oswald, sans-serif;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      margin-top: 92px;
      white-space: nowrap;
    }
    @media (max-width: 991px) {
      .div-23 {
        margin-top: 40px;
        white-space: initial;
      }
    }
    .div-24 {
      color: var(--Gray-1, #828282);
      margin-top: 11px;
      font: 400 15px/20px Barlow, sans-serif;
    }
  
    
  </style>
  
  </body>
  </html>

  