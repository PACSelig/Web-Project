var toggle = false;
var elem = document.getElementById("menuContainer");
var body = document.getElementById("body");
var content = document.getElementsByClassName("container")[0];
var scrollPosY, scrollPosX;
function openMenu() {
  var pos = -100;
  var id = setInterval(frame, 4);
  scrollPosY = window.scrollY
  scrollPosX = window.scrollX;
  elem.style.height = "100vh";
  body.style.overflow = "hidden";
  window.scrollTo(0,0);
  function frame() {
    if (pos === 0) {
      clearInterval(id);
    } else {
      if (pos < 0) {
        pos += 1
        elem.style.left = pos + "%";
      }
    }
  }
}
function closeMenu() {
  var pos = 0;
  var id = setInterval(frame, 4);
  function frame() {
    if (pos === -100) {
      clearInterval(id);
      elem.style.height = "calc(100% - 42.5px)";
      body.style.overflow = "unset";
      window.scrollTo(scrollPosX, scrollPosY);
    } else {
      if (pos > -100) {
        pos -= 1;
        elem.style.left = pos + "%";
      }
    }
  }
}
function menuToggle() {
  if (toggle === false) {
    openMenu();
    toggle = !toggle;
  } else if (toggle === true) {
    closeMenu();
    toggle = !toggle;
  }
}