<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script type="text/javascript" src="script.js" language="JavaScript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css'> 
    <title>Trang sức Flamingo</title>
</head>
<body>
    <div class="main-container2">
        <div class="content-container2">
          <div class="feature-section"> 
            <div class="feature-item">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/28ae41166a70e2cd6af30cd0d458f4342701a904db3fc29fb50f9dc594648377?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"
                class="feature-img"
              />
              <div class="feature-text">TÚI HỘP TRANG NHÃ <br>Sẵn sàng trao tặng</div>
            </div>
            <div class="feature-item">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/233d513438babadda4bf2860f7de736a88c8e2654f268dab5ddc325d8e8a6af9?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"
                class="feature-img"
              />
              <div class="feature-text">Đổi trả MIỄN PHÍ <br>Trong vòng 30 NGÀY</div>
            </div>
            <div class="feature-item">
              <div class="service-item">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/5e5f38c738d97e2b2c91d4e8c5bf5a88c3eaf16d122be8794fc0fb19c86a21e2?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"
                  class="feature-img"
                />
                <div class="service-text">Dịch vụ BẢO HÀNH <br>TRỌN ĐỜI</div>
              </div>
            </div>
            <div class="feature-item">
              <img
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/6cbacfe4ea173ec17eaabee0ad9b57fa865d6a67e800b14fb6dc89cc94161f48?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"
                class="feature-img"
              />
              <div class="feature-text">MIỄN PHÍ vận chuyển <br>Đơn Hàng từ 950.000 VNĐ</div>
            </div>
          </div>
        </div>
      </div>      

  <?php   
   require_once "dbmodule.php";

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


if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while($row = $result->fetch_assoc()) {
        echo '<div id="main-container3" data-aos="fade-up"">';
        echo '<div id="custom-div" data-aos="fade-up"">';
        echo '<div id="custom-column" data-aos="fade-up"">';
        echo '<img loading="lazy" src="' . $row["image"] . '" class="custom-img animate-on-scroll" />';
        echo '</div>';
        echo '<div id="custom-column-2" data-aos="fade-up"">';
        echo '<div id="custom-div-3" data-aos="fade-up"">';
        echo '<div id="custom-div-4" data-aos="fade-up"">' . $row["subcategoryName"] . '</div>';
        echo '<div id="custom-div-5" data-aos="fade-up"">' . $row["productName"] . '</div>';
        echo '<div id="custom-div-6" data-aos="fade-up"">' . $row["description"] . '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 kết quả";
}
giaiPhongBoNho($link, $result);
?>

<div id="trend" class="animate-on-scroll">SẢN PHẨM GIẢM GIÁ</div>
<div id="menu-container2" class="animate-on-scroll">
    <div class="top-products">
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
    <div class="Insta">
      <header class="header">Follow Flamingo trên Instagram</header>
      <div class="image-wrapper">
        <a href="#" class="link">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/5856724602e336b7163f276810e2879b5feb96807971f769665adb8f2e22a51d?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"class="image" />
        </a>
        <a href="#" class="link">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/81119b784ae3dd9d4d067807d48810dc859ed132b39c019f1264607149a571ec?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"class="image" />
        </a>
        <a href="#" class="link">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/6593bfec491c233a1f56b9edebebd5e2c5766c666a04cc804d37de542f7a0197?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"class="image" />
        </a>
        <a href="#" class="link">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/0663d90fe29cb55f3b58f6ab08a8f35f54011a7b06a17dd9e3d8896c4becff43?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"class="image" />
        </a>
        <a href="#" class="link">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/5661a1ce6f12a5b6ba9409aead1e6abecb04e1cb242c2cdd5a1d3cb2f6d2db41?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"class="image" />
        </a>
        <a href="#" class="link">
          <img loading="lazy" srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/15f0d2ac882b966b32732cca797a085de627758a024e6f11d8b512cf4fb90aca?apiKey=bccb907b8ab04fd1b7a4acf52ff78b77&"class="image-2" />
        </a>
      </div>
    </div>
