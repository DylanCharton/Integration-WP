let nav = document.querySelector('#navTop');
window.onscroll = function (){
    if(document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50){
        nav.classList.add("colored-nav");
        nav.classList.remove("transparent-nav");
    } else {
        nav.classList.add("transparent-nav");
        nav.classList.remove("colored-nav");
    }
}

let navLi = document.querySelectorAll("nav#navTop > li");
for( i =0; i< navLi.length ; i++ ){
    navLi[i].classList.add("nav-item");
}

let navA = document.querySelectorAll("nav#navTop > li > a");
for( i =0; i< navLi.length ; i++ ){
    navA[i].classList.add("nav-link");
}

let btNav = document.getElementById("btNav");

btNav.addEventListener("click", function() {
    document.getElementById("navTop").style.backgroundColor = "#222222";
  });