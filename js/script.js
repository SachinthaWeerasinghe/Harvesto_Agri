
$("#dnbtn").hover(function() {
    $(this).css("background-color", "#bd2c2c");
  }, function(){
  $(this).css("background-color", "rgb(249, 42, 42)");
});

window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    const menu = document.querySelector('.men');
    menu.classList.toggle("stickymen",this.window.screenY<130);
    header.classList.toggle("sticky", window.scrollY>130);
    })
const stk = document.querySelector("header");

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
        stk.classList.add('sticky');
    }
    else {
        menuBtn.classList.remove('open')
        menuOpen = false;
        stk.classList.remove('sticky');
    }
});

const menu = document.querySelector('.men');
function menuopen(){
    menu.style.display="block";
   
    menuBtn.setAttribute('onclick','menuclose()');
}
function menuclose(){
    menu.style.display="none";
    
    menuBtn.setAttribute('onclick','menuopen()')
}