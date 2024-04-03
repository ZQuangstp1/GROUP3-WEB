<html>
    <head> </head>
    
    <body> 
      
        <div class="div" id ="DDH" style ="width : 80%;margin: 0 auto;">
            <div class="div-2">Trang chủ / Trang khách hàng</div>
            <div class="div-3" style = "font-weight: bold;">Đơn đặt hàng</div>
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
                  <div class="div-12">
                    <div class="div-13">
                      <div class="div-14" style ="font-weight : bold;">Đơn hàng</div>
                     
                          
                    </div>
                    <?php
// Kết nối đến cơ sở dữ liệu
require_once "db_module.php";
$link = null;
taoKetNoi($link);

// Truy vấn để lấy thông tin các đơn hàng từ bảng order
$query = "SELECT orders.status, date.Date, product.image, product.productName, orderdetail.quantity, product.size
FROM orders 
LEFT JOIN date ON orders.DateID = date.DateID 
LEFT JOIN orderdetail ON orders.orderID = orderdetail.orderID
LEFT JOIN product ON orderdetail.productID = product.productID
WHERE customerID = 'CS000001' LIMIT 0, 25
";
$result = mysqli_query($link, $query);

// Kiểm tra xem có dữ liệu không
if (mysqli_num_rows($result) > 0) {
    // Hiển thị thông tin đơn hàng
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <div class="div-18">
        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/190006a3d3439101c0ee4b84999b823b25c34e81bb0ba5d245c81a2b54260f4a?apiKey=eb23b2963eda46448725d8ef1c3cf67d&" class="img-3" />

            <div class="div-19">
                <div class="div-20"><?php echo $row['status']; ?></div>
                <div class="div-21"><?php echo $row['Date']; ?></div>
            </div>
        </div>
        <div class="div-22">
            <img loading="lazy" srcset="<?php echo $row['image']; ?>" class="img-4" />
            <div class="div-23">
                <div class="div-24">
                    <div class="div-25">
                        <div class="div-26"><?php echo $row['productName']; ?></div>
                        <div class="div-27">Số lượng : <?php echo $row['quantity']; ?></div>
                    </div>
                    <a href="trangchu.php">
    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d8adc9a448bed35517b7db4d2624b818bcca6fc979b827778bf76cc287dd7267?apiKey=eb23b2963eda46448725d8ef1c3cf67d&" class="img-5" />
</a>
                </div>
                <div class="div-28">Size: <?php echo $row['size']; ?></div>
            </div>
        </div>
        
<?php
    }
} else {
    echo "Không có đơn hàng nào được tìm thấy.";
}

// Đóng kết nối
mysqli_close($link);
?>

              
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
              font: 500 14px/68px Poppins, sans-serif;
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
              margin-top: 40px;
              width: 100%;
              max-width: 1263px;
            }
            @media (max-width: 991px) {
              .div-4 {
                max-width: 100%;
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
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 14px 60px 14px 13px;
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
      background-color: #fb6f92;
      justify-content: center;
      align-items: start;
      color: #fff;
      font-weight: 400;
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
              width: 77%;
              margin-left: 20px;
            }
            @media (max-width: 991px) {
              .column-2 {
                width: 100%;
              }
            }
            .div-12 {
              align-self: stretch;
              background-color: #fff;
              display: flex;
              flex-grow: 1;
              flex-direction: column;
              width: 100%;
              padding: 41px 40px;
            }
            @media (max-width: 991px) {
              .div-12 {
                max-width: 100%;
                padding: 0 20px;
              }
            }
            .div-13 {
              display: flex;
              justify-content: space-between;
              gap: 20px;
              font-weight: 400;
            }
            @media (max-width: 991px) {
              .div-13 {
                max-width: 100%;
                flex-wrap: wrap;
              }
            }
            .div-14 {
              color: #000;
              flex-grow: 1;
              flex-basis: auto;
              margin: auto 0;
              font: 24px/283% Oswald, sans-serif;
            }
           
         
            .div-17 {
              font-family: Poppins, sans-serif;
              flex-grow: 1;
              flex-basis: auto;
            }
           
            .div-18 {
              align-self: start;
              display: flex;
              margin-top: 22px;
              align-items: start;
              gap: 12px;
              
            }
            .img-3 {
              aspect-ratio: 1;
              object-fit: auto;
              object-position: center;
              width: 24px;
            }
            .div-19 {
              display: flex;
              flex-grow: 1;
              flex-basis: 0%;
              flex-direction: column;
            }
            .div-20 {
              color: #fb6f92;
              font: 600 15px Poppins, sans-serif;
            }
            .div-21 {
              color: #9a9a9a;
              margin-top: 7px;
              white-space: nowrap;
              font: 400 13px Poppins, sans-serif;
              
            }
            @media (max-width: 991px) {
              .div-21 {
                white-space: initial;
              }
            }
            .div-22 {
              border-radius: 5px;
              background-color: #f1f1f1;
              display: flex;
              margin-top: 18px;
              justify-content: space-between;
              gap: 14px;
              padding: 10px 33px 10px 12px;
              overflow: hidden; 
            }
            @media (max-width: 991px) {
              .div-22 {
                max-width: 100%;
                flex-wrap: wrap;
                padding-right: 20px;
              }
            }
            .div-22 .div-26 {
        color: #000;
        white-space: nowrap;
        font: 500 16px Oswald, sans-serif;
        overflow: hidden; /* Ẩn văn bản khi vượt quá kích thước của ô */
        text-overflow: ellipsis; /* Hiển thị dấu chấm ba (...) cho văn bản dài */
    }
            .img-4 {
              aspect-ratio: 1; /* Đảm bảo tỉ lệ khung hình không bị biến đổi */
        object-fit: cover; /* Đảm bảo hình ảnh không bị biến dạng */
        height: 100%; 
        width : 90px;
            }
            .div-23 {
              display: flex;
              flex-grow: 1;
              flex-basis: 0%;
              flex-direction: column;
              margin: auto 0;
            }
            @media (max-width: 991px) {
              .div-23 {
                max-width: 100%;
              }
            }
            .div-24 {
              display: flex;
              padding-right: 80px;
              justify-content: space-between;
              gap: 20px;
            }
            @media (max-width: 991px) {
              .div-24 {
                max-width: 100%;
                flex-wrap: wrap;
                padding-right: 20px;
              }
            }
            .div-25 {
              display: flex;
              flex-direction: column;
            }
            .div-26 {
              color: #000;
              white-space: nowrap;
              font: 500 16px Oswald, sans-serif;
            }
            @media (max-width: 991px) {
              .div-26 {
                white-space: initial;
              }
            }
            .div-27 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 9px;
              font: 400 13px/131% Poppins, sans-serif;
            }
            .img-5 {
              aspect-ratio: 0.64;
              object-fit: auto;
              object-position: center;
              width: 9px;
              stroke-width: 2px;
              stroke: #222;
              align-self: end;
              margin-top: 21px;
            }
            .div-28 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 6px;
              font: 400 13px/131% Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-28 {
                max-width: 100%;
              }
            }
            
          </style>
          
    </body>
</html>