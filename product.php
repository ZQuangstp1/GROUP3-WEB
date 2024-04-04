<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <script type="text/javascript" src="script.js" language="JavaScript">
    </script>
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
              $product = $row['productID']; 
              $unitPrice = $row['unitPrice'];
              $description = $row['description'];
              $productName = $row['productName'];
              $image = $row['image'];
          //giaiPhongBoNho($link, $result);
        } else {
            echo "Không có ID sản phẩm được cung cấp!";
        }
      }
 ?>  
<!-- PHẦN: Thông tin về sản phẩm --> 
    <div class="detail">
      <div class="detail-inner">
        <div class="add-to-bag-parent">
<!--Thông tin chính sản phẩm -->        
          <div class="tieu-de"><?php echo $productName; ?></div>
          <div class="tng-tin-parent">
            <div class="tng-tin">TỔNG TIỀN</div>
            <div class="vnd"><?php echo round ($unitPrice);?> VND</div>
          </div>

<!--Chọn số lượng -->
          <div class="s-lng-parent">
            <div class="s-lng">SỐ LƯỢNG</div>
            <div class="qty">
              <div class="qty-child"></div>
                <button class="btn-minus" onclick="totalClick(-1)">
                  <div class="qty-item">
                  </div>
                </button>
              <div class="rectangle-parent">
                <button class="btn-plus" onclick="totalClick(1)">
                <div class="group-child"></div>
                <div class="group-item"></div>
                </button>
              </div>
              <div class="div">
                <span id="number">1</span>
                <!--<input type="number" class="input-quantity" id="my-input" value="1" min="1" max="20" step="1" readonly>-->
              </div>
            </div>
          </div>
          
<!--Nút giỏ hàng -->

        <!--Tạo thêm cái form để submit cái nút nha ~~ -->
        <div class="add-to-bag" id="add-to-bag">
            <div class="rectangle"></div>
            <button class="add-to-bag1" id="add-to-cart-btn">THÊM VÀO GIỎ HÀNG</button>
            <form action="addtocart.php" method="post">
              <input type="hidden" name="idofpro" value="<?php echo $product; ?>">
              <input type="hidden" name="img" value="<?php echo $image; ?>">
              <input type="hidden" name="tensp" value="<?php echo $productName; ?>">
              <input type="hidden" name="soluong" id="input-quantity" value=""> <!--chưa tăng giamr được số lượng-->
              <input type="hidden" name="tongtien" value="<?php echo round ($unitPrice);?> VNĐ">
              <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG" class="add-to-bag1">
            </form>
          </div>
          <div class="popup" id="popup">
            <span class="popup-message">Thêm vào giỏ hàng thành công!</span>
          </div>

<!--Nút thích -->
          <div class="save-button">
            <div class="rectangle1"></div>
            <img
              class="heart-outline-icon"
              alt=""
              src="./public/heartoutline.svg"
            />
          </div>
          <div class="thich">THÍCH</div>

<!--Phí vận chuyển -->
          <div class="frame-parent">
            <img class="frame-icon" alt="" src="./public/frame.svg" />
            <div class="phi-van-chuyen">Phí vận chuyển</div>
            <div class="enter-your-postal">
              Enter your Postal code for Delivery Availability
            </div>
          </div>

          <div class="line"></div>
<!--Chính sách đổi trả -->          
          <div class="frame-group">
            <img class="frame-icon1" alt="" src="./public/frame1.svg" />
            <div class="chinh-sach">Chính sách đổi trả</div>
            <div class="free-30-days-container">
              Free 30 days Delivery Return.
              <span class="details">Details</span>
            </div>
          </div>

<!--Thanh địa chỉ nhỏ-->
          <div class="stylum-text">
            <div class="rectangle2"></div>
            <div class="stylum">STYLUM</div>
          </div>

          <div class="xem-nh-gi">Xem Đánh giá (27)</div>
          <div class="star">
            <img class="star-child" alt="" src="./public/group-929.svg" />
          </div>
          <img class="image-4-icon" alt="" src="./public/image-4@2x.png" />
          <img class="image-4-icon" alt="" src="<?php echo $image; ?>" />

          <div class="active"></div>
          <img class="image-8-icon" alt="" src="./public/image-8@2x.png" />
          <img class="image-8-icon" alt="" src="<?php echo $image; ?>" />

          <img class="zoom-image-icon" alt="" src="./public/zoom-image.svg" />

          <div class="breadcrumb">Home / <?php echo $productName; ?></div>
        </div>
      </div>

