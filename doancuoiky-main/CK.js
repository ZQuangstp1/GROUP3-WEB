function saveData() {
  var hoten = document.getElementById("name").value;
  var congty = document.getElementById("cty").value;
  var diachi = document.getElementById("address").value;
  var diachiDuong = document.getElementById("address-con").value;
  var thanhpho = document.getElementById("city").value;
  var quocgia = document.getElementById("country").value;

  sessionStorage.hoten = hoten;
  sessionStorage.congty = congty;
  sessionStorage.diachi = diachi;
  sessionStorage.diachiDuong = diachiDuong;
  sessionStorage.thanhpho = thanhpho;
  sessionStorage.quocgia = quocgia;
}
function init() {
  var dnForm = document.getElementById("dangnhapForm");
  dnForm.onsubmit = saveData;
}
function goback() {
  history.back();
}
window.onload = init;