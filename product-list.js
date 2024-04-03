
// Gọi hàm adjustProductLayout khi trang được tải




// //Hàm pop-up Thêm giỏ hàng thành công 
// document.addEventListener("DOMContentLoaded", function() {
//   const addToCartBtn = document.getElementById("add-to-cart-btn");
//   const popup = document.getElementById("popup");

//   addToCartBtn.addEventListener("click", function() {
//     popup.style.display = "block";
//     popup.style.zIndex = "9999"; // Thiết lập zIndex để đảm bảo popup hiển thị trên cùng
//     setTimeout(function() {
//       popup.style.display = "none";
//     }, 2000); // 2 seconds
//   });
// });


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