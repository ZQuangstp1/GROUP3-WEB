// var imgs = document.querySelectorAll('.slider img');
// var dots = document.querySelectorAll('.dot');
// var currentImg = 0; // chỉ số của ảnh hiện tại
// const interval = 3000; // khoảng thời gian chuyển ảnh

// // Hàm chuyển ảnh khi nhấp vào chấm
// function changeSlide(n) {
//     // Ẩn tất cả các ảnh và loại bỏ lớp 'active' khỏi tất cả các chấm
//     for (var i = 0; i < imgs.length; i++) {
//         imgs[i].style.opacity = 0;
//         dots[i].classList.remove('active');
//     }

//     // Hiển thị ảnh và thêm lớp 'active' cho chấm tương ứng
//     currentImg = n;
//     imgs[currentImg].style.opacity = 1;
//     dots[currentImg].classList.add('active');
// }

// // Gắn sự kiện cho các chấm
// for (var i = 0; i < dots.length; i++) {
//     dots[i].addEventListener('click', function() {
//         var dotIndex = Array.from(dots).indexOf(this); // Lấy chỉ số của chấm được nhấp
//         changeSlide(dotIndex); // Gọi hàm changeSlide với chỉ số của chấm được nhấp
//     });
// }

// // Hàm chuyển ảnh sang trái
// function slideLeft() {
//     currentImg = (currentImg - 1 + imgs.length) % imgs.length; // Giảm chỉ số của ảnh hiện tại
//     changeSlide(currentImg); // Gọi hàm changeSlide với chỉ số mới
// }

// // Hàm chuyển ảnh sang phải
// function slideRight() {
//     currentImg = (currentImg + 1) % imgs.length; // Tăng chỉ số của ảnh hiện tại
//     changeSlide(currentImg); // Gọi hàm changeSlide với chỉ số mới
// }

// // Gắn sự kiện click cho phần tử bên trái của slider
// document.querySelector('.slider').addEventListener('click', function(event) {
//     if (event.clientX < window.innerWidth / 2) { // Kiểm tra nếu click ở bên trái slider
//         slideLeft(); // Chuyển ảnh sang trái
//     } else { // Nếu click ở bên phải slider
//         slideRight(); // Chuyển ảnh sang phải
//     }
// });

// // Hàm tự động chuyển ảnh sau mỗi khoảng thời gian
// var timer = setInterval(slideRight, interval);

// // Tạm dừng chuyển ảnh khi rê chuột vào banner
// document.querySelector('.banner-container').addEventListener('mouseenter', function() {
//     clearInterval(timer);
// });

// // Tiếp tục chuyển ảnh khi rê chuột ra khỏi banner
// document.querySelector('.banner-container').addEventListener('mouseleave', function() {
//     timer = setInterval(slideRight, interval);
// });


// // // Lấy danh sách các ảnh và chấm trong navigation-button
// // const slides = document.querySelectorAll('.slider img');
// // const dots = document.querySelectorAll('.navigation-button .dot');

// // // Khởi tạo biến index để theo dõi ảnh hiện tại
// // let currentSlide = 0;

// // // Hàm hiển thị ảnh tương ứng với chỉ số
// // function showSlide(index) {
// //   // Ẩn tất cả các ảnh
// //   slides.forEach(slide => {
// //     slide.style.display = 'none';
// //   });
// //   // Xóa lớp active khỏi tất cả các chấm
// //   dots.forEach(dot => {
// //     dot.classList.remove('active');
// //   });
// //   // Hiển thị ảnh tương ứng với chỉ số và đánh dấu chấm tương ứng là active
// //   slides[index].style.display = 'block';
// //   dots[index].classList.add('active');
// // }

// // // Hiển thị ảnh đầu tiên khi trang được tải
// // showSlide(currentSlide);

// // // Sự kiện khi click vào chấm
// // dots.forEach((dot, index) => {
// //   dot.addEventListener('click', () => {
// //     // Hiển thị ảnh tương ứng với chỉ số của chấm
// //     showSlide(index);
// //     // Cập nhật chỉ số hiện tại
// //     currentSlide = index;
// //   });
// // });

// // var slides = document.querySelectorAll('.slide');
// // var btns = document.querySelectorAll('btn');
// // let currentSlide = 1;

// // var manualNav = function(manual){
// //     slides.forEach((slide) => {
// //         slide.classList.remove('active');
// //         btns.forEach((btn) => {
// //             btn.classList.remove('active');
// //         });
// //     });
// //     slides[manual].classList.add('active');
// //     btns[manual].classList.add('active');
// // }

// // btns.forEach((btn, i) => {
// //     btn.addEventListener("click", () => {
// //         manualNav(i);
// //         currentSlide = i;
// //     });
// // });

// // var repeat= function (activeClass){
// //     let active= document.getElementsByClassName('active');
// //     let i = 1;

// //     var repeater = () => {
// //         setTimeout(function(){
// //             [...active].forEach((activeSlide) => {
// //                 activeSlide.classList.remove('active')
// //             })
// //             slides[i].classList.add('active');
// //             btns[i].classList.add('active');
// //             i++;

// //             if(slides.length==i){
// //                 i = 0;
// //             }

// //             if(i >= slides.length){
// //                 return;
// //             }
// //             repeater();

// //         }, 10000);
// //     }
// //     repeat();
// //     }
// //     repeat();

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function currentSlide(n){
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("dot");
    if(n > slides.length) { slideIndex = 1 }
    if(n < 1) {slideIndex = slides.length}
    for(i = 0; i <  slides.length; i++){
        slides[i].style.display = "none";
    }
    for(i=0; i< dots.length; i++){
        dots[i].className= dots[i].className.replace("active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += "active";
}