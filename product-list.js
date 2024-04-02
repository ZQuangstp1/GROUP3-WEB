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
  
  function applyFilters() {
    // Thu thập các giá trị được chọn từ các bộ lọc
    var selectedCategories = [];
    var selectedSubcategories = [];
    var selectedDiscounts = [];
    var selectedColors = [];
    
  
    $.ajax({
        url: "index.php",
        method: "POST",
        data: {
            selected_categories: selectedCategories,
            selected_subcategories: selectedSubcategories,
            selected_discounts: selectedDiscounts,
            selected_colors: selectedColors
        },
        success: function(response) {
            // Xử lý phản hồi từ server nếu cần
        },
        error: function(xhr, status, error) {
            // Xử lý lỗi nếu có
        }
    });
   
  }


//   $(document).ready(function(){
//     $('#toggle').click(function(){
//         $('nav').slideToggle();
//     });

//     // Thêm sự kiện toggle sub-menu khi click vào tiêu đề của menu
//     $('#main-menu li').click(function(){
//         $(this).children('ul.sub-menu').slideToggle();
//         // Lấy danh mục từ tiêu đề của menu và gửi yêu cầu AJAX để cập nhật sản phẩm
//         var category = $(this).text().trim();
//         applyCategoryFilter(category);
//     });
// });