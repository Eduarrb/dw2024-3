// DOM -> document object model
// JS -> key sensitive
// window
    // document

let welcomeNav = document.querySelector('.nav__welcome');
let searchNav = document.querySelector('.nav__search');
// console.log(searchNav);


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

