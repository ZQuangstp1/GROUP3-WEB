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
<?php  require_once "header.php"; ?>
<?php  require_once "menu.php"; ?>
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
              $formattedPrice = number_format($unitPrice, 0, ',', ',');
              $description = $row['description'];
              $productName = $row['productName'];
              $image = $row['image'];
          //giaiPhongBoNho($link, $result);
        } else {
            echo "Không có ID sản phẩm được cung cấp!";
        }
      }
 ?>  
<div class="product-details">
  <div class="product-layout">
      <div class="breadcrumb">
        <div>Home / Stellar Dainty Diamond Hoop</div></div> <br>
          <img class="image-4-icon" alt="" src="<?php echo $image; ?>" />
          <div class="active"></div>
          <img class="image-8-icon" alt="" src="<?php echo $image; ?>" />
          <img class="zoom-image-icon" alt="" src="./public/zoom-image.svg" />

  
    <div class="product-info">
      <div class="product-header">
        <div class="brand-info">
          <div class="brand-name">STYLUM</div>
          <div class="rating-stars">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/268ecdae2f05065984d2e0d5ffcfbcb78794bcd076d2c9ff2514144993bbb60a?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Star rating icon" class="star-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e0a1850b5fb05b8f0795cae26f547fe534f781ab97da6559ea8504149b26b255?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Star rating icon" class="star-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/e13f3b67020bfd57837f497625d0dea15b8266e0cd5e9bff00f5bb5fa9277dfb?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Star rating icon" class="star-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2e68aec3960d65efa39c086621cd53a098cffc6475460464574257b5dc06e33e?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Star rating icon" class="star-icon" />
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9a10058a869dd7acdd4a3ee287c08764a73e2812ee8e5a6335ca12c1f722c37c?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Star rating icon" class="star-icon" />
          </div>
          <a href="#" class="review-link">Xem Đánh giá (27)</a> 
          </div>
        <div class="product-name"><?php echo $productName; ?></div>
        <div class="price-info">
          <div class="price-labels">
            <div>SỐ LƯỢNG</div>
            <div>TỔNG TIỀN</div>
          </div>
          <div class="price-details">
          <div class="quantitybtn">
              <div class="input-group">
                <button id="decrement">-</button>
                <input type="number" id="input" value="0">
                <button id="increment">+</button>
              </div>
            </div>
            <div class="total-price">
            <?php echo $formattedPrice;?> VNĐ
            </div>
          </div>
        </div>
        <div class="product-actions">
          <div class="add-to-cart">
            <button>THÊM VÀO GIỎ HÀNG</button>
          </div>
          <div class="add-to-wishlist">
            <div class="wishlist-icon">
              <img src="./public/heartoutline.svg" alt="Heart icon" />
              <div class="wishlist-text">THÍCH</div>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="add-margin">
       <section class="description-container">
          <div class="description-title-container">
            <h2 class="description-title">MÔ TẢ</h2>
            <div class="description-title-underline"></div>
          </div>
          <div class="description-underline"></div>
        </section>

      <section class="product-description">
        <h2 class="product-title">THÔNG TIN SẢN PHẨM</h2>
        <p class="product-summary">
            <?php echo $description; ?>
        </p>
      </section>

      <section class="shipping-container">
        <h2 class="product-title">VẬN CHUYỂN</h2>
        <p class="shipping-description">
          Flamingo cung cấp Miễn phí Giao hàng Tiêu chuẩn cho tất cả các đơn hàng trị giá trên 1,000,000 VNĐ. Giá trị đơn hàng tối thiểu phải là 1,000,000V NĐ trước thuế, phí vận chuyển và xử lý. Phí vận chuyển không được hoàn lại
        </p>
        <p class="shipping-description shipping-info2">
           Vui lòng cho đến tối đa 2 ngày làm việc (loại trừ cuối tuần, ngày lễ và ngày bán hàng) để xử lý đơn hàng của bạn.
        </p>
        <p class="shipping-description shipping-info2">
        Thời gian xử lý + Thời gian vận chuyển = Thời gian giao hàng
        </p>
      </section>
