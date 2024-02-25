function init() {
  var total = document.getElementById("tonghop");
  document.getElementById("confirm").checked = true;

  if (document.getElementById("confirm").checked == true) {
    total.innerHTML = sessionStorage.hoten + "<br>" + sessionStorage.congty + "<br>" + sessionStorage.diachi + " Quan " + sessionStorage.diachiDuong + "<br>" + sessionStorage.thanhpho + "<br>" + sessionStorage.quocgia;
  }
  else {
    total.innerHTML = "?";
  }
}
function goback() {
    history.back();
}
window.onload = init;


