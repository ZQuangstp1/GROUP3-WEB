<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./product.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Baloo Bhaina 2:wght@400;500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap"
    />
  </head>


  <body>
  <?php
        require_once "db_module.php";
        $link = null;
        taoKetNoi($link);
        
        // Kiểm tra xem ID sản phẩm đã được truyền qua URL hay chưa
        if(isset($_GET['product_id'])) {
            // Kết nối đến cơ sở dữ liệu và thực hiện truy vấn
            $productId = $_GET['product_id'];
            $sql = "SELECT * FROM product WHERE productID = '$productId'"; 
            $result = chayTruyVanTraVeDL($link, $sql);
            if ($result->num_rows > 0) {
              // Lấy dữ liệu từ kết quả truy vấn
              $row = $result->fetch_assoc();
              $unitPrice = $row['unitPrice'];
              $description = $row['description'];
              $productName = $row['ProductName'];
              $image = $row['image'];
            giaiPhongBoNho($link, $result);
        } else {
            echo "Không có ID sản phẩm được cung cấp!";
        }
      }
 ?>

    <div class="detail">
      <div class="detail-inner">
        <div class="add-to-bag-parent">
          <div class="add-to-bag">
            <div class="rectangle"></div>
            <div class="add-to-bag1">THÊM VÀO GIỎ HÀNG</div>
          </div>
          <div class="save-button">
            <div class="rectangle1"></div>
            <img
              class="heart-outline-icon"
              alt=""
              src="./public/heartoutline.svg"
            />
          </div>
          <div class="thch">THÍCH</div>
          <div class="frame-parent">
            <img class="frame-icon" alt="" src="./public/frame.svg" />

            <div class="ph-vn-chuyn">Phí vận chuyển</div>
            <div class="enter-your-postal">
              Enter your Postal code for Delivery Availability
            </div>
          </div>
          <div class="line"></div>
          <div class="frame-group">
            <img class="frame-icon1" alt="" src="./public/frame1.svg" />

            <div class="chnh-sch-i">Chính sách đổi trả</div>
            <div class="free-30-days-container">
              Free 30 days Delivery Return.
              <span class="details">Details</span>
            </div>
          </div>
          <div class="vng-tay-i"><?php echo $productName; ?></div>
          <div class="tng-tin-parent">
            <div class="tng-tin">TỔNG TIỀN</div>
            <div class="vnd"><?php echo $unitPrice; ?></div>
          </div>
          <div class="s-lng-parent">
            <div class="s-lng">SỐ LƯỢNG</div>
            <div class="qty">
              <div class="qty-child"></div>
              <div class="qty-item"></div>
              <div class="rectangle-parent">
                <div class="group-child"></div>
                <div class="group-item"></div>
              </div>
              <div class="div">1</div>
            </div>
          </div>
          <div class="stylum-text">
            <div class="rectangle2"></div>
            <div class="stylum">STYLUM</div>
          </div>
          <div class="xem-nh-gi">Xem Đánh giá (27)</div>
          <div class="star">
            <img class="star-child" alt="" src="./public/group-929.svg" />
          </div>
          <img class="image-4-icon" alt="" src="<?php echo $image; ?>" />

          <div class="active"></div>
          <img class="image-8-icon" alt="" src="<?php echo $image; ?>" />

          <img class="zoom-image-icon" alt="" src="./public/zoom-image.svg" />

          <div class="vng-tay-i1">Home / Stellar Dainty Diamond Hoop</div>
        </div>
      </div>


      
      <div class="detail-child">
        <div class="description-parent">
          <div class="description">
            <div class="description-child">
              <div class="about-product-cool-container">
                <span class="about-product-cool-container1">
                  <p class="cool-off-this">
                    <?php echo $description; ?>
                  </p>
                </span>
              </div>
            </div>
            <div class="description-child">
              <div class="shipping-we-offer-container">
                <span class="about-product-cool-container1">
                  <p class="shipping">SHIPPING</p>
                  <p class="we-offer-free-standard-shippin">
                    <span>
                      <span class="we-offer-free">
                        We offer Free Standard Shipping for all orders over $75 to the 50 states and the District of Columbia. The minimum order value must be $75 before taxes, shipping and handling. Shipping fees are non-refundable.
                      </span>
                      <span class="columbia-the-minimum">
                        Please allow up to 2 business days (excluding weekends, holidays, and sale days) to process your order. Processing Time + Shipping Time = Delivery Time.
                      </span>
                    </span>
                  </p>
                </span>
              </div>
            </div>
          </div>
          <div class="tab">
            <div class="line1"></div>
            <div class="active-line"></div>
            <div class="m-t">MÔ TẢ</div>
          </div>
        </div>
      </div>

      <div class="other-information-wrapper">
        <div class="other-information">
          <div class="other-information-child"></div>
          <div class="frame">
            <div class="frame-child"></div>
            <div class="frame-item"></div>
          </div>
          <div class="thng-tin-thm">Thông tin thêm</div>
        </div>
      </div>

      <div class="detail-inner1">
        <div class="group-wrapper">
          <div class="group-wrapper">
            <div class="group-wrapper">
              <div class="group-inner"></div>

              <div class="tab1">
                <div class="line2"></div>
                <div class="active-line1"></div>
                <div class="m-t">ĐÁNH GIÁ</div>
              </div>

              <div class="inner-parent">
                <div class="inner3">
                  <div class="stars-box">
                    <div class="stars-box-child"></div>
                    <div class="inner4">
                      <div class="div9">
                        <div class="item"></div>
                        <div class="rectangle-div"></div>
                        <img class="star-icon" alt="" src="./public/star.svg" />

                        <div class="div10">70%</div>
                      </div>
                      <div class="div11">
                        <div class="child1"></div>
                        <div class="child2"></div>
                        <div class="div10">15%</div>
                        <img
                          class="star-icon1"
                          alt=""
                          src="./public/star1.svg"
                        />
                      </div>
                      <div class="div13">
                        <div class="child3"></div>
                        <div class="child4"></div>
                        <div class="div10">10%</div>
                        <img
                          class="star-icon2"
                          alt=""
                          src="./public/star2.svg"
                        />
                      </div>
                      <div class="div15">
                        <div class="child5"></div>
                        <div class="child6"></div>
                        <img
                          class="star-icon3"
                          alt=""
                          src="./public/star3.svg"
                        />

                        <div class="div16">3%</div>
                      </div>
                      <div class="div17">
                        <div class="child7"></div>
                        <div class="child8"></div>
                        <div class="div16">2%</div>
                        <img
                          class="star-icon4"
                          alt=""
                          src="./public/star4.svg"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="rating-box">
                    <div class="rating-box-child"></div>
                    <div class="info">
                      <div class="product-rating">Product Rating</div>
                      <img class="star-icon5" alt="" src="./public/star5.svg" />

                      <b class="b">4.8</b>
                    </div>
                  </div>
                </div>
                <div class="nh-gi-t">Đánh giá từ Khách hàng</div>
              </div>
              
              <div class="inset-parent">
                <div class="inset">
                  <div class="xem-thm1">Xem thêm</div>
                </div>
                <div class="nh-gi1">Đánh giá</div>
              </div>
              <div class="profile">
                <div class="profile-child"></div>
                <div class="user">user</div>
              </div>
              <div class="group">
                <div class="div19">
                  <div class="child9"></div>
                  <div class="child10"></div>
                  <div class="info1">
                    <div class="helpfull-btn">
                      <div class="reply">reply</div>
                      <div class="like">Like</div>
                      <img
                        class="vuesaxlinearlike-icon"
                        alt=""
                        src="./public/vuesaxlinearlike.svg"
                      />
                    </div>
                    <div class="greate-product">Greate Product</div>
                    <div class="head">
                      <div class="star-parent">
                        <img
                          class="star-icon6"
                          alt=""
                          src="./public/star6.svg"
                        />

                        <div class="ngy-trc">3 ngày trước</div>
                        <div class="nicolas-cage">Nicolas cage</div>
                      </div>
                    </div>
                  </div>
                  <div class="info2">
                    <div class="helpfull-btn1">
                      <div class="reply">reply</div>
                      <div class="like">Like</div>
                      <img
                        class="vuesaxlinearlike-icon1"
                        alt=""
                        src="./public/vuesaxlinearlike.svg"
                      />
                    </div>
                    <div class="greate-product">Greate Product</div>
                    <div class="head">
                      <div class="star-parent">
                        <img
                          class="star-icon6"
                          alt=""
                          src="./public/star6.svg"
                        />

                        <div class="ngy-trc">3 ngày trước</div>
                        <div class="nicolas-cage">Nicolas cage</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="profile1">
                  <div class="profile-child"></div>
                  <div class="user">user</div>
                </div>
              </div>
              <div class="form-parent">
                <div class="form">
                  <div class="div20">
                    <div class="child11"></div>
                    <div class="great-products">Great Products</div>
                    <div class="review-title">Review Title</div>
                  </div>
                  <div class="star1">
                    <div class="what-is-it">What is it like to Product?</div>
                    <img class="star-icon8" alt="" src="./public/star7.svg" />
                  </div>
                </div>
                <div class="vit-nh-gi">Viết đánh giá</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="group-div">
        <div class="frame-container">
          <div id="menu-container2" class="animate-on-scroll">
          <div class="header-heading-3-trending-wrapper">
            <div class="header-heading">SẢN PHẨM TƯƠNG TỰ</div>
          </div>
            <div class="top-products">
                <?php
                require_once "db_module.php";
                $link = null;
                taoKetNoi($link);

                $sql = "SELECT 
                    p.productName,
                    CONCAT(FORMAT(p.unitPrice, 0), ' VNĐ') AS formattedUnitPrice,
                    p.image,
                    CONCAT(FORMAT(d.discountAmount * 100, 0), '%') AS discountPercentage,
                    c.categoryName,
                    sc.subcategoryName
                FROM 
                    product p
                JOIN
                    subcategory sc ON p.subcategoryID = sc.subcategoryID
                JOIN
                    category c ON sc.categoryID = c.categoryID
                JOIN
                    discount d ON p.discountID = d.discountID
                WHERE 
                    d.discountID IS NOT NULL
                LIMIT 5";

                $result = chayTruyVanTraVeDL($link, $sql);

                if ($result->num_rows > 0) {
                    // Duyệt qua các hàng kết quả và hiển thị dữ liệu trong HTML
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="product-item">
                            <img src="<?php echo $row['image']; ?>" class="img">
                            <div class="discount-tag"><?php echo $row['discountPercentage']; ?></div>
                            <div class="product-info">
                                <div class="product-name"><?php echo $row['productName']; ?></div>
                                <div class="product-category"><?php echo $row['categoryName']; ?> | <?php echo $row['subcategoryName']; ?></div>
                                <div class="product-price"><?php echo $row['formattedUnitPrice']; ?></div>
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
          
               <div class="button-container"><button class="SeeAll">Xem tất cả</button></div>
        </div>
      </div>
     
  </body>
</html>
