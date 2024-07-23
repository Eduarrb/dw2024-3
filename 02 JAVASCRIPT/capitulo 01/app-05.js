/* 
    ⚡⚡ FUNCTIONS ⚡⚡ 
    funciones de expresion regular

    ES UN ALGORITMO DONDE SE REALIZARA ALGUNA ACCION AL LLAMARLA O NOMBRARLA
*/

/* 🌟🌟 EJECUCIONES SINCRONAS 🌟🌟 */
// let nombre = 'Jaimito'; // NOTA varibales globales
// console.log(nombre);

/*********************************************/

function saludar () {
    // ACCIÓN
    console.log('Hola a todo el mundo');
}

// saludar();

// VARIABLES GLOBALES
// let num1 = 10;
let num2 = 24;
// num1 = 10;

// AMBITO DE LA FUNCION, SCOPE, CONTEXTO
function sumar () {
    num1 = 3;
    // let num2 = 5;
    // console.log(num1); // 3
    // let res = num1 + num2;
    // console.log(res);
}

// console.log(num1); // 10
sumar();
// console.log(num1); // 10 o 3?

// 🌟🌟 PARAMETROS Y ARGUMENTOS DE LAS FUNCIONES

const fechaNac = 1963;

function calcEdad(fechaNac) {
    let edad = 2024 - fechaNac;
    console.log(edad);
}

// calcEdad(fechaNac);
let palabra; // -> undefined

function saludar2(nombre, ciudad, estadoCivil = 'pendiente') {
    let saludo = `Hola, mi nombre es ${nombre}, soy de la ciudad de ${ciudad} y estoy ${estadoCivil}`;
    console.log(saludo);
}

// saludar2('Eduardo', 'Huancayo');

// 2️⃣ RETURN
function multi (num1, num2) {
    let res = num1 * num2;
    let otro = num1 * num2 * num2;
    return [res, otro];
}

//multi(2, 4); // 8
// console.log(multi(2,4));
let resMulti = multi(2, 4);
console.log(resMulti);