<!-- PHẦN: Mô tả và đánh giá về sản phẩm --> 
<!--Mô tả sản phẩm -->
      <div class="detail-child">
        <div class="description-parent">
          <div class="description">
            <div class="description-child"></div>
            <div class="about-product-cool-container">
              <span class="about-product-cool-container1">
                <br>
                <br>
                <br>
                <br>
                <p class="about-product">VỀ SẢN PHẨM</p>
                <br>
                <p class="cool-off-this">
                <?php echo $description; ?>
                </p>
              </span>
            </div>

            <div class="shipping-we-offer-container">
              <span class="about-product-cool-container1">
                <p class="shipping">VẬN CHUYỂN</p>
                <br>
                <p class="we-offer-free-standard-shippin">
                  <span>
                    <span class="we-offer-free"
                      >Chúng tôi cung cấp miễn phí vận chuyển tiêu chuẩn cho tất cả các đơn hàng trong khu vực nội thành Hồ Chí Minh. Giá trị đơn hàng tối thiểu phải là 2,000,000 VND trước thuế, vận chuyển và xử lý. Các phí vận chuyển thì không được hoàn lại.
                    </span>
                  </span>
                </p>
                <p class="about-product">
                  <span>
                    <span class="columbia-the-minimum">&nbsp;</span>
                  </span>
                </p>
                <p class="about-product">
                  <span>
                    <span class="columbia-the-minimum"
                      >Vui lòng chờ tối đa 2 ngày làm việc (không bao gồm cuối tuần, ngày lễ và ngày bán hàng) để xử lý đơn đặt hàng của bạn.</span
                    >
                  </span>
                </p>
                <p class="about-product">
                  <span>
                    <span class="columbia-the-minimum"
                      >Thời gian xử lý + Thời gian vận chuyển = Thời gian giao hàng</span
                    >
                  </span>
                </p>
              </span>
            </div>
          </div>
          <div class="tab">
            <div class="line1"></div>
            <div class="active-line"></div>
            <div class="m-t">MÔ TẢ</div>
          </div>
        </div>
      </div>

<!--Phần đánh giá -->  

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

<!--Đánh giá từ user-->  
      <div class="groupdanhgia">                  
                <?php
                require_once "db_module.php";
                $link = null;
                taoKetNoi($link);

                $sql = "SELECT 
                    c.lastname, c.firstname, r.rating, r.comment
                FROM 
                    product p
                JOIN
                    review r ON  p.productID = r.productID
                JOIN
                    userAccount u ON r.accountID = u.accountID
                JOIN
                    customer c ON u.customerID = c.customerID
                WHERE 
                    p.productID = '$productId'";

                $result = chayTruyVanTraVeDL($link, $sql);

                if ($result->num_rows > 0) {
                    // Duyệt qua các hàng kết quả và hiển thị dữ liệu trong HTML
                    while ($row = $result->fetch_assoc()) {
                        ?>
                              <div class = "review">
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
                                        <div class="greate-product"><?php echo $row['comment']; ?></div>               
                                        <div class="head">
                                          <div class="star-parent">
                                            <img
                                              class="star-icon6"
                                              alt=""
                                              src="./public/star6.svg"
                                            />
                                            <div class="tenuser"><?php echo $row['lastname']; ?> <?php echo $row['firstname']; ?></div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="profile1">
                                        <div class="profile-child"></div>
                                        <div class="user">user</div>
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
<!-- Viết đánh giá-->
              <div class="form-parent">
                <div class="form">
                  <div class="div20">
                    <div class="child11"></div>
                    <div class="great-products">
                      <input type="text" id="input" placeholder="Great Products" />
                      <br>
                      <br>
                      <button type="button" name="button" id="comment">Đánh giá</button>
                    </div>
                    <div class="review-title">Nội dung đánh giá</div>
                  </div>
                  <div class="star1">
                    <div class="what-is-it">Sản phẩm như thế nào?</div>
                    <img class="star-icon8" alt="" src="./public/star7.svg" />
                  </div>
                </div>
                <div class="vit-nh-gi">Viết đánh giá</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
<!--Thông tin thêm -->
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

<!--Sản phẩm mới -->
      <div class="group-div">
        <div class="frame-container">
          <div class="parent">
           <!-- Copy sản phẩm giảm giá-->
            <?php   
              require_once "db_module.php";

              $link = null;
              taoKetNoi($link);
                //Tạo kết nối vào CSDL
                  $sql = "SELECT 
                        p.productName,
                        p.description,
                        p.image,
                        sc.subcategoryName
                    FROM 
                        product p
                    JOIN
                        subcategory sc ON p.subcategoryID = sc.subcategoryID        
                        LIMIT 1";

            $result = chayTruyVanTraVeDL($link,$sql);
            giaiPhongBoNho($link, $result);
            ?>

            <div id="menu-container2" class="animate-on-scroll">
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
                <div class="button-container"><button class="SeeAll">Xem thêm</button></div>
            </div> 
          </div>
          <div class="header-heading-3-trending-wrapper">
            <div class="header-heading">Sản phẩm mới</div>
          </div>
        </div>
      </div>
    </div>
</div>

<!--FOOTER -->
  <?php require "footer.php"; ?>
  </body>
</html>
