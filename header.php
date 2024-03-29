<head>
    <style>
  .header-container {
    justify-content: space-between;
    display: flex;
    width: 100%;
    margin: 0px;
    padding-bottom: 15px;
  }
  @media (max-width: 991px) {
    .header-container {
      max-width: 100%;
      flex-wrap: wrap;
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
  }
  @media (max-width: 991px) {
    .searchbar-container {
      max-width: 100%;
      flex-wrap: wrap;
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
    margin-left: 0;
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
            max-width: auto; /* Adjusting width for smaller screens */
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
  }
  .fav {
    aspect-ratio: 1px;
    object-fit: auto;
    object-position: center;
    width: 18px;
    fill: #282828;
  }
  .cart {
    aspect-ratio: 1px;
    object-fit: auto;
    object-position: center;
    width: 20px;
    align-self: stretch;
  }
    </style>
</head>
<body>
<div class="header-container">
        <div class="content-header">
          <div class="searchbar-container">
            <div id = "searchbar">
              <img src="img/Search.png" alt="" class="kinhlup">
              <input type="text" id="searchInput" placeholder="Tìm sản phẩm" size="13px">
              <button id="searchButton" onclick="search()"><i class="fas fa-search"></i></button>
          </div>
          </div>
          <div class="logo-container">
            <img
            loading="lazy"
            src="img/img3.png"
            class="logo-img"
          />
          </div>
        </div>
        <div class="three-logos-container">
          <div class="three-logos-content">
            <img
              loading="lazy"
              src="img/login.png"
              class="user"
            />
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