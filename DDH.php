<html>
    <head> </head>
    
    <body> 
      <script>
        document.addEventListener("DOMContentLoaded", function() {
    var filterButton = document.getElementById("filterButton");
    var filterOptions = document.getElementById("filterOptions");
    
    // Bắt sự kiện click cho nút "filterButton"
    filterButton.addEventListener("click", function() {
        // Kiểm tra trạng thái hiện tại của filterOptions
        if (filterOptions.style.display === "block") {
            // Nếu filterOptions đang hiển thị, ẩn nó đi
            filterOptions.style.display = "none";
        } else {
            // Nếu filterOptions không hiển thị, hiển thị nó
            filterOptions.style.display = "block";
        }
    });
});
-
      </script>
        <div class="div" id ="DDH" style ="width : 80%;margin: 0 auto;">
            <div class="div-2">Trang chủ / Trang khách hàng</div>
            <div class="div-3" style = "font-weight: bold;">Đơn đặt hàng</div>
            <div class="div-4">
              <div class="div-5">
                <div class="column">
                  <div class="div-6">
                    <div class="div-7" onclick="window.location.href='TTKH.php'" style="cursor: pointer;" >Thông tin khách hàng</div>
                    <div class="div-8" onclick="window.location.href='SDC.php'" style="cursor: pointer;">Sổ địa chỉ</div>
                    <div class="div-9" onclick="window.location.href='DDH.php'" style="cursor: pointer;">Đơn đặt hàng</div>
                    <div class="div-10" onclick="window.location.href='YT.php'" style="cursor: pointer;">Yêu thích</div>
                  </div>
                </div>
                <div class="column-2">
                  <div class="div-12">
                    <div class="div-13">
                      <div class="div-14" style ="font-weight : bold;">Đơn hàng</div>
                      <div class="div-15">
                        <div class="search-bar">
                            <img
                              loading="lazy"
                              src="https://cdn.builder.io/api/v1/image/assets/TEMP/bd2104e238888fd04165ac334eb455e0a218aa26d758a6c01dfed80dafa35ad4?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                             
                            />
                            <input type="text" class="search-input" placeholder="Tìm kiếm đơn hàng">
                          </div>
                          <button id="filterButton" class="filter-button">
                          <img
                          loading="lazy"
                          src="e052964955380cba1e1ac5951649f84422a09835319f1a9dbda516e2355c2caf.png";
                            class = "img-2"
                            /></button>
                          </div>
                          <div id="filterOptions" class="filter-options">
                          
                            <label><input type="checkbox" name="filter" value="nearby"> Đơn hàng gần nhất</label>
                            <label><input type="checkbox" name="filter" value="delivered"> Đơn hàng đã giao</label>
                            <label><input type="checkbox" name="filter" value="undelivered"> Đơn hàng chưa giao</label>
                            <label><input type="checkbox" name="filter" value="cancelled"> Đơn hàng đã hủy</label>
                        </div>
                        
                          
                    </div>
                    <div class="div-18">
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/190006a3d3439101c0ee4b84999b823b25c34e81bb0ba5d245c81a2b54260f4a?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                        class="img-3"
                      />
                      <div class="div-19">
                        <div class="div-20">Đã Giao</div>
                        <div class="div-21">Thứ 6, 6/5/2024</div>
                      </div>
                    </div>
                    <div class="div-22">
                      <img
                        loading="lazy"
                        srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                        class="img-4"
                      />
                      <div class="div-23">
                        <div class="div-24">
                          <div class="div-25">
                            <div class="div-26">
                              Stellar Dainty Diamond Hoop E Stellar Dainty Diamond
                            </div>
                            <div class="div-27">Số lượng : 1</div>
                          </div>
                          <a href="link-trang-san-pham.html">
                          <img
                            loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d8adc9a448bed35517b7db4d2624b818bcca6fc979b827778bf76cc287dd7267?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                            class="img-5"
                          /> 
                        </a>
                        </div>
                        <div class="div-28">Size: 34</div>
                      </div>
                    </div>
                    <div class="div-29">Trả hàng trước Thứ 3, 24/5/2024</div>
                    <div class="div-30">
                      <div class="div-31">Đánh giá</div>
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/563ac7403b696614c7f28a9a20524e0dc03d34c863d5ed2059c0e61702e30c5e?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                        class="img-6"
                      />
                    </div>
                    <div class="div-32">
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/8ebe011603123613f67e0a5259a6d813b2c7eaeb27d961a357f22a20ce3d3a9c?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                        class="img-7"
                      />
                      <div class="div-33">
                        <div class="div-34">Hoàn trả</div>
                        <div class="div-35">Thứ 6, 6/5/2024</div>
                      </div>
                    </div>
                    <div class="div-36">
                      <img
                        loading="lazy"
                        srcset="https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=100 100w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=200 200w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=400 400w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=800 800w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=1200 1200w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=1600 1600w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&width=2000 2000w, https://cdn.builder.io/api/v1/image/assets/TEMP/bce43dde14fdc5f07912c2ca8a34a7bc9bd46d455728142160776ac1f821edbd?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                        class="img-8"
                      />
                      <div class="div-37">
                        <div class="div-38">
                          <div class="div-39">
                            <div class="div-40">
                              Stellar Dainty Diamond Hoop E Stellar Dainty Diamond
                            </div>
                            <div class="div-41">Số lượng : 1</div>
                          </div>
                          <a href="link-trang-san-pham.html">
                          <img
                            loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/d8adc9a448bed35517b7db4d2624b818bcca6fc979b827778bf76cc287dd7267?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                            class="img-9"
                          /> </a>
                        </div>
                        <div class="div-42">Size: 34</div>
                      </div>
                    </div>
                    <div class="div-43">Hoàn trả vào Thứ 3, 24/5/2024</div>
                    <div class="div-44">
                      <div class="div-45">Đánh giá</div>
                      <img
                        loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/563ac7403b696614c7f28a9a20524e0dc03d34c863d5ed2059c0e61702e30c5e?apiKey=eb23b2963eda46448725d8ef1c3cf67d&"
                        class="img-10"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <style>
            .div {
              display: flex;
              flex-direction: column;
              align-items: center;
              padding: 0 20px;
            }
            .div-2 {
              color: var(--Gray-1, #828282);
              text-align: center;
              align-self: stretch;
              width: 100%;
              font: 500 14px/68px Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-2 {
                max-width: 100%;
              }
            }
            .div-3 {
              color: #000;
              text-align: center;
              white-space: nowrap;
              font: 400 48px Oswald, sans-serif;
            }
            @media (max-width: 991px) {
              .div-3 {
                font-size: 40px;
                white-space: initial;
              }
            }
            .div-4 {
              margin-top: 40px;
              width: 100%;
              max-width: 1263px;
            }
            @media (max-width: 991px) {
              .div-4 {
                max-width: 100%;
              }
            }
            .div-5 {
              gap: 20px;
              display: flex;
            }
            @media (max-width: 991px) {
              .div-5 {
                flex-direction: column;
                align-items: stretch;
                gap: 0px;
              }
            }
            .column {
              display: flex;
              flex-direction: column;
              line-height: normal;
              width: 23%;
              margin-left: 0px;
            }
            @media (max-width: 991px) {
              .column {
                width: 100%;
              }
            }
            .div-6 {
              display: flex;
              flex-direction: column;
              font-size: 16px;
              color: #000;
              font-weight: 500;
              line-height: 144%;
            }
            .div-7 {
                font-family: Barlow, sans-serif;
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 14px 60px 14px 13px;
    }
    @media (max-width: 991px) {
      .div-7 {
        padding-right: 20px;
      }
    }
    .div-8 {
      font-family: Barlow, sans-serif;
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 14px 60px 14px 13px;
    }
    @media (max-width: 991px) {
      .div-8 {
        padding-right: 20px;
      }
    }
    .div-9 {
        font-family: Barlow, sans-serif;
      background-color: #fb6f92;
      justify-content: center;
      align-items: start;
      color: #fff;
      font-weight: 400;
      padding: 15px 60px 15px 13px;
    }
    @media (max-width: 991px) {
      .div-9 {
        padding-right: 20px;
      }
    }
    .div-10 {
      font-family: Barlow, sans-serif;
      background-color: #fff;
      justify-content: center;
      align-items: start;
      padding: 16px 60px 16px 13px;
    }
    @media (max-width: 991px) {
      .div-10 {
        padding-right: 20px;
      }
    }
            .column-2 {
              display: flex;
              flex-direction: column;
              line-height: normal;
              width: 77%;
              margin-left: 20px;
            }
            @media (max-width: 991px) {
              .column-2 {
                width: 100%;
              }
            }
            .div-12 {
              align-self: stretch;
              background-color: #fff;
              display: flex;
              flex-grow: 1;
              flex-direction: column;
              width: 100%;
              padding: 41px 40px;
            }
            @media (max-width: 991px) {
              .div-12 {
                max-width: 100%;
                padding: 0 20px;
              }
            }
            .div-13 {
              display: flex;
              justify-content: space-between;
              gap: 20px;
              font-weight: 400;
            }
            @media (max-width: 991px) {
              .div-13 {
                max-width: 100%;
                flex-wrap: wrap;
              }
            }
            .div-14 {
              color: #000;
              flex-grow: 1;
              flex-basis: auto;
              margin: auto 0;
              font: 24px/283% Oswald, sans-serif;
            }
            .div-15 {
              display: flex;
              padding-right: 16px;
              justify-content: space-between;
              gap: 14px;
              font-size: 13px;
              color: #9a9a9a;
            }
            @media (max-width: 991px) {
              .div-15 {
                max-width: 100%;
                flex-wrap: wrap;
              }
            }
            .search-bar {
              border: 1px solid #b7b7b7;
              background-color: #fff;
              display: flex;
              justify-content: space-between;
              gap: 10px;
              padding: 12px 15px;
            }
            .search-input {
            border: none;
            outline: none;
            flex-grow: 1;
            margin-left: 8px;
            font-size: 16px;
            }
            .filter-button{ 
              border: 1px solid #b7b7b7;
              background-color: #fff;
              display: flex;
              justify-content: space-between;
              gap: 10px;
              padding: 12px 15px;
              
               cursor: pointer; /* Con trỏ khi di chuột qua */
           }
           .filter-options {
    display: none;
    flex-wrap: wrap; /* Cho phép các tùy chọn chuyển hàng khi không còn đủ không gian */
    
    background-color: #fff;
    border: 1px solid #ccc;
    padding: 10px;
  
    margin-right: 0%;
    margin-left : auto;
}

/* Đảm bảo mỗi tùy chọn filter hiển thị trên một hàng */
.filter-options label {
    display: block;
    
}



         
            .div-17 {
              font-family: Poppins, sans-serif;
              flex-grow: 1;
              flex-basis: auto;
            }
           
            .div-18 {
              align-self: start;
              display: flex;
              margin-top: 22px;
              align-items: start;
              gap: 12px;
            }
            .img-3 {
              aspect-ratio: 1;
              object-fit: auto;
              object-position: center;
              width: 24px;
            }
            .div-19 {
              display: flex;
              flex-grow: 1;
              flex-basis: 0%;
              flex-direction: column;
            }
            .div-20 {
              color: #fb6f92;
              font: 600 15px Poppins, sans-serif;
            }
            .div-21 {
              color: #9a9a9a;
              margin-top: 7px;
              white-space: nowrap;
              font: 400 13px Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-21 {
                white-space: initial;
              }
            }
            .div-22 {
              border-radius: 5px;
              background-color: #f1f1f1;
              display: flex;
              margin-top: 18px;
              justify-content: space-between;
              gap: 14px;
              padding: 10px 33px 10px 12px;
            }
            @media (max-width: 991px) {
              .div-22 {
                max-width: 100%;
                flex-wrap: wrap;
                padding-right: 20px;
              }
            }
            .img-4 {
              aspect-ratio: 0.81;
              object-fit: auto;
              object-position: center;
              width: 63px;
            }
            .div-23 {
              display: flex;
              flex-grow: 1;
              flex-basis: 0%;
              flex-direction: column;
              margin: auto 0;
            }
            @media (max-width: 991px) {
              .div-23 {
                max-width: 100%;
              }
            }
            .div-24 {
              display: flex;
              padding-right: 80px;
              justify-content: space-between;
              gap: 20px;
            }
            @media (max-width: 991px) {
              .div-24 {
                max-width: 100%;
                flex-wrap: wrap;
                padding-right: 20px;
              }
            }
            .div-25 {
              display: flex;
              flex-direction: column;
            }
            .div-26 {
              color: #000;
              white-space: nowrap;
              font: 500 16px Oswald, sans-serif;
            }
            @media (max-width: 991px) {
              .div-26 {
                white-space: initial;
              }
            }
            .div-27 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 9px;
              font: 400 13px/131% Poppins, sans-serif;
            }
            .img-5 {
              aspect-ratio: 0.64;
              object-fit: auto;
              object-position: center;
              width: 9px;
              stroke-width: 2px;
              stroke: #222;
              align-self: end;
              margin-top: 21px;
            }
            .div-28 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 6px;
              font: 400 13px/131% Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-28 {
                max-width: 100%;
              }
            }
            .div-29 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 7px;
              font: 400 12px/142% Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-29 {
                max-width: 100%;
              }
            }
            .div-30 {
              align-self: start;
              display: flex;
              margin-top: 9px;
              padding-right: 18px;
              justify-content: space-between;
              gap: 20px;
              font-size: 12px;
              color: #6d6d6d;
              font-weight: 400;
              text-transform: capitalize;
              line-height: 142%;
            }
            .div-31 {
              font-family: Poppins, sans-serif;
              margin: auto 0;
            }
            .img-6 {
              aspect-ratio: 7.14;
              object-fit: auto;
              object-position: center;
              width: 91px;
            }
            .div-32 {
              align-self: start;
              display: flex;
              margin-top: 28px;
              gap: 10px;
            }
            .img-7 {
              aspect-ratio: 1;
              object-fit: auto;
              object-position: center;
              width: 24px;
              align-self: start;
            }
            .div-33 {
              display: flex;
              flex-grow: 1;
              flex-basis: 0%;
              flex-direction: column;
            }
            .div-34 {
              color: #fb6f92;
              font: 600 15px Poppins, sans-serif;
            }
            .div-35 {
              color: #9a9a9a;
              margin-top: 8px;
              white-space: nowrap;
              font: 400 13px Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-35 {
                white-space: initial;
              }
            }
            .div-36 {
              border-radius: 5px;
              background-color: #f1f1f1;
              display: flex;
              margin-top: 17px;
              justify-content: space-between;
              gap: 14px;
              padding: 10px 33px 10px 12px;
            }
            @media (max-width: 991px) {
              .div-36 {
                max-width: 100%;
                flex-wrap: wrap;
                padding-right: 20px;
              }
            }
            .img-8 {
              aspect-ratio: 0.81;
              object-fit: auto;
              object-position: center;
              width: 63px;
            }
            .div-37 {
              display: flex;
              flex-grow: 1;
              flex-basis: 0%;
              flex-direction: column;
              margin: auto 0;
            }
            @media (max-width: 991px) {
              .div-37 {
                max-width: 100%;
              }
            }
            .div-38 {
              display: flex;
              padding-right: 80px;
              justify-content: space-between;
              gap: 20px;
            }
            @media (max-width: 991px) {
              .div-38 {
                max-width: 100%;
                flex-wrap: wrap;
                padding-right: 20px;
              }
            }
            .div-39 {
              display: flex;
              flex-direction: column;
            }
            .div-40 {
              color: #000;
              white-space: nowrap;
              font: 500 16px Oswald, sans-serif;
            }
            @media (max-width: 991px) {
              .div-40 {
                white-space: initial;
              }
            }
            .div-41 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 9px;
              font: 400 13px/131% Poppins, sans-serif;
            }
            .img-9 {
              aspect-ratio: 0.64;
              object-fit: auto;
              object-position: center;
              width: 9px;
              stroke-width: 2px;
              stroke: #222;
              align-self: end;
              margin-top: 21px;
            }
            .div-42 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 6px;
              font: 400 13px/131% Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-42 {
                max-width: 100%;
              }
            }
            .div-43 {
              color: #6d6d6d;
              text-transform: capitalize;
              margin-top: 7px;
              font: 400 12px/142% Poppins, sans-serif;
            }
            @media (max-width: 991px) {
              .div-43 {
                max-width: 100%;
              }
            }
            .div-44 {
              align-self: start;
              display: flex;
              margin-top: 10px;
              padding-right: 18px;
              justify-content: space-between;
              gap: 20px;
              font-size: 12px;
              color: #6d6d6d;
              font-weight: 400;
              text-transform: capitalize;
              line-height: 142%;
            }
            .div-45 {
              font-family: Poppins, sans-serif;
              margin: auto 0;
            }
            .img-10 {
              aspect-ratio: 7.14;
              object-fit: auto;
              object-position: center;
              width: 91px;
            }
          </style>
          
    </body>
</html>