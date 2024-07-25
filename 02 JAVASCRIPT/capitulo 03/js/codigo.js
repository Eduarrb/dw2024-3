const btn = document.querySelector('button');
const popupCaja = document.querySelector('.popup-caja');
const btnClose = document.querySelector('.popup-close');

btn.addEventListener('click', () => {
    popupCaja.classList.add('mostrarCaja');
});

btnClose.addEventListener('click', () => {
    popupCaja.classList.remove('mostrarCaja');
});

popupCaja.addEventListener('click', e => {
    // console.log(e);
    if(e.target.classList.contains('popup-caja')){
        popupCaja.classList.remove('mostrarCaja');
    }
});

window.addEventListener('keyup', e => {
    // console.log(e.code);
    if(e.code === "Escape"){
        popupCaja.classList.remove('mostrarCaja');
    }
});