<!-- Phần đánh giá -->
<section class="rating-container">
  <h2 class="rating-title">Đánh giá từ Khách hàng</h2>
  <div class="rating-content">
    <div class="rating-summary">
      <div class="rating-score">
        <div class="rating-value">4.8</div>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/ffc52fb60f6c24cdb9e35ff5d5dc129c7b8daad8bf5b0a1769e2f1478a5a2327?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Product rating stars" class="rating-stars" loading="lazy" />
        <div class="rating-label">Product Rating</div>
      </div>
    </div>
    <div class="rating-details">
      <div class="rating-breakdown">
        <div class="rating-bars">
          <div class="rating-row">
            <div class="rating-bar rating-bar-5">
              <div class="rating-bar-fill"></div>
            </div>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a3d0689eb09cac44e00ac46eb1f399234b4531c32a8e2176c0db7c8777f8811?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="5 star rating" class="rating-star" loading="lazy" />
          </div>
          <div class="rating-row">
            <div class="rating-bar rating-bar-4">
              <div class="rating-bar-fill"></div>
            </div>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a3d0689eb09cac44e00ac46eb1f399234b4531c32a8e2176c0db7c8777f8811?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="4 star rating" class="rating-star" loading="lazy" />
          </div>
          <div class="rating-row">
            <div class="rating-bar rating-bar-3">
              <div class="rating-bar-fill"></div>
            </div>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a3d0689eb09cac44e00ac46eb1f399234b4531c32a8e2176c0db7c8777f8811?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="3 star rating" class="rating-star" loading="lazy" />
          </div>
          <div class="rating-row">
            <div class="rating-bar rating-bar-2">
              <div class="rating-bar-fill"></div>
            </div>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a3d0689eb09cac44e00ac46eb1f399234b4531c32a8e2176c0db7c8777f8811?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="2 star rating" class="rating-star" loading="lazy" />
          </div>
          <div class="rating-row">
            <div class="rating-bar rating-bar-1">
              <div class="rating-bar-fill"></div>
            </div>
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6a3d0689eb09cac44e00ac46eb1f399234b4531c32a8e2176c0db7c8777f8811?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="1 star rating" class="rating-star" loading="lazy" />
          </div>
        </div>
        <div class="rating-percentages">
          70% <br> <br>
          15% <br> <br>
          10% <br> <br>
          3% <br> <br>
          2%
        </div>
      </div>
    </div>
  </div>
</section>


    <section class="description-container">
          <div class="description-title-container">
            <h2 class="description-title">Đánh giá</h2>
            <div class="description-title-underline"></div>
          </div>
          <div class="description-underline"></div>
    </section>
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

        $result = mysqli_query($link, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="wrapper">
                        <p class="actor-name"><?php echo $row['lastname'] . ' ' . $row['firstname']; ?></p>
                        <div class="star-wrapper">
                            <?php
                            // Hiển thị số sao tương ứng với rating
                            for ($i = 1; $i <= $row['rating']; $i++) {
                                ?>
                                <div class="star"></div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <article class="comment-container">
                        <p class="comment-text">
                            <?php echo $row['comment']; ?>
                        </p>
                        <div class="comment-actions">
                            <div class="like-action">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1b240edefe1abacad66bef21721864d0794a3a7e02e78368e112eb9b8d5a1977?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Like icon" class="like-icon" loading="lazy" />
                                <span class="like-text">Like</span>
                            </div>
                            <div class="reply-action">reply</div>
                        </div>
                    </article>
                    <?php
                }
            } else {
                echo "Chưa có đánh giá!";
            }
        } else {
            echo "Lỗi trong quá trình truy vấn.";
        }

        giaiPhongBoNho($link, $result);
        ?>
<br>
<br>
<section class="review-section">
  <h2 class="review-title">Viết Đánh giá</h2>
  <div class="wrapper">
    <p class="actor-name">Hãy chia sẻ trải nghiệm của bạn khi dùng sản phẩm</p>
      <div class="star-wrapper">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6dbf5c6bd0bec03018b7946b667b4dc437a235d20dab1b13dd1a5750cafc2231?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&" alt="Product Image" class="product-star" loading="lazy" />
      </div>
  </div>
  <section class="great-products">
         Great Products
    </section>   
</section>
</div>

<div class="bestseller-template"  id="animate-on-scroll">SẢN PHẨM TƯƠNG TỰ</div>
      <br>
      <br>
      <div class="best-seller"  id="animate-on-scroll">
        <?php
          require_once "db_module.php";
          $link = null;
          taoKetNoi($link);

          $sql = "SELECT 
                      p.productName, 
                      p.productID,
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
                  <a href="product.php?product_id=<?php echo $row['productID']; ?>">
                      <img src="<?php echo $row['image']; ?>" class="img">     
                      <?php if ($row['discountPercentage'] !== null) { ?>
                          <div class="discount-tag"><?php echo $row['discountPercentage']; ?></div>
                      <?php } ?>        
                      <div class="bestsellerproduct-info">
                          <div class="bestsellerproduct-name"><?php echo $row['productName']; ?></div>
                          <div class="bestsellerproduct-category"><?php echo $row['categoryName']; ?> | <?php echo $row['subcategoryName']; ?></div>
                          <div class="bestsellerproduct-price"><?php echo $row['formattedUnitPrice']; ?></div>
                    </div>
                    </a>
                  </div>
            
                <?php
                    }
                } else {
                    echo "0 results";
                }
                giaiPhongBoNho($link, $result);
                ?>
    </div>
    <?php  require_once "footer.php"; ?>
<script>
      let counter = 0;

      function increment() {
        counter++;
      }

      function decrement() {
        counter--;
      }

      function get() {
        return counter;
      }

      const inc = document.getElementById("increment");
      const input = document.getElementById("input");
      const dec = document.getElementById("decrement");

      inc.addEventListener("click", () => {
        increment();
        input.value = get();
      });

      dec.addEventListener("click", () => {
        if (input.value > 0) {
          decrement();
        }
        input.value = get();
      });

      // Kiểm tra và chỉ cho phép nhập số
      inputField.addEventListener('input', () => {
        inputField.value = inputField.value.replace(/[^0-9]/g, '');
      });
    </script>
</body>
</html>