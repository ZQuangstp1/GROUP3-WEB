<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="upperstyles.css">
  <link rel="stylesheet" href="stylemenu.css">
  <!-- <script type="text/javascript" src="search.js" language="JavaScript"> -->

  <!-- // <script type="text/javascript" src="script.js" language="JavaScript"> -->
  </script>  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css'> 
  <title>Trang sức Flamingo</title>
</head>

<body>
  <div class="main-container">
    <div class="content-container">
      <!-- HEADER -->
    <?php include "header.php"; ?> 
    <!-- MENU -->
      <div id = "menu-container">
            <nav class = "container">
                <ul id="main-menu">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="">Sản phẩm</a>
                    <ul class="sub-menu">
                        <li><a href="">Lắc</a>
                            <ul class="sub-menu">
                                <li><a href="">Vòng bạc</a></li>
                                <li><a href="">Lắc tay bạc</a></li>
                                <li><a href="">Lắc chân bạc</a></li>
                                <li><a href="">Charm bạc</a></li>
                            </ul>
                        </li>
                        <li><a href="">Mặt dây chuyền</a>
                            <ul class="sub-menu">
                                <li><a href="">Mặt dây chuyền bạc</a></li>
                            </ul>
                        </li>
                        <li><a href="">Bông tai</a>
                            <ul class="sub-menu">
                                <li><a href="">Bông tai treo</a></li>
                                <li><a href="">Bông tai xỏ lỗ</a></li>
                            </ul>
                        </li>
                        <li><a href="">Dây chuyền</a>
                            <ul class="sub-menu">
                                <li><a href="">Dây chuyền bạc</a></li>
                                <li><a href="">Dây chuyền vàng</a></li>
                            </ul>
                        </li>
                        <li><a href="">Nhẫn</a>
                            <ul class="sub-menu">
                                <li><a href="">Nhẫn bạc</a></li>
                                <li><a href="">Nhẫn vàng</a></li>
                            </ul>
                        <li><a href="">Phụ kiện rời</a>
                            <ul class="sub-menu">
                                <li><a href="">Hộp đựng trang sức</a></li>
                                <li><a href="">Dụng cụ vệ sinh</a></li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                    <li><a href="">Quà tặng</a></li>
                    <li><a href="">Thông tin chung</a></li>
                </ul>
            </nav>
        </div>
        <!-- BANNER -->
      <div class="banner-container">
        <img
          loading="lazy"
          src="img/img4.png"
          class="banner"
        />
        <div class="content-on-banner">
          <div class="text-on-banner">
            <img
              loading="lazy"
              src="https://cdn.builder.io/api/v1/image/assets/TEMP/cfb03300b34e95312e28d266a73cd7b4ec2028d5bea759722f61b49f33907171?"
              class="golden-frame"
            />
            <div class="banner-text">
              <div class="banner-text1">50%</div>
              <div class="banner-text2"></div>
              <div class="banner-text3">
                Chương trình
                <br />
                khuyến mãi
                <br />
                Quốc tế Phụ Nữ
              </div>
            </div>
            <div class="banner-text4">
              Áp dụng cho toàn bộ hệ thống cửa hàng Flamingo trên toàn quốc
              <br />
              Từ 8/3/2024 đến hết 31/3/2024
            </div>
          </div>
          <div class="whitelines-on-banner">
            <div class="whitelines-banner">
              <div class="whiteline1"></div>
              <div class="whiteline2"><div class="whiteline3"></div></div>
              <div class="whiteline4"></div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <!-- LIST PRODUCT -->
      <div class = "listproduct-container">
        <div class = "prod1">
            <div class="overlay" ></div>
            <div class="text-on-overlay">Lắc</div>
            <img src="img/frame1.png" width = 100% height = 100% alt="">
        </div>
        <div class = "prod2">
            <div class="overlay"></div>
            <div class="text-on-overlay">Mặt dây chuyền</div>
            <img src="img/frame2.png" width = 100% height = 100% alt="">
        </div>
        <div class = "prod3">
            <div class="overlay"></div>
            <div class="text-on-overlay">Bông tai</div>
            <img src="img/frame3.png" width = 100% height = 100% alt="">
        </div>
        <div class = "prod4">
            <div class="overlay"></div>
            <div class="text-on-overlay">Dây chuyền</div>
            <img src="img/frame4.png" width = 100% height = 100% alt="">
        </div>
        <div class = "prod5">
            <div class="overlay"></div>
            <div class="text-on-overlay">Nhẫn</div>
            <img src="img/frame5.png" width = 100% height = 100% alt="">
        </div>
        <div class = "prod6">
            <div class="overlay"></div>
            <div class="text-on-overlay">Phụ kiện rời</div>
            <img src="img/frame6.png" width = 100% height = 100% alt="">
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <!-- BEST SELLER -->
      <div class="bestseller-template">SẢN PHẨM BÁN CHẠY</div>
      <br>
      <br>
      <div class="best-seller">
        <?php
          require_once "dbmodule.php";
          $link = null;
          taoKetNoi($link);

          $sql = "SELECT 
                      p.productName, 
                      CONCAT(FORMAT(p.unitPrice, 0), ' VNĐ') AS formattedUnitPrice, 
                      p.image,
                      CONCAT(FORMAT(d.discountAmount * 100, 0), '%') AS discountPercentage,
                      c.categoryName,
                      sc.subcategoryName
                  FROM product p 
                  LEFT JOIN subcategory sc ON p.subcategoryID = sc.subcategoryID
                  LEFT JOIN category c ON sc.categoryID = c.categoryID
                  LEFT JOIN orderdetail od ON p.productID = od.productID
                  LEFT JOIN orders o ON o.orderID = od.orderID
                  LEFT JOIN discount d ON p.discountID = d.discountID
                  GROUP BY p.productName, formattedUnitPrice, p.image, discountPercentage, c.categoryName, sc.subcategoryName -- Grouping by all selected columns
                  ORDER BY SUM(od.quantity) DESC
                  LIMIT 5;
                  ";

          $result = chayTruyVanTraVeDL($link, $sql);
          if ($result->num_rows > 0) {
            // Duyệt qua các hàng kết quả và hiển thị dữ liệu trong HTML
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="bestsellerproduct-item">
                    <img src="<?php echo $row['image']; ?>" class="img">     
                    <?php if ($row['discountPercentage'] !== null) { ?>
                        <div class="discount-tag"><?php echo $row['discountPercentage']; ?></div>
                    <?php } ?>                    <div class="bestsellerproduct-info">
                        <div class="bestsellerproduct-name"><?php echo $row['productName']; ?></div>
                        <div class="bestsellerproduct-category"><?php echo $row['categoryName']; ?> | <?php echo $row['subcategoryName']; ?></div>
                        <div class="bestsellerproduct-price"><?php echo $row['formattedUnitPrice']; ?></div>
                  </div>
                </div>
                <?php
                    }
                } else {
                    echo "0 results";
                }
                giaiPhongBoNho($link, $result);
                ?>
    </div>
    <br>
    <br>
    <br>
    <!-- INCLUDE QUANG'S PHP FILE BELOW HERE  -->
    
  </div>
</body>
</html>
