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
<<<<<<< HEAD

  <?php
=======
  
<?php
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
<<<<<<< HEAD
              $product = $row['productID']; 
=======
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
              $unitPrice = $row['unitPrice'];
              $description = $row['description'];
              $productName = $row['productName'];
              $image = $row['image'];
<<<<<<< HEAD
          //giaiPhongBoNho($link, $result);
=======
            giaiPhongBoNho($link, $result);
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
<<<<<<< HEAD
                <button class="btn-minus" onclick="totalClick(-1)">
=======
                <button class="btn-minus">
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
                  <div class="qty-item">
                  </div>
                </button>
              <div class="rectangle-parent">
<<<<<<< HEAD
                <button class="btn-plus" onclick="totalClick(1)">
=======
                <button class="btn-plus">
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
                <div class="group-child"></div>
                <div class="group-item"></div>
                </button>
              </div>
              <div class="div">
<<<<<<< HEAD
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
              <input type="hidden" name="soluong" id="input-quantity" value="">
              <input type="hidden" name="tongtien" value="<?php echo round ($unitPrice);?> VNĐ">
              <input type="submit" name="addtocart" value="THÊM VÀO GIỎ HÀNG" class="add-to-bag1">
            </form>
=======
                <input type="number" class="input-quantity" value="1" min="1">
              </div>
            </div>
          </div>
              
<!--Nút giỏ hàng -->
          <div class="add-to-bag" id="add-to-bag">
            <div class="rectangle"></div>
            <button class="add-to-bag1" id="add-to-cart-btn">THÊM VÀO GIỎ HÀNG</button>
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
          </div>
          <div class="popup" id="popup">
            <span class="popup-message">Thêm vào giỏ hàng thành công!</span>
          </div>

<<<<<<< HEAD
<!--Nút thích -->
<div class="save-button" id="likeButton">
  <div class="rectangle1"></div>
  <img class="heart-outline-icon" alt="" src="./public/heartoutline.svg"/>
</div>
<button class="thich" id="likeBtn">THÍCH</button>

=======
<!--Lưu sp vào cookies-->
    <script>
    document.getElementById("add-to-cart-btn").addEventListener("click", function() {
      // Lấy thông tin sản phẩm
      var productName = document.querySelector(".tieu-de").textContent;
      var productPrice = document.querySelector(".vnd").textContent;
      var quantity = parseInt(document.querySelector(".input-quantity").value);

      // Tạo đối tượng sản phẩm
      var productInfo = {
        name: productName,
        price: productPrice,
        quantity: quantity
      };

      // Lấy danh sách sản phẩm từ cookies (nếu có)
      var cart = JSON.parse(getCookie("cart")) || [];

      // Thêm sản phẩm vào danh sách
      cart.push(productInfo);

      // Lưu danh sách sản phẩm mới vào cookies
      setCookie("cart", JSON.stringify(cart), 1); // Lưu trong 1 ngày

      // Hiển thị thông báo thành công
      document.getElementById("popup").style.display = "block";

      // Sau 2 giây, ẩn thông báo
      setTimeout(function() {
        document.getElementById("popup").style.display = "none";
      }, 2000);
    });

    // Hàm lấy cookie
    function getCookie(name) {
      var value = "; " + document.cookie;
      var parts = value.split("; " + name + "=");
      if (parts.length == 2) return parts.pop().split(";").shift();
    }


    // Hàm kiểm tra cookie
    function getCookie(name) {
      var nameEQ = name + "=";
      var cookies = document.cookie.split(';');
      for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        while (cookie.charAt(0) == ' ') {
          cookie = cookie.substring(1, cookie.length);
        }
        if (cookie.indexOf(nameEQ) == 0) {
          return decodeURIComponent(cookie.substring(nameEQ.length, cookie.length));
        }
      }
      return null;
    }

    // Hàm thiết lập cookie
    function setCookie(name, value, days) {
      var expires = "";
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
    }

    // Sử dụng hàm kiểm tra cookie
    var cart = getCookie("cart");
    if (cart) {
      console.log("Đã tìm thấy cookie 'cart':", cart);
    } else {
      console.log("Không tìm thấy cookie 'cart'");
    }

    // Sử dụng hàm thiết lập cookie
    var exampleData = { product: "Bộ vòng tay", quantity: 2 };
    setCookie("cart", JSON.stringify(exampleData), 1); // Lưu trong 1 ngày
    console.log("Cookie 'cart' đã được thiết lập.");
    </script>





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
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745

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
<<<<<<< HEAD

=======
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
      <div class="detail-inner1">
        <div class="group-wrapper">
          <div class="group-wrapper">
            <div class="group-wrapper">
              <div class="group-inner"></div>
<<<<<<< HEAD
=======

>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
              <div class="tab1">
                <div class="line2"></div>
                <div class="active-line1"></div>
                <div class="m-t">ĐÁNH GIÁ</div>
              </div>
<<<<<<< HEAD
=======

>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
<<<<<<< HEAD
=======

>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
                      <b class="b">4.8</b>
                    </div>
                  </div>
                </div>
                <div class="nh-gi-t">Đánh giá từ Khách hàng</div>
              </div>
<<<<<<< HEAD
              <div class="inset-parent">
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
                    p.productID = '$productId'
                ";

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
                    echo "Chưa có đánh giá!";
                }
                giaiPhongBoNho($link, $result);
                ?>
      </div> 
<!-- Viết đánh giá-->
              <div class="form-parent">
                <div class="form">
                  <div class="div20">
                    <div class="child11"></div>
=======
              
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
                    <div class="greate-product">Sản phẩm có mẫu mã đẹp</div>
                    <div class="head">
                      <div class="star-parent">
                        <img
                          class="star-icon6"
                          alt=""
                          src="./public/star6.svg"
                        />

                        <div class="ngy-trc">3 ngày trước</div>
                        <div class="nicolas-cage">Bảo Uyên</div>
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
                    <div class="greate-product">Sản phẩm đẹp</div>
                    <div class="head">
                      <div class="star-parent">
                        <img
                          class="star-icon6"
                          alt=""
                          src="./public/star6.svg"
                        />

                        <div class="ngy-trc">10 ngày trước</div>
                        <div class="nicolas-cage">Quang Huy</div>
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

      <!-- Viết đánh giá-->
                <div class="form">
                  <div class="div20">
                    <div class="child11"></div>
            
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
<<<<<<< HEAD

=======
           <!-- Copy sản phẩm giảm giá-->
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
<<<<<<< HEAD
=======
                        CONCAT(FORMAT(d.discountAmount * 100, 0), '%') AS discountPercentage,
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
<<<<<<< HEAD
=======
                    WHERE 
                        d.discountID IS NOT NULL
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
                    LIMIT 5";

                    $result = chayTruyVanTraVeDL($link, $sql);

                    if ($result->num_rows > 0) {
                        // Duyệt qua các hàng kết quả và hiển thị dữ liệu trong HTML
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="product-item">
                                <img src="<?php echo $row['image']; ?>" class="img">
<<<<<<< HEAD
=======
                                <div class="discount-tag"><?php echo $row['discountPercentage']; ?></div>
>>>>>>> 6173232c1cc6801e061f19b9c634ae7a190f8745
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
