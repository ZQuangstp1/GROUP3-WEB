<head>
  <?php
  require_once "search.php";
  ?>
<script type="text/javascript" src="header.js" language="JavaScript"></script>
    <style>
  .header-container {
    justify-content: space-between;
    display: flex;
    width: 100%;
    margin: 0px;
    padding: 0;
    padding-bottom: 15px;
    background-color: #f9f2e6 ;
  }
  @media (max-width: 991px) {
    .header-container {
      max-width: 100%;
      /* flex-wrap: wrap; */
    }
  }
  .content-header {
    display: flex;
    justify-content: space-between;
    gap: 0px;
    font-size: 20px;
    color: rgba(133, 127, 127, 0.8);
    font-weight: 400;
  }
  @media (max-width: 991px) {
    .content-header {
      max-width: 100%;
      flex-wrap: wrap;
    }
  }
  .searchbar-container {
    display: flex;
    gap: 0px;
    margin: auto 0;
    padding-left: 15px;
    /* background: red */
  }
  @media (max-width: 991px) {
    .searchbar-container {
      max-width: 100%;
      /* flex-wrap: wrap; */
    }
  }
  #searchbar{
    width: 33%; 
    height: 100%; 
    float: left; 
    display: flex; 
    align-items: center;
}

#searchbar img{
    margin-left: 10%;
    width: 40%;
}
#searchInput { 
    margin-left: 8px;
    border: none; 
    outline: none; 
    background: none; 
    font-size: 14px; 
    margin-right: 5px; 
}
#searchButton { 
    background: none; 
    border: none; 
    cursor: pointer; 
}

  @media (max-width: 991px) {
    #searchInput {
      max-width: 100%;
      display: block;
      padding-left: 0;
      padding-right: 40px;
    }
    #searchbar img{
      margin-right: 50px;
      max-width: 25%
    }
  }

  .logo-container {
    /* background-color: #282828; */
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 3px;
    margin-right: 50px;
    margin-left: 20px;
    max-width: 20%;
    padding-top: 5px;
}
    @media (max-width: 991px) {
    .logo-container {
      max-width: auto;
      margin: auto;
      flex-wrap: wrap;
    }
  }
  .logo-img {
    max-width: 100%;;
    height: auto;
    display: block;
}

    @media (max-width: 991px) {
      
        .logo-img {
            margin-left: auto;
            max-width: auto;
        }   
    }
  .three-logos-container {
    justify-content: space-between;
    align-items: start;
    display: flex;
    gap: 20px;
    margin: auto 0;
    padding-right: 40px;
  }
  .three-logos-content {
    align-items: center;
    display: flex;
    flex-direction: column;
    padding: 1px 0;
  }
  .user {
    aspect-ratio: 1px;
    object-fit: auto;
    object-position: center;
    width: 18px;
    stroke-width: 1.6px;
    stroke: #282828;
    height: auto
  }
  .fav {
    aspect-ratio: 1px;
    object-fit: auto;
    object-position: center;
    width: 18px;
    fill: #282828;
    height: auto
  }
  .cart {
    aspect-ratio: 1px;
    object-fit: auto;
    object-position: center;
    width: 20px;
    /* align-self: stretch; */
    height: auto
  }

  @media screen and (max-width: 991px) {
  .content-header {
    flex-direction: column; 
    align-items: center;
  }

  .logo-container {
    justify-content: center; 
    margin: 10px auto;
    max-width: 50%;
    padding-top: 0; 
    padding-left: 10px;
    order: 1;
    /* background: red; */
    margin-right: 20px;
    margin-left: 110px
  }

  .searchbar-container {
    margin: 0;
    text-align: left; 
    padding-left: 0; 
    padding-top: 10px; 
    max-width: 100%;
    order: 2
  }

  #search img{
    max-width: 5%;
    margin-left: 5px;
  }

  #searchInput{
    max-width: 200%; 
    font-size: 14px; 
    margin-left: 2px; 
  }

  .three-logos-container {
    order: 3;
    justify-content: center;
    margin: 0 auto; 
    max-width: 100%; 
    padding-right: 0; 
    padding-top: 10px; 
    margin-right: 5px
  }

  .three-logos-content {
    display: flex;
    flex-direction: row; 
    gap: 10px; 
    align-items: center;
  }

  .user,
  .fav,
  .cart {
    width: 18px;
    padding-top: 70px;
  }
}

.searchbutton{
  display:none
}

  .three-logos-content .drop_menu {
    position: absolute;
    top: 65px;
    width: 180px;
    line-height: 45px;
    background-color: #f9f2e6;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease-in-out;
    list-style: none;
    border: 1px solid #dcceb5
  }

  .three-logos-content:hover .drop_menu {
    top: 65px;
    opacity: 1;
    visibility: visible;
    z-index: 9999;

  }

  .three-logos-content .drop_menu li a {
    width: 100%;
    display: block;
    padding: 0 0 0 15px;
    font-weight: 400;
    border-radius: 0px;
    list-style: none;
  }

  .drop_menu li {
  list-style: none;
  margin: 0;
  padding: 0;
}



      </style>
  </head>


  <body>

  <!-- HEADER -->
  <div class="header-container">
          <div class="content-header">
            <!-- THANH TÌM KIẾM -->
            <div class="searchbar-container">
            <form action="search.php" method="get">
            <div id="searchbar">
              <img src="img/Search.png" alt="" class="kinhlup">
              <input type="text" id="searchInput" name="searchInput" placeholder="Tìm sản phẩm" size="13px">
              <input class = "searchbutton" type="submit" value="Tìm kiếm"></div>
            </form>
            </div>
            <!-- LOGO -->
            <div class="logo-container">
              <a href="index.php">
                  <img loading="lazy" src="img/img3.png" class="logo-img" />
              </a>
          </div>

          <!-- BA LOGO ĐIỀU HƯỚNG -->
          </div>
          <div class="three-logos-container">
            <div class="three-logos-content">

              <a href="#" class="desktop_item">
              <img
                loading="lazy"
                src="img/login.png"
                class="user"
              />
              </a>
              <!-- <ul class="drop_menu">
                <li><a href="dangnhap.php">Đăng nhập</a></li>
                <li><a href="dangki.php">Đăng ký</a></li>
                <li><a href="dangxuat.php">Đăng xuất</a></li>
              </ul> -->
              <ul class="drop_menu">
    <?php if (isset($_SESSION['username'])): ?>
        <li><a href="TTKH.php"><?php echo $_SESSION['username']; ?></a></li>
        <li><a href="dangxuat.php">Đăng xuất</a></li>
    <?php else: ?>
        <li><a href="dangnhap.php">Đăng nhập</a></li>
        <li><a href="dangki.php">Đăng ký</a></li>
    <?php endif; ?>
</ul>
              
            </div>
            <img
              loading="lazy"
              src="img/love.png"
              class="fav"
            />
            <img
              loading="lazy"
              src="img/cart.png"
              class="cart"
            />
          </div>
        </div>
  </body>