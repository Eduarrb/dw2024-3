/*
    ⚡⚡ ARRAYS ⚡⚡

    🌟 TIPO DE OBJETO
    - LISTA DE ELEMENTOS
    - CONJUNTO DE ELEMENTOS SEPARADOS POR COMAS DENTRO DE CORCHETES
    []
*/

let numeros = [12, 56, 89, 12036, 0, 85, 12.6, 0.5];
// console.log(numeros[0]);
// console.log(numeros[numeros.length - 1]);
let personajes = ['Ryo', 'Blanca', 'Mario', 'Ken', 'Kratos'];
// console.log(personajes[3]);

let mixto = [256, 12.3, true, 'Jaimito', ['Mario', 'Luigui']];
// console.log(mixto[4][1]);

// 1️⃣ ITERAR SOBRE LOS ELEMTOS -> LOOPS (CICLOS)

// for (let constante = 0; constante < personajes.length; constante++){
//     console.log(personajes[constante]);
// }

let datosBloque = document.querySelector('.datos');

let platilla = "";

// console.log(platilla);

for (let i = 0; i < personajes.length; i++){
    // platilla = platilla + `<li>${personajes[i]}</li>`;
    platilla += `<li>${personajes[i]}</li>`;
}

// console.log(platilla);

datosBloque.innerHTML = platilla;

// 💥 WHILE (cuidado con los bucles infinitos)
let e = 0;
while (e < personajes.length){
    console.log(personajes[e]);
    e++;
}