let nav = document.querySelector('#navTop');
window.onscroll = function (){
    if(document.body.scrollTop >= 500 || document.documentElement.scrollTop >= 500){
        nav.classList.add("colored-nav");
        nav.classList.remove("transparent-nav");
    } else {
        nav.classList.add("transparent-nav");
        nav.classList.remove("colored-nav");
    }
}