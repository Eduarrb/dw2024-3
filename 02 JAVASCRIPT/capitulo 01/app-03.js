// ⚡⚡ TEMPLATE STRINGS ``⚡⚡ 

let nombre = 'Jaimito';
let apellido = "Condor";
let edad = 18;

// REALIZAR -> Hola, soy Jaimito Condor y tengo 18 años
let datosCompletos = 'Hola, soy: ' + nombre + ' ' + apellido + ' y tengo ' + edad + ' años';

// console.log(datosCompletos);

let res = `Hola, soy ${nombre} ${apellido} y tengo ${edad} años`;
// console.log(res);

let datos = document.querySelector('.datos');
// datos.innerHTML = '<h1>hola</h1>';
// datos.textContent = '<h1>hola</h1>';
let plantilla = `
    <li>Hola soy ${nombre}</li>
    <li>tengo ${edad} años</li>
`;
console.log(plantilla);

datos.innerHTML = plantilla;