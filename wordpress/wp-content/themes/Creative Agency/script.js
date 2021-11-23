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


// let headerNav = document.querySelector('#header-widget > div >  nav');
// headerNav.classList.add("navbar","navbar-expand-lg");

// let btnMenu = document.createElement('button');
// btnMenu.classList.add("navbar-toggler");
// btnMenu.setAttribute("type","button");
// btnMenu.setAttribute("data-bs-toggle","collapse");
// btnMenu.setAttribute("data-bs-target","#navbarNavAltMarkup");
// btnMenu.setAttribute("aria-controls","navbarNavAltMarkup");
// btnMenu.setAttribute("aria-expanded","false");
// btnMenu.setAttribute("aria-label","#Toggle navigation");

// let spanBtn = document.createElement('span');
// spanBtn.classList.add("navbar-toggler-icon");

// let divContainer = document.createElement('div');
// divContainer.classList.add("collapse", "navbar-collapse")
// divContainer.setAttribute("id","navbarNav");

// let navUl = document.querySelector('#header-widget > div >  nav > ul');
// navUl.classList.add("navbar-nav");

// let navLi = document.querySelector('#header-widget > div >  nav > ul > li');
// navLi.classList.add("nav-item");

// let navA = document.querySelector('#header-widget > div >  nav > ul > li > a');
// navA.classList.add("nav-link","active");


// navLi.appendChild(navA);
// navUl.appendChild(navLi);
// btnMenu.appendChild(spanBtn);
// divContainer.appendChild(navUl);
// headerNav.appendChild(divContainer);
// headerNav.appendChild(btnMenu);