document.addEventListener("DOMContentLoaded", function() {
  // Hàm này sẽ được gọi khi trang HTML đã được tải hoàn toàn và cấu trúc DOM đã sẵn sàng.
  adjustProductLayout();
});

function adjustProductLayout() {
  // Lấy kích thước cửa sổ hiện tại
  const windowWidth = window.innerWidth;

  // Lấy kích thước của sidebar
  const sidebarWidth = document.querySelector('.head-content__sidebar').offsetWidth;

  // Lấy kích thước của mỗi sản phẩm
  const productWidth = document.querySelector('.product-info').offsetWidth;

  // Tính toán số lượng sản phẩm hiển thị trên mỗi dòng
  let productsPerRow = Math.floor((windowWidth - sidebarWidth) / productWidth);

  // Nếu số lượng sản phẩm trên mỗi dòng lớn hơn số lượng sản phẩm có thể hiển thị, giảm số lượng sản phẩm trên mỗi dòng xuống 1
  if (productsPerRow > 4) {
    productsPerRow = 4;
  }

  // Cập nhật CSS cho sản phẩm
  document.querySelectorAll('.product-info').forEach(product => {
    product.style.maxWidth = `${100 / productsPerRow}%`;
  });
}

// Gọi hàm adjustProductLayout khi trang được tải

function toggleFilter(filterId) {
  const filterContent = document.getElementById(filterId);
  filterContent.classList.toggle('collapsed');

}

// Hàm tăng giảm số lượng 
document.addEventListener("DOMContentLoaded", function() {
  const btnMinus = document.querySelector(".btn-minus");
  const btnPlus = document.querySelector(".btn-plus");
  const inputQuantity = document.querySelector(".input-quantity");

  btnMinus.addEventListener("click", function() {
    let currentValue = parseInt(inputQuantity.value);
    if (currentValue > 1) {
      inputQuantity.value = currentValue - 1;
    }
  });

  btnPlus.addEventListener("click", function() {
    let currentValue = parseInt(inputQuantity.value);
    inputQuantity.value = currentValue + 1;
  });
});

//Hàm pop-up Thêm giỏ hàng thành công 
document.addEventListener("DOMContentLoaded", function() {
  const addToCartBtn = document.getElementById("add-to-cart-btn");
  const popup = document.getElementById("popup");

  addToCartBtn.addEventListener("click", function() {
    popup.style.display = "block";
    popup.style.zIndex = "9999"; // Thiết lập zIndex để đảm bảo popup hiển thị trên cùng
    setTimeout(function() {
      popup.style.display = "none";
    }, 2000); // 2 seconds
  });
});


