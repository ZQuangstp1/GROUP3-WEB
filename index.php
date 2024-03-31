<?php
require_once "db_module.php";
$link = null;
taoKetNoi($link);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="product-list.css" rel="stylesheet">
</head>
<body>
<form action="?opt=applyFilters" method="POST">
    <div class="container">
        <div class="head-content">
            <!-- Sidebar -->
            <div class="head-content__sidebar">
                <!-- Danh mục -->
                <div class="sidebar-section" style="margin-top: 50px;">
                    <button type="button" class="sidebar-title" onclick="toggleFilter('category')">- Danh mục</button>
                    <div class="filter-content collapsed" id="category">
                        <?php
                        $sql = "SELECT * FROM Category"; // Truy vấn để lấy danh sách các danh mục
                        $result = chayTruyVanTraVeDL($link, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="form-check">';
                                echo '<input type="checkbox" class="form-check-input" name="selected_categories[]" value="' . $row['categoryID'] . '">';
                                echo '<label class="form-check-label" for="category' . $row['categoryID'] . '">' . $row['categoryName'] . '</label>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <hr />
                    <!-- Danh mục phụ -->
                    <button type="button" class="sidebar-title" onclick="toggleFilter('subcategory')">- Danh mục phụ</button>
                    <div class="filter-content collapsed" id="subcategory">
                        <?php
                        $sql = "SELECT * FROM Subcategory"; // Truy vấn để lấy danh sách các subcategory
                        $result = chayTruyVanTraVeDL($link, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="form-check">';
                                echo '<input class="form-check-input" type="checkbox" value="' . $row['subcategoryID'] . '" name="selected_subcategories[]" id="subcategory' . $row['subcategoryID'] . '">';
                                echo '<label class="form-check-label" for="subcategory' . $row['subcategoryID'] . '">' . $row['subcategoryName'] . '</label>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <hr />
                    <!-- Giảm giá -->
                    <button type="button" class="sidebar-title" onclick="toggleFilter('sale')">- Giảm giá</button>
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
                                echo '<input class="form-check-input" type="checkbox" value="' . $row['discountID'] . '" name="selected_discounts[]" id="discount' . $row['discountID'] . '">';
                                echo '<label class="form-check-label" for="discount' . $row['discountID'] . '">' . $row['discountPercentage'] . '</label>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <hr />
                    <!-- Giá -->
                    <button type="button" class="sidebar-title" onclick="toggleFilter('price')">- Giá</button>
                    <div class="filter-content collapsed" id="price">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                            < 500.000
                        </label>
                        </div>
                        <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                            500.000 - 1.000.000
                        </label>
                        </div>
                        <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                          
                        />
                        <label class="form-check-label" for="flexCheckChecked">
                            1.000.000 - 1.500.000
                        </label>
                        </div>
                        <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                            1.500.000 - 2.000.000
                        </label>
                        </div>
                        <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                        />
                        <label class="form-check-label" for="flexCheckDefault">
                            > 2.000.0000
                        </label>
                        </div>
                    </div>
                    </div>
                    <hr />
                    <!-- Màu -->
                    <button type="button" class="sidebar-title" onclick="toggleFilter('color')">- Màu</button>
                    <div class="filter-content collapsed" id="color">
                        <?php
                        $sql = "SELECT distinct color FROM Product";
                        $result = chayTruyVanTraVeDL($link, $sql);

                        $colorCodes = array(
                            "Vàng" => "#ffd700",
                            "Bạc" => "#c0c0c0",
                            "Không" => "#ffffff"
                        );

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $colorCode = isset($colorCodes[$row['color']]) ? $colorCodes[$row['color']] : "#000000";
                                echo '<div>';
                                echo '<label>';
                                echo '<input type="checkbox" class="form-check-input" name="selected_colors[]" value="' . $row['color'] . '" style="margin-right: 5px;">';
                                echo '<div style="width: 20px; height: 20px; border-radius: 50%; background-color: ' . $colorCode . '; display: inline-block; margin-right: 5px;"></div>';
                                echo $row['color'];
                                echo '</label>';
                                echo '</div>';
                            }
                        }
                        ?>
                    </div>
                    <hr />
                    <input type="hidden" name="apply_filters" id="apply_filters" value="0">
                  <input type="submit" class="apply-filters-button" value="Áp dụng bộ lọc" onclick="document.getElementById('apply_filters').value = '1';">
                </div>
        
</form>

<!-- Hiển thị sản phẩm -->
<div class="head-content__product-list">
    <!-- Hiển thị số sản phẩm tìm thấy -->
    <div class="row">
        <div class="col-6 px-0" style="margin-top: 20px;"> 
            <p>
                <?php 
                $sql = "SELECT * FROM product WHERE status = 'Còn hàng'";
                $result = chayTruyVanTraVeDL($link, $sql);
                $num_items = mysqli_num_rows($result);
                echo "Tìm thấy ".$num_items . " sản phẩm"; ?>
            </p>
        </div>
        <!-- Dropdown sắp xếp -->
        <div class="col-6 d-flex justify-content-end">
            <select class="form-select" aria-label="Default select example" style="width: 353px">
                <option selected>Giá (Tăng dần)</option>
                <option selected>Giá (Giảm dần)</option>
            </select>
        </div>
    </div>

    <!-- Hiển thị danh sách sản phẩm -->
    <div class="product-container row d-flex flex-wrap mt-3">
        <?php
            applyFilters();

            if(isset($_POST['apply_filters'])) {
                applyFilters();
            }
        function applyFilters(){
            global $link;
            $apply_filters = isset($_POST['apply_filters']) ? $_POST['apply_filters'] : '0';
            if ($apply_filters == '0') {
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
          } else {
            // Thu thập các giá trị bộ lọc từ người dùng
            $selectedCategories = isset($_POST['selected_categories']) ? $_POST['selected_categories'] : [];
            $selectedSubcategories = isset($_POST['selected_subcategories']) ? $_POST['selected_subcategories'] : [];
            $selectedDiscounts = isset($_POST['selected_discounts']) ? $_POST['selected_discounts'] : [];
            $selectedColors = isset($_POST['selected_colors']) ? $_POST['selected_colors'] : [];

            // Xây dựng điều kiện WHERE cho câu truy vấn SQL
            $whereClause = '';
            if (!empty($selectedCategories)) {         
                $whereClause .= " AND sc.categoryID  IN ('" . implode("','", $selectedCategories) . "')";
            }
            if (!empty($selectedSubcategories)) {
                $whereClause .= " AND p.subcategoryID IN ('" . implode("','", $selectedSubcategories) ."')";
            }
            if (!empty($selectedDiscounts)) {
                $whereClause .= " AND p.discountID IN ('" . implode("','", $selectedDiscounts) . "')";
            }
            if (!empty($selectedColors)) {
                $whereClause .= " AND color IN ('" . implode("','", $selectedColors) . "')";
            }

            // Xây dựng câu truy vấn SQL với điều kiện bộ lọc
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
                        p.status = 'Còn hàng'
                        AND 1 = 1 $whereClause"; // 1=1 để dễ dàng thêm các điều kiện WHERE
            $result = chayTruyVanTraVeDL($link, $sql);
          }

          if ($result && mysqli_num_rows($result) > 0) {
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
        }
        }
        ?>
    </div>
</div>

<!-- Scripts -->
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
