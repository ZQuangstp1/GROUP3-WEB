function init() {
  var firstname = document.getElementById("hovaten");
  var company = document.getElementById("tencongty");
  var address = document.getElementById("diachi");
  var city = document.getElementById("thanhpho");
  var country = document.getElementById("quocgia");

  firstname.textContent = sessionStorage.hoten;
  company.textContent = sessionStorage.congty;
  address.textContent = sessionStorage.diachi + " Quan " + sessionStorage.diachiDuong;
  city.textContent = sessionStorage.thanhpho;
  country.textContent = sessionStorage.quocgia;
}

function goback() {
  history.back();
}

window.onload = init;