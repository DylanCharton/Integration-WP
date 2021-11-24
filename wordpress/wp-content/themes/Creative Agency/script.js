let nav = document.querySelector('#navTop'); 
window.onscroll = function (){
    if(document.body.scrollTop >= 1 || document.documentElement.scrollTop >= 1){
        nav.classList.add("colored-nav");
    } else {
        nav.classList.remove("colored-nav");
    }
}

let divColor = document.getElementById("navTop");
let btNav = document.querySelector("#")
btNav.addEventListener("click", function() {
    divColor.classList.add("colored-nav");
    document.body.style.overflow = "hidden";
});


let navLi = document.querySelectorAll("nav#navTop > li");
for( i =0; i< navLi.length ; i++ ){
    navLi[i].classList.add("nav-item");
}

let navA = document.querySelectorAll("nav#navTop > li > a");
for( i =0; i< navLi.length ; i++ ){
    navA[i].classList.add("nav-link");
}
