/*
    ⚡⚡ JAVASCRIPT ⚡⚡
    
    DOM -> DOCUMENT OBJECT MODEL
    "KEY SENSITIVE"
    NO ES OBLIGATORIO EL USO DEL PUNTO Y COMA, PERO ES UNA BUENA PRACTICA
*/

// console.log(window);
// console.log(document);

// let menuInicio;

/*
    ⚡⚡ TIPOS DE DATOS ⚡⚡
    - STRINGS
    - NUMBERS
    - BOLLEANS
    - OBJETOS {}
*/

// 1️⃣ STRINGS O  CADENAS DE TEXTO

/* ES5< PALABRA RESERVDA PARA VARIABLES ERA "VAR" */
// var nombre = "Eduardo";
/* ES6 (JS VANILLA) */

/* C# -> string nombre = "Eduardo" */

/* LET & CONST */
let nombre = "Jaimito";
// let num = 10;
const apellido = "Casas";

let lorem = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ut, molestias!";

// console.log(nombre); // Jaimito
// nombre = "Jaime";
// console.log(nombre); // Jaime

// console.log(apellido);
// apellido = "Casano";
// console.log(apellido);

// 🌟 CONCATENAR
let nombreCompleto = nombre + " " + apellido; 
// console.log(nombreCompleto);

// 🌟 LOS STRING SON UN TIPO DE OBJETO PARECIDO A LOS ARRAYS - INDICES
// LOS INDICES EMPIEZAN SIEMPRE EN 0, 1, 2 ... N

// bit => 0
// byte => 01001000

console.log(nombre[0]);
console.log(nombre[6]);

// 🌟 LENGTH -> PROPIEDAD
console.log(lorem.length);

console.log(lorem[lorem.length - 1]);


// REALIZAR
const nombre2 = "Guido";
const apellido2 = 'Topalaya';
// dadas las constantes generar un correo corporativo
// ejemplo: earroyo@mipagina.com

// let correo = "gtopalaya@mipagina.com";
let correo = nombre2[0] + apellido + '@mipagina.com';
console.log(correo); // MAYUSCULAS

// 🌟 METODOS
correo = correo.toLowerCase();
console.log(correo);