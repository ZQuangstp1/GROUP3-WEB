<html>
    <head>
     
    </head>
    <body>
      <script>
       var diaChiVisible = false;

function toggleDiaChi() {
  var diaChiDiv = document.getElementById("diaChiContainer");
  if (diaChiVisible) {
    diaChiDiv.style.display = "none";
    diaChiVisible = false;
  } else {
    diaChiDiv.style.display = "block";
    diaChiVisible = true;
  }
}


      </script>
<div class="div" id ="SDC" style ="width :80%; margin: 0 auto; ">
   
        <div class="div-2">Trang chủ / Trang khách hàng</div>
        <div class="div-3" style = "font-weight : bold;">Sổ địa chỉ</div>
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
              <div class="div-12" style = "font-weight: bold;">Địa chỉ của Bạn</div>
              <?php
require_once("view_TTKH.php");

// Gọi hàm view_TTKH() để hiển thị thông tin khách hàng
view_SDC();
?>
              <button class="button" style ="width :180px; margin-left: 0px;" onclick="toggleDiaChi()">+ Thêm địa chỉ</button>
              <!-- Form để gửi dữ liệu -->
<form action="upade_sdc.php" method="POST">
    <!-- Địa chỉ giao hàng -->
    <div class="div-11" id="diaChiContainer" style="display: none;">
        <div class="DCGH">
            <div class="div-12" style="font-weight: bold;">Địa chỉ giao hàng</div>

            <!-- Trường nhập liệu cho địa chỉ -->
            <div class="div-13">
                <div class="div-14">
                    <label for="diachi">Địa chỉ <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                    <input type="text" class="div-15" name="diachi">
                </div>
            </div>

            <!-- Trường nhập liệu cho quận -->
            <div class="div-13">
                <div class="div-14">
                    <label for="quan">Quận(Huyện) <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                    <input type="text" class="div-15" name="quan" style="margin-left: 16px;">
                </div>
            </div>

            <!-- Trường nhập liệu cho thành phố -->
            <div class="div-13">
                <div class="div-14">
                    <label for="tp">Thành phố <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                    <input type="text" class="div-15" name="tp" style="margin-left: 35px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Thông tin liên lạc -->
    <div class="TTLL">
        <div class="div-12" style="font-weight: bold;">Thông tin liên lạc</div>

        <!-- Trường nhập liệu cho họ -->
        <div class="div-13">
            <div class="div-14">
                <label for="ho">Họ <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                <input type="text" class="div-15" name="ho" style="margin-left: 91px;">
            </div>
        </div>

        <!-- Trường nhập liệu cho tên -->
        <div class="div-13">
            <div class="div-14">
                <label for="ten">Tên <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                <input type="text" class="div-15" name="ten" style="margin-left: 82px;">
            </div>
        </div>

        <!-- Trường nhập liệu cho số điện thoại -->
        <div class="div-13">
            <div class="div-14">
                <label for="sdt">Số điện thoại <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                <input type="text" class="div-15" name="sdt" style="margin-left: 15px;">
            </div>
        </div>

        <!-- Trường nhập liệu cho email -->
        <div class="div-13">
            <div class="div-14">
                <label for="email">Email <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                <input type="email" class="div-15" name="email" style="margin-left: 70px;">
            </div>
        </div>
    </div>

    <!-- Thanh toán -->
    <div class="PTTT">
        <div class="div-12" style="font-weight: bold;">Thanh toán</div>

        <!-- Dropdown cho phương thức thanh toán -->
        <div class="div-13">
            <div class="div-14">
                <label for="pttt">Phương thức <span style="color: rgba(235, 87, 87, 1);">*</span></label>
                <select class="div-15" name="pttt" style="margin-left: 13px;">
                    <option value="tien_mat">Tiền mặt</option>
                    <option value="momo">Momo</option>
                    <option value="mobile_banking">Mobile Banking</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Nút thêm để gửi form -->
    <button type="submit" class="button">Thêm</button>
</form>


                </div>
              </div>
            
            </div>
   
     
    <style>
       
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
          font: 500 14px/68px  Barlow, sans-serif;;
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
          font: 400 48px  Barlow, sans-serif;;
        }
        @media (max-width: 991px) {
          .div-3 {
            font-size: 40px;
            white-space: initial;
          }
        }
        .div-4 {
          margin-top: 55px;
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
          font-family:  Barlow, sans-serif;;
          background-color: #fff;
          justify-content: center;
          align-items: start;
          font-weight: 400;
          padding: 14px 60px 14px 13px;
        }
        @media (max-width: 991px) {
          .div-7 {
            padding-right: 20px;
          }
        }
        .div-8 {
          font-family:  Barlow, sans-serif;;
          background-color: #fb6f92;
          justify-content: center;
          align-items: start;
          color: #fff;
          padding: 14px 60px 14px 13px;
        }
        @media (max-width: 991px) {
          .div-8 {
            padding-right: 20px;
          }
        }
        .div-9 {
          font-family:  Barlow, sans-serif;;
          background-color: #fff;
          justify-content: center;
          align-items: start;
          padding: 14px 60px 14px 13px;
        }
        @media (max-width: 991px) {
          .div-9 {
            padding-right: 20px;
          }
        }
        .div-10 {
          font-family:  Barlow, sans-serif;;
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
          width: 77%;
          margin-left: 20px;
        }
        @media (max-width: 991px) {
          .column-2 {
            width: 100%;
          }
        }
        .div-11 {
          align-items: start;
          align-self: stretch;
          background-color: #fff;
          display: flex;
          flex-grow: 1;
          flex-direction: column;
          font-size: 16px;
          font-weight: 400;
          width: 100%;
          padding: 45px 80px 45px 40px;
        }
        @media (max-width: 991px) {
          .div-11 {
            max-width: 100%;
            padding: 0 20px;
          }
        }
        .div-12 {
          color: #000;
          font: 24px/283%  Barlow, sans-serif;;
        }
        @media (max-width: 991px) {
          .div-12 {
            max-width: 100%;
          }
        }
        .div-13 {
          display: flex;
          margin-top: 28px;
          width: 541px;
          max-width: 100%;
          justify-content: space-between;
          gap: 20px;
          color: var(--Main-Color-2, #eb5757);
          line-height: 20px;
        }
        @media (max-width: 991px) {
          .div-13 {
            flex-wrap: wrap;
          }
        }
        .div-14 {
          font-family:  Barlow, sans-serif;;
          margin: auto 0;
        }
        .div-15 {
          border: 1px solid var(--Divider, #c4c4c4);
          background-color: #fff;
          width: 410px;
          max-width: 100%;
          height: 44px;
          margin-left : 63px;
        }
       
       
      
        
        .button {
  background-color: #fb6f92;
  color: #fff;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font: 600 16px Oswald, sans-serif;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 150px;
  margin: 0 auto; 
  display: block; 
  margin-top : 50px;
  margin-left : 200px;
}

  .button:hover {
    
  background-color: #ff5476;
  }

        
        
     </style>
      
  </body>
  </html>