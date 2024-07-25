const tareaInput = document.querySelector('.tarea');
const btn = document.querySelector('button');
const tareasUl = document.querySelector('ul');
const alerta = document.querySelector('.alerta');

// console.log(tareasInsertadas);

// btn.addEventListener('click', function () {
//     console.log(this);
// }) 

btn.addEventListener('click', () => {
    // console.log('hiciste clik');
    // console.log(tareaInput.value);
    // tareasUl.innerHTML = `<li>${tareaInput.value}</li>`;
    // 🌟🌟 2 tipos de igualdad, la simple y la estricta
    if (tareaInput.value === ''){
        alerta.textContent = 'No debes ingresar una tarea en blanco';
    } else {
        alerta.textContent = '';
        const item = `<li>${tareaInput.value}</li>`;
        tareasUl.insertAdjacentHTML('beforeend', item);
        tareaInput.value = '';
    }
});

// 💥💥 LA MANERA INCORRECTA

// const tareasInsertadas = document.querySelectorAll('li');

// for (let i = 0; i < tareasInsertadas.length; i++){
//     // console.log(tareasInsertadas[i]);
//     tareasInsertadas[i].addEventListener('click', function(){
//         // console.log('hiciste click');
//         tareasInsertadas[i].remove();
//     })
// }


// ⚡⚡ DELEGACION DE EVENTOS

tareasUl.addEventListener('click', function(e){
    // console.log('hiciste click');
    // console.log(e.target.tagName);
    if(e.target.tagName === 'LI'){
        e.target.remove();
    }
});