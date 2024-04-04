<head>
<script type="text/javascript" src="header.js" language="JavaScript"></script>
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
    flex-direction: column; /* Chuyển hướng layout thành dọc */
    align-items: center; /* Canh giữa nội dung */
  }

  .logo-container {
    justify-content: center; /* Center the logo */
    margin: 10px auto; /* Adjust margin */
    max-width: 50%; /* Adjusting width for smaller screens */
    padding-top: 0; /* Remove top padding */
    padding-left: 10px;
    order: 1;
    /* background: red; */
    margin-right: 20px;
    margin-left: 110px
  }

  .searchbar-container {
    margin: 0; /* Center the search bar */
    text-align: left; /* Center the contents */
    padding-left: 0; /* Remove left padding */
    padding-top: 10px; /* Add top padding */
    max-width: 100%;
    order: 2
  }

  #search img{
    max-width: 5%;
    margin-left: 5px;
  }

  #searchInput{
    max-width: 200%; /* Adjust max width of search input */
    font-size: 14px; /* Adjust font size of search input */
    margin-left: 2px; /* Add margin to the left of search input */
  }

  .three-logos-container {
    order: 3;
    justify-content: center; /* Center the logos */
    margin: 0 auto; /* Center the container */
    max-width: 100%; /* Adjusting width for smaller screens */
    padding-right: 0; /* Remove right padding */
    padding-top: 10px; /* Add top padding */
    margin-right: 5px
  }

  .three-logos-content {
    display: flex;
    flex-direction: row; /* Align logos in a row */
    gap: 10px; /* Add gap between logos */
    align-items: center; /* Center the logos vertically */
  }

  .user,
  .fav,
  .cart {
    width: 18px; /* Adjust width of icons */
    padding-top: 70px;
  }
}
    </style>
</head>
<body>
<div class="header-container">
        <div class="content-header">
          <div class="searchbar-container">
            <div id = "searchbar">
              <img src="img/Search.png" alt="" class="kinhlup" >
              <input type="text" id="searchInput" placeholder="Tìm sản phẩm" onkeypress="searchOnEnter(event)" size="13px">
              <button id="searchButton" onclick="search()"></button>
          </div>
          </div>
          <div class="logo-container">
            <a href="index.php">
                <img loading="lazy" src="img/img3.png" class="logo-img" />
            </a>
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