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
  <?php require "main.php"; ?>
    <div class="container">
      <div class="head-content">
        <div class="head-content__sidebar">
          <p>Home</p>
          <div class="sidebar-section">
            <button class="sidebar-title" onclick="toggleFilter('category')">- Danh mục</button>
            
            <div class="filter-content collapsed" id="category">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                LẮC (50)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                MẶT DÂY CHUYỀN (102)
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
                BÔNG TAI (54)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                VÒNG CỔ (68)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                NHẪN (40)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                DÂY CHUYỀN (46)
              </label>
            </div>
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
          <button  class="sidebar-title" onclick="toggleFilter('brand')">- Thương hiệu</button >
          <div class="filter-content collapsed" id="brand">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                STATE
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                COOPER
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
                BAROOT
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                ALFANI
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                CECE
              </label>
            </div>

            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
              />
              <label class="form-check-label" for="flexCheckDefault">
                DONNA RICCO
              </label>
            </div>

            <div class="form-check form-check-price-last">
              <label class="form-check-label" style="color: #b68888">
                MORE
              </label>
            </div>
          </div>
          </div>
          <hr />

         <div class="sidebar-section">
          <button  class="sidebar-title" onclick="toggleFilter('color')">- Màu</button >
          <div class="filter-content collapsed" id="color">
            <div class="d-inline-flex sidebar-color-radio">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #000000; border-color: #000000"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="
                  background-color: #f3ece2;
                  border-color: #f3ece2;
                  border: 1px solid #9e9e9e;
                "
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #24426a; border-color: #24426a"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #18574A; border-color: #18574A"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #666689; border-color: #666689"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #c2beb6; border-color: #c2beb6"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #aaaba7; border-color: #aaaba7"
              />
            </div>

            <div class="d-inline-flex sidebar-color-radio">
              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #971e34; border-color: #971e34"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #cba13e; border-color: #cba13e"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #73513c; border-color: #73513c"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #dab1b1; border-color: #dab1b1"
              />

              <input
                class="form-check-input"
                type="radio"
                name="flexRadioDefault"
                style="background-color: #2b9fa7; border-color: #2b9fa7"
              />
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
            <div class="col-6 px-0">
              <p>51.732 ITEMS FOUND</p>
            </div>
            <div class="col-6 d-flex justify-content-end">
              <div class="d-flex align-items-center justify-content-center">
                <img
                  src="./images/List-View.png"
                  alt=""
                  style="width: 30px; height: 30px;"
                  class="mx-2"
                />
                <img
                  src="./images/Grid-View.png"
                  alt=""
                  style="width: 30px; height: 30px"
                  class="mx-2"
                />
              </div>
              <select
                class="form-select"
                aria-label="Default select example"
                style="width: 353px"
              >
                <option selected>PRICE (HIGH TO LOW)</option>
              </select>
            </div>
          </div>

          <div
            class="row d-flex flex-nowrap mt-3"
           
          >
            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-6.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-7.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-8.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-9.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>
          </div>

          <div
            class="row d-flex flex-nowrap mt-3"
        
          >
            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-6.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-7.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-8.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-9.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>
          </div>

          <div
            class="row d-flex flex-nowrap mt-3"
          >
            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-6.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-7.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-8.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-9.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>
            
          </div>

          <div
            class="row d-flex flex-nowrap mt-3"
          >
            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-6.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-7.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-8.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>

            <div class="product-info d-block">
              <div class="product-discount">-30%</div>
              <img src="./images/image-9.png" alt="" />
              <div class="product-content">
                <p class="text-center product-title">
                  14KT Yellow Gold Diamond Hoop..
                </p>
                <p class="text-center product-desc">Women | Earrings</p>
                <p class="text-center product-price">Rs. 4,554.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
