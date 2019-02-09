var toggle = false; 
var elem = document.getElementById("sidemenu");
function openMenu() {
    var pos = 13;
    var id = setInterval(frame, 3);
    function frame() {
        if (pos == 0) {
            clearInterval(id);
        } else {
            if(pos > 0.1){
                pos -= 0.1;
                elem.style.right = pos + 'em';
            }
        }
    }
}
function closeMenu() {
    var pos = 0;
    var id = setInterval(frame, 3);
    function frame() {
        if (pos == 13) {
            clearInterval(id);
        } else {
            if(pos < 13){
                pos += 0.1;
                elem.style.right = pos + 'em';
            }
        }
    }
}
function menuToggle(){
    if(toggle == false){
        openMenu();
        toggle = !toggle;
    }else if(toggle == true) {
        closeMenu();
        toggle = !toggle;
    }
}