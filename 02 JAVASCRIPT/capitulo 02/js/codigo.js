let tareaInput = document.querySelector('.tarea');

let btn = document.querySelector('button');

let tareasUl = document.querySelector('ul');
// btn.addEventListener('click', function () {
//     console.log(this);
// }) 

btn.addEventListener('click', () => {
    console.log('hiciste clik');
    console.log(tareaInput.value);
    tareasUl.innerHTML = `<li>${tareaInput.value}</li>`;
});

