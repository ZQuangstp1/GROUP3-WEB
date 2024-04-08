
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
function addToCart() {
  // Prevent the default form submission
  event.preventDefault();
  
  // Show the popup message
  alert("Thêm giỏ hàng thành công");
  
  // Submit the form
  document.getElementById("add-to-cart-form").submit();
}
*/

// Button số lượng
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
//Button Like 
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


//Button Like comment 
document.getElementById("likeButtonComment").addEventListener("click", function() {
  var likeText = this.querySelector('.like-text');
  if (likeText.textContent === 'Like') {
      likeText.textContent = 'Liked';
      likeText.style.color = 'pink';
  } else {
      likeText.textContent = 'Like';
      likeText.style.color = ''; // Reset to default color
  }
});


//Đánh giá 

// Function to create star rating
function createStarRating(maxRating) {
  const starWrapper = document.getElementById('star-rating');
  starWrapper.innerHTML = ''; // Clear previous content

  for (let i = 1; i <= maxRating; i++) {
    const star = document.createElement('img');
    star.src = 'https://example.com/star-filled.png'; // URL to your filled star image
    star.alt = 'Star';
    star.classList.add('star');
    starWrapper.appendChild(star);
  }
}

// Function to create comment textbox and button
function createCommentBox() {
  const commentSection = document.getElementById('comment-section');
  commentSection.innerHTML = ''; // Clear previous content

  const commentTextbox = document.createElement('textarea');
  commentTextbox.placeholder = 'Add your comment here...';
  commentSection.appendChild(commentTextbox);

  const sendButton = document.createElement('button');
  sendButton.textContent = 'Send';
  sendButton.addEventListener('click', function() {
    const comment = commentTextbox.value;
    // Handle sending comment data here
    console.log('Comment:', comment);
    // You can send the comment data to your server using AJAX or any other method
    // For demonstration, I'm just logging the comment to the console
    // Reset the textarea after sending
    commentTextbox.value = '';
  });
  commentSection.appendChild(sendButton);
}

// Call the functions to create star rating and comment box
createStarRating(5); // You can pass the maximum rating as an argument
createCommentBox();

document.addEventListener("DOMContentLoaded", function() {
  const stars = document.querySelectorAll(".star-cmt");

  stars.forEach(function(star) {
    star.addEventListener("click", function() {
      const value = parseInt(star.getAttribute("data-value"));
      resetStars();
      highlightStars(value);
    });
  });

  function resetStars() {
    stars.forEach(function(star) {
      star.classList.remove("active");
    });
  }

  function highlightStars(value) {
    for (let i = 0; i < value; i++) {
      stars[i].classList.add("active");
    }
  }
});
