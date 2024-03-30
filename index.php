<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link href="product-list.css" rel="stylesheet" />
    <script src="script.js"></script>
    <title>Product List</title>
  </head>

  <body>
  <?php
          require_once "db_module.php";
          $link = null;
          taoKetNoi($link);
?>
    <div class="container">
      <div class="head-content">
        <div class="head-content__sidebar">
          <p>Home</p>
          <div class="sidebar-section">
            <button class="sidebar-title" onclick="toggleFilter('category')">- Danh mục</button>
            
            <div class="filter-content collapsed" id="category">
            <?php
            $sql = "SELECT * FROM Category"; // Truy vấn để lấy danh sách các danh mục
            $result = chayTruyVanTraVeDL($link, $sql);

            // Kiểm tra nếu có kết quả trả về từ truy vấn
            if ($result && mysqli_num_rows($result) > 0) {
                // Duyệt qua từng hàng kết quả
                while ($row = mysqli_fetch_assoc($result)) {
                    // Hiển thị checkbox cho từng danh mục
                    echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value="' . $row['categoryID'] . '" id="category' . $row['categoryID'] . '">';
                    echo '<label class="form-check-label" for="category' . $row['categoryID'] . '">' . $row['categoryName'] . '</label>';
                    echo '</div>';
             }
            }
          ?>
            </div>
            <hr />
            <button class="sidebar-title" onclick="toggleFilter('subcategory')">- Danh mục phụ</button>
            
            <div class="filter-content collapsed" id="subcategory">
            <?php
            $sql = "SELECT * FROM Subcategory"; // Truy vấn để lấy danh sách các subcategory
            $result = chayTruyVanTraVeDL($link, $sql);
            
            // Kiểm tra nếu có kết quả trả về từ truy vấn
            if ($result && mysqli_num_rows($result) > 0) {
                // Duyệt qua từng hàng kết quả
                while ($row = mysqli_fetch_assoc($result)) {
                    // Hiển thị checkbox cho từng subcategory
                    echo '<div class="form-check">';
                    echo '<input class="form-check-input" type="checkbox" value="' . $row['subcategoryID'] . '" id="subcategory' . $row['subcategoryID'] . '">';
                    echo '<label class="form-check-label" for="subcategory' . $row['subcategoryID'] . '">' . $row['subcategoryName'] . '</label>';
                    echo '</div>';
                }
            }
            ?>
            </div>
            <hr/>
            <button class="sidebar-title" onclick="toggleFilter('sale')">- Giảm giá</button>
            
            <div class="filter-content collapsed" id="sale">
            <?php
              $sql = "SELECT distinct
                          p.discountID,
                          CONCAT(FORMAT(d.discountAmount * 100, 0), '%') AS discountPercentage
                      FROM 
                          product p
                      JOIN
                          discount d ON p.discountID = d.discountID
                      WHERE 
                      d.discountID IS NOT NULL AND d.discountAmount IS NOT NULL";

              $result = chayTruyVanTraVeDL($link, $sql);

              if ($result && mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="form-check">';
                      echo '<input class="form-check-input" type="checkbox" value="' . $row['discountID'] . '" id="discount' . $row['discountID'] . '">';
                      echo '<label class="form-check-label" for="discount' . $row['discountID'] . '">' . $row['discountPercentage'] . '</label>';
                      echo '</div>';
                  }
              }
              ?>
            </div>
            <hr />
          </div>
          <div class="sidebar-section">
            <button  class="sidebar-title" onclick="toggleFilter('price')">- Giá</button >
            <div class="filter-content collapsed" id="price">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                < 500.000(70)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                500.000 - 1.000.000(206)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label" for="flexCheckChecked">
                1.000.000 - 1.500.000(206)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                1.500.000 - 2.000.000 (212)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                > 2.000.0000(181)
              </label>
            </div>

            <div class="form-check form-check-price-last">
              <p>Khoảng Giá</p>
              <div class="d-inline-flex">
                <input
                  type="text"
                  class="form-control price-range-input"
                  value="Min"
                />
                <p style="margin-left: 5px; margin-right: 5px">-</p>
                <input
                  type="text"
                  class="form-control price-range-input"
                  value="Max"
                />
                <button
                  style="margin-left: 5px; border: 1px solid #000000"
                  type="button"
                  class="btn"
                >
                  >
                </button>
              </div>
            </div>
          </div>
          </div>
          <hr />

         <div class="sidebar-section">
          <button  class="sidebar-title" onclick="toggleFilter('color')">- Màu</button >
          <div class="filter-content collapsed" id="color">
            <div class="d-inline-flex sidebar-color-radio">
            <?php

            $sql = "SELECT distinct color FROM Product"; 
              $result = chayTruyVanTraVeDL($link, $sql);

              // Mảng chứa mã màu tương ứng với các giá trị của cột color
              $colorCodes = array(
                  "Vàng" => "#ffd700",    // Mã màu vàng
                  "Bạc" => "#c0c0c0",     // Mã màu bạc
                  "Không" => "#ffffff" // Mã màu trắng (không màu)
              );

              if ($result && mysqli_num_rows($result) > 0) {
                // Duyệt qua từng hàng kết quả
                echo '<form method="POST">';
                while ($row = mysqli_fetch_assoc($result)) {
                    // Lấy mã màu tương ứng từ mảng $colorCodes
                    $colorCode = isset($colorCodes[$row['color']]) ? $colorCodes[$row['color']] : "#000000"; // Mặc định là màu đen nếu không tìm thấy mã màu
            
                    // Hiển thị checkbox cho mỗi màu trên một dòng
                    echo '<div>';
                    echo '<label>';
                    echo '<input type="checkbox" class="form-check-input" name="selected_colors[]" value="' . $row['color'] . '" style="margin-right: 5px;">';
                    echo '<div style="width: 20px; height: 20px; border-radius: 50%; background-color: ' . $colorCode . '; display: inline-block; margin-right: 5px;"></div>';
                    echo $row['color'];
                    echo '</label>';
                    echo '</div>';
                }
                echo '</form>';
            }
            ?>
            </div>
          </div>
            <hr />
          </div>

          <div class="sidebar-section">
            <button  class="sidebar-title" onclick="toggleFilter('size')">- Kích cỡ</button >
            <div class="filter-content collapsed" id="size">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                XXS(49)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                XS(1.285)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="flexCheckChecked"
                checked
              />
              <label class="form-check-label" for="flexCheckChecked">
                S(21.564)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                32(1)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""  
              />
              <label class="form-check-label" for="flexCheckDefault">
                M(25.673)
              </label>
            </div>

            <div class="form-check form-check-price-last">
              <label class="form-check-label" style="color: #b68888">
                MORE
              </label>
            </div>
          </div>
        </div>
        </div>

        <div class="head-content__product-list">
          <div class="row">
          <div class="col-6 px-0" style="margin-top: 20px;"> 
             <p><?php 
                   $sql = "SELECT * FROM product WHERE status = 'Còn hàng'";
                   $result = chayTruyVanTraVeDL($link, $sql);
                   $num_items = mysqli_num_rows($result);
                  echo "Tìm thấy ".$num_items . " sản phẩm"; ?></p>
          </div>
            <div class="col-6 d-flex justify-content-end">
              <select
                class="form-select"
                aria-label="Default select example"
                style="width: 353px"
              >
                <option selected>Giá (Tăng dần)</option>
                <option selected>Giá (Giảm dần)</option>
              </select>
            </div>
          </div>
          <?php
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
            p.status = 'Còn hàng'";

          $result = chayTruyVanTraVeDL($link, $sql);
          ?>

          <div class="product-container row d-flex flex-wrap mt-3">
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
                  ?>
                  <div class="product-info d-block">
                      <?php if (!empty($row['discountPercentage'])) { ?>
                          <div class="product-discount"><?php echo $row['discountPercentage']; ?></div>
                      <?php } ?>
                      <img src="<?php echo $row['image']; ?>" alt="" />
                      <div class="product-content">
                          <p class="text-center product-title"><?php echo $row['productName']; ?></p>
                          <p class="text-center product-desc"><?php echo $row['subcategoryName'] . ' | ' . $row['categoryName']; ?></p>
                          <p class="text-center product-price"><?php echo $row['formattedUnitPrice']; ?></p>
                      </div>
                  </div>
              <?php
              }
              ?>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
