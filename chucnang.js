// chưa xong function filter
document.getElementById("filterButton").addEventListener("click", function() {
    var filterOptions = document.getElementById("filterOptions");
    if (filterOptions.style.display === "none") {
        filterOptions.style.display = "block"; // Hiển thị các checkbox
    } else {
        filterOptions.style.display = "none"; // Ẩn các checkbox
    }
});
