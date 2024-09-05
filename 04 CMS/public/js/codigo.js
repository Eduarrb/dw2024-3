let welcomeNav = document.querySelector('.nav__welcome');
let searchNav = document.querySelector('.nav__search');
let iconMenu = document.querySelector('.nav__menu__contenedor--iconMenu');
let menu = document.querySelector('.nav__menu__contenedor__right__box');

window.addEventListener('scroll', function(){
    if (scrollY > 0) {
        welcomeNav.classList.add('d-none');
        searchNav.classList.add('d-none');
    } else {
        welcomeNav.classList.remove('d-none');
        searchNav.classList.remove('d-none');
    }
})

iconMenu.addEventListener('click', function(e){
    e.preventDefault();
    menu.classList.toggle('active');
})