<br>
<br>
    <div class="container">
      <div class="swiper swiperCarousel">
          <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <div class="card">
                      <img class="avatar" src="https://i.pravatar.cc/200?img=31" />
                      <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px">
               
              </svg>
                      <div class="header">
                          <h1 class="name">Amy Liu</h1>
                          <h2 class="title">CTO, Cybertech Solutions</h2>
                      </div>
                      <div class="quote-container">
                          <p class="quote">
                              Sản phẩm tốt
                          </p>
                      </div>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="card">
                      <img class="avatar" src="https://i.pravatar.cc/200?img=26" />
                      <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px">
                
              </svg>
                      <div class="header">
                          <h1 class="name">Sarah Price</h1>
                          <h2 class="title">Sr. Technology Analyst</h2>
                      </div>
                      <div class="quote-container">
                          <p class="quote">
                            Sản phẩm tốt
                          </p>
                      </div>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="card">
                      <img class="avatar" src="https://i.pravatar.cc/200?img=69" />
                      <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px">
            
              </svg>
                      <div class="header">
                          <h1 class="name">Dr. Miguel Torres</h1>
                          <h2 class="title">Head of Neurobiology, Central University</h2>
                      </div>
                      <div class="quote-container">
                          <p class="quote">
                            Sản phẩm tốt
                          </p>
                      </div>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="card">
                      <img class="avatar" src="https://i.pravatar.cc/200?img=59" />
                      <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px">
              
              </svg>
                      <div class="header">
                          <h1 class="name">Benjamin Moore</h1>
                          <h2 class="title">
                              Director of HCI, FutureTech
                          </h2>
                      </div>
                      <div class="quote-container">
                          <p class="quote">
                            Sản phẩm tốt
                          </p>
                      </div>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="card">
                      <img class="avatar" src="https://i.pravatar.cc/200?img=49" />
                      <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px">
              
              </svg>
                      <div class="header">
                          <h1 class="name">Dr. Simone Laurent</h1>
                          <h2 class="title">Chief Neurologist, NeuroTech Hospital</h2>
                      </div>
                      <div class="quote-container">
                          <p class="quote">
                            Sản phẩm tốt
                          </p>
                      </div>
                  </div>
              </div>
              <div class="swiper-slide">
                  <div class="card">
                      <img class="avatar" src="https://i.pravatar.cc/200?img=68" />
                      <svg class="quote-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="125px" height="125px">
                <path
                  d="M 16.482422 8.9921875 A 1.50015 1.50015 0 0 0 15.943359 9.1074219 C 15.943359 9.1074219 13.068414 10.279429 10.357422 13.464844 C 7.6464301 16.650259 5 21.927419 5 30 A 1.50015 1.50015 0 0 0 5.015625 30.21875 A 8.5 8.5 0 0 0 13.5 39 A 8.5 8.5 0 0 0 13.5 22 A 8.5 8.5 0 0 0 8.7089844 23.480469 C 9.5777265 19.777157 11.122152 17.196657 12.642578 15.410156 C 14.931586 12.720571 17.056641 11.892578 17.056641 11.892578 A 1.50015 1.50015 0 0 0 16.482422 8.9921875 z M 37.482422 8.9921875 A 1.50015 1.50015 0 0 0 36.943359 9.1074219 C 36.943359 9.1074219 34.068414 10.279429 31.357422 13.464844 C 28.64643 16.650259 26 21.927419 26 30 A 1.50015 1.50015 0 0 0 26.015625 30.21875 A 8.5 8.5 0 0 0 34.5 39 A 8.5 8.5 0 0 0 34.5 22 A 8.5 8.5 0 0 0 29.708984 23.480469 C 30.577727 19.777157 32.122152 17.196657 33.642578 15.410156 C 35.931586 12.720571 38.056641 11.892578 38.056641 11.892578 A 1.50015 1.50015 0 0 0 37.482422 8.9921875 z"
                />
              </svg>
                      <div class="header">
                          <h1 class="name">Jared Foster</h1>
                          <h2 class="title">Sr. Tech Journalist, Digital Frontier</h2>
                      </div>
                      <div class="quote-container">
                          <p class="quote">
                            Sản phẩm tốt
                          </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
      </div>
  </div>
  <script src='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/textfit/2.4.0/textFit.min.js'></script>
<script>
  const swiper = new Swiper(".swiperCarousel", {
    slidesPerView: 3,
    centeredSlides: true,
    spaceBetween: 10,
    keyboard: {
      enabled: true,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  
  const slides = document.getElementsByClassName("swiper-slide");
  for (const slide of slides) {
    slide.addEventListener("click", () => {
      const { className } = slide;
      if (className.includes("swiper-slide-next")) {
        swiper.slideNext();
      } else if (className.includes("swiper-slide-prev")) {
        swiper.slidePrev();
      }
    });
  }
  
  function resizeTextToFit() {
    const quoteEls = document.getElementsByClassName('quote');
    for (const el of quoteEls) {
      el.style.width = el.offsetWidth;
      el.style.height = el.offsetHeight;
    }
    textFit(quoteEls, { maxFontSize: 14 });
  }
  resizeTextToFit();
  addEventListener("resize", (event) => {
    resizeTextToFit();
  });

  AOS.init();

  </script>
  <?php require "footer.php"; ?>
</body>
</html>