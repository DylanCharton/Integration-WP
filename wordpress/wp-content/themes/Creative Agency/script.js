let nav = document.querySelector('#header-widget');
window.onscroll = function (){
    if(document.body.scrollTop >= 50 || document.documentElement.scrollTop >= 50){
        nav.classList.add("colored-nav");
        nav.classList.remove("transparent-nav");
    } else {
        nav.classList.add("transparent-nav");
        nav.classList.remove("colored-nav");
    }
}

