<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="menu.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <nav>
      <div class="wrapper">
        <input type="radio" name="slide" id="menu_btn" /><input type="radio" name="slide" id="cancel_btn" />
        <ul class="nav_links">
          <li ><a href="index.php">Trang chủ</a></li>
          
          <li>
            <a href="product-list.php" class="desktop_item">Sản phẩm</a>
            <input type="checkbox" id="showMega" />
            <label for="showMega" class="mobile_item">Sản phẩm</label>
            <div class="mega_box">
              <div class="content">
                <div class="row">
                  <header><a href="product-list.php?category=C001">LẮC</a></header>
                  
                  <ul class="mega_links first_links">
                    <li><a href="product-list.php?subcategory=SC001">Vòng bạc</a></li>
                    <li><a href="product-list.php?subcategory=SC002">Lắc tay bạc</a></li>
                    <li><a href="product-list.php?subcategory=SC003">Lắc chân bạc</a></li>
                    <li><a href="product-list.php?subcategory=SC004">Charm bạc</a></li>
                  </ul>
                </div>
                <!--  -->
                <!--  -->
                <div class="row">
                  <header><a href="product-list.php?category=C002">MẶT DÂY CHUYỀN</a></header>
                  <ul class="mega_links">
                    <li><a href="product-list.php?subcategory=SC005">Mặt dây chuyền bạc</a></li>
                  </ul>
                </div>
                <!--  -->
                <!--  -->
                <div class="row">
                  <header><a href="product-list.php?category=C003">BÔNG TAI</a></header>
                  <ul class="mega_links">
                    <li><a href="product-list.php?subcategory=SC006">Bông tai treo</a></li>
                    <li><a href="product-list.php?subcategory=SC007">Bông tai xỏ lỗ</a></li>
                  </ul>
                </div>
                <!--  -->
                <!--  -->
                <!--  -->
                <div class="row">
                    <header><a href="product-list.php?category=C004">DÂY CHUYỀN</a></header>
                    <ul class="mega_links">
                      <li><a href="product-list.php?subcategory=SC008">Dây chuyền bạc</a></li>
                      <li><a href="product-list.php?subcategory=SC009">Dây chuyền vàng</a></li>
                    </ul>
                  </div>
                  <!--  -->
                <!--  -->
                <div class="row">
                    <header><a href="product-list.php?category=C005">NHẪN</a></header>
                    <ul class="mega_links">
                      <li><a href="product-list.php?subcategory=SC010">Nhẫn bạc</a></li>
                      <li><a href="product-list.php?subcategory=SC011">Nhẫn vàng</a></li>
                    </ul>
                  </div>
                  <!--  -->
                <!--  -->
                <div class="row">
                    <header><a href="product-list.php?category=C006">PHỤ KIỆN RỜI</a></header>
                    <ul class="mega_links">
                      <li><a href="product-list.php?subcategory=SC012">Hộp đựng trang sức</a></li>
                      <li><a href="product-list.php?subcategory=SC013">Dụng cụ vệ sinh</a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </li>
          <li><a href="#">Quà tặng</a></li>
          <li><a href="#">Thông tin chung</a></li>
        </ul>
        <label for="menu_btn" class="btn menu_btn">
          <i class="fas fa-bars"></i>
        </label>
      </div>
    </nav>
  </body>
</html>