// DOM -> document object model
// JS -> key sensitive
// window
    // document

let welcomeNav = document.querySelector('.nav__welcome');
let searchNav = document.querySelector('.nav__search');
// console.log(searchNav);
let iconMenu = document.querySelector('.nav__menu__contenedor--iconMenu');
let menu = document.querySelector('.nav__menu__contenedor__right__box');

window.addEventListener('scroll', function(){
    // console.log('hiciste scroll');
    // console.log(scrollY);
    if (scrollY > 0) {
        // codigo
        // console.log('esconde los elementos');
        welcomeNav.classList.add('d-none');
        searchNav.classList.add('d-none');
    } else {
        //codigo
        // console.log('muestra los elementos');
        welcomeNav.classList.remove('d-none');
        searchNav.classList.remove('d-none');
    }
})

iconMenu.addEventListener('click', function(e){
    // console.log('hiciste click');
    // console.log(e);
    e.preventDefault();
    // if(menu.classList.contains('active')){

    // } else {
        
    // }
    menu.classList.toggle('active');
})