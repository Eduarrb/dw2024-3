/* ⚡⚡ ARROW FUNCTIONS ⚡⚡ */

// saludar();

function saludar () {
    console.log('Hola mundo');
}

const saludar2 = () => {
    console.log('Hola mundo x2');
}

// saludar2();

const sumar = (a, b) => {
    let res = a + b;
    // console.log(res);
    return res;
}

let resSuma = sumar(2,2);
// console.log(resSuma);

// const calcEdad = (fechaNac) => {
//     let edad = 2024 - fechaNac;
//     console.log(edad);
// }

// const calcEdad = fechaNac => {
//     let edad = 2024 - fechaNac;
//     console.log(edad);
// }

// const calcEdad = fechaNac => {
//     let edad = 2024 - fechaNac;
//     return edad;
// }

// const calcEdad = fechaNac => {
//     return 2024 - fechaNac;
// }

const calcEdad = (fechaNac, anioActual) => anioActual - fechaNac;

let edad = calcEdad(1996, 2030);
console.log(edad);