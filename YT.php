<html>
    <head></head>
    <body> 
        <div class="div" id ="YT" style ="width : 80%; margin: 0 auto;">
            <div class="div-2">Trang chủ / Trang khách hàng</div>
            <div class="div-3" style ="font-weight :bold">Yêu thích</div>
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
</br>
<?php
// Kết nối đến cơ sở dữ liệu
require_once "db_module.php";
$link = null;
taoKetNoi($link);
session_start();

// Kiểm tra xem customerID có tồn tại trong session không
if(isset($_SESSION['customerID'])) {
    // Lấy customerID từ session
    $customerID = $_SESSION['customerID'];
    // Truy vấn để lấy thông tin các sản phẩm yêu thích từ bảng product
    $query = "SELECT product.image, product.discountID, product.productName, subcategory.subcategoryName, product.unitPrice 
    FROM product 
    LEFT JOIN orderdetail 
    ON orderdetail.productID = product.productID 
    LEFT JOIN `orders` 
    ON orderdetail.orderID = `orders`.orderID 
    LEFT JOIN `subcategory` 
    ON product.subcategoryID = `subcategory`.subcategoryID
WHERE customerID = '" . $_SESSION['customerID']  . "'";
    $result = mysqli_query($link, $query);
    // Kiểm tra xem truy vấn có thành công hay không
    if($result) {
        // Kiểm tra xem có dữ liệu không
        if (mysqli_num_rows($result) > 0) {
            // Hiển thị thông tin sản phẩm yêu thích
            while ($row = mysqli_fetch_assoc($result)) {
?>
            <div class="product-item">
                <img loading="lazy" srcset="<?php echo $row['image']; ?>" class="img" />

                <?php if ($row['discountID'] !== 'NONE')  { ?>
                <div class="discount-tag"><?php echo $row['discountID']; ?></div>
            <?php } ?>
                </br>
                <div class="product-info">
                    <div class="product-name"><?php echo $row['productName']; ?></div>
                    <div class="product-category"><?php echo $row['subcategoryName']; ?></div>
                    <div class="product-price"><?php echo $row['unitPrice']; ?></div>
                </div>
                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b92a98a450a77c4e2c9857a326b6a5d33a717d4c5870690f94eef140a2a49c80?apiKey=eb23b2963eda46448725d8ef1c3cf67d&" class="trash" />
            </div>
<?php
            }
        } else {
            echo "Không có sản phẩm yêu thích nào được tìm thấy.";
        }
    } else {
        echo "Đã xảy ra lỗi trong quá trình truy vấn cơ sở dữ liệu.";
    }
} else {
    header("Location: dangnhap.php");
    // hoặc echo "Vui lòng đăng nhập để xem sản phẩm yêu thích.";
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
        font-family: Barlow, sans-serif;
      background-color: #fb6f92;
      justify-content: center;
      align-items: start;
      color: #fff;
      font-weight: 400;
      padding: 15px 60px 15px 13px;
    }
    @media (max-width: 991px) {
      .div-10 {
        padding-right: 20px;
      }
    }
          
    .product-item {
  width: calc(33.33% - 20px); /* Adjusted to 33.33% for 3 products in a row */
  margin-right: 20px; /* Added margin-right for spacing between products */
  margin-bottom: 20px;
  border: 2px solid #000000;
  padding: 15px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  position: relative;
  box-sizing: border-box; /* Include padding and border in the width calculation */
}

.product-item:last-child {
  margin-right: 0; /* Remove margin-right for the last product in the row */
}


.img {
  width: 100%;
  height: auto;
 

}

.discount-tag {
  background-color: #fb6f92;
  color: #fff;
  font-family: 'Barlow', sans-serif;
  font-weight: bold;
  font-size: 14px;
  padding: 5px;
  position: absolute;
  top: 17;
  left: 0;
}

.product-info {
  margin-top: 10px;
  justify-content: center;
  align-items: center;
  text-align: center; 
  display: flex;
  flex-direction: column;
  color: #212121;
  font-weight: 700;
  padding: 10px 33px;
}

.product-name {
  
  align-self: stretch;
  font: 17px Barlow, sans-serif;

}

.product-category {
  color: #777;
  
  margin-top: 6px;
  font: 400 14px Barlow, sans-serif;
}

.product-price {
  color: #fb6f92;
  text-align: center;
  margin-top: 6px;
  font: 18px/135% Barlow, sans-serif;
  font-weight : bold;
}
.trash {
  aspect-ratio: 1;
  object-fit: auto;
  width: 30px;
  padding: 5px;
  position: absolute;
  bottom: 10;
  right: 0;
}




  


          </style>
    </body>
</html>