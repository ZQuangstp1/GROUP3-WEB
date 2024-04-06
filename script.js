
// Gọi hàm adjustProductLayout khi trang được tải

function toggleFilter(filterId) {
  const filterContent = document.getElementById(filterId);
  filterContent.classList.toggle('collapsed');

}

// Hàm tăng giảm số lượng 
/*
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
*/

//Hàm pop-up Thêm giỏ hàng thành công 
/*
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
*/

function totalClick(click) {
  const sum = document.getElementById('number');
  const sumValue = parseInt(sum.innerText) + click;
  console.log(sumValue + click);


  a = document.getElementById('number');
  console.log(a);

  sum.innerText = sumValue;

  //để số dương chứ không phải không âm
  if(sumValue <=1) {
    sum.innerText = 1;

    document.getElementById('input-quantity').value = 1;
  }
  else document.getElementById('input-quantity').value = sum.innerText;

}

const likeButton = document.getElementById("likeButton");
const likeBtn = document.getElementById("likeBtn");

let isLiked = false;

likeBtn.addEventListener("click", function() {
  if (!isLiked) {
    likeButton.style.backgroundColor = "pink";
    isLiked = true;
  } else {
    likeButton.style.backgroundColor = "transparent";
    isLiked = false;
  }
});



// Cấu hình biểu đồ
const ctx = document.getElementById('myChart').getContext('2d');
const chart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['1 sao', '2 sao', '3 sao', '4 sao', '5 sao'],
    datasets: [{
      label: 'Số lượng đánh giá',
      data: $ratings,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
      ],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      yAxes: [{
        ticks: {
          beginAtZero: true,
          max: $totalRatings,
          stepSize: $totalRatings / 10
        }
      }]
    }
  }
});

