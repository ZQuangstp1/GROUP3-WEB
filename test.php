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
          giaiPhongBoNho($link, $result);


        } else {
            echo "Không có ID sản phẩm được cung cấp!";
        }
      }
?>  

<div class="group">                       
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
          productID = '$productId'";

      $result = chayTruyVanTraVeDL($link, $sql);

      if ($result->num_rows > 0) {
          // Duyệt qua các hàng kết quả và hiển thị dữ liệu trong HTML
          while ($row = $result->fetch_assoc()) {
              ?>
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
                                <?php echo $row['rating']; ?>
                                  <img
                                    class="star-icon6"
                                    alt=""
                                    src="./public/star6.svg"
                                  />
                                  <div class="nicolas-cage"><?php echo $row['lastname']; ?> <?php echo $row['firstname']; ?></div>
                                </div>
                              </div>
                            </div>
                            <div class="profile1">
                            <div class="profile-child"></div>
                            <div class="user">user</div>
                            </div>
          <?php
          }
      } else {
          echo "0 results";
      }
      giaiPhongBoNho($link, $result);
      ?>
</div>            
