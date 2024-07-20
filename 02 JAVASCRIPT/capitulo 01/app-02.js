/* ⚡⚡ NUMBERS ⚡⚡ */

let radio = 10;
let pi = 3.1416;

// 💥💥 OJO CUIDADO CON LAS COSAS RARAS DE JS

let circunferencia = pi * (radio ** 2);
// console.log(circunferencia);

// console.log(typeof("5"));

let num = "12";
// console.log(num);

// console.log(Number(num));
// console.log(1 + +num);

// 1️⃣ residuo %
let res = 21 % 2;
// console.log(res);
if(21 % 2 === 0) {
    // console.log('es par');
} else {
    // console.log('es impar');
}

// 2️⃣ reduccion de codigo
let num1 = 5;
// console.log(num1);
num1 = num1 + 2;
// console.log(num1);

num1 += 3; // => num1 = num1 + 3
// console.log(num1);

num1 -= 8;
// console.log(num1);

num1 *= 8; // => 4
// console.log(num1);

num1 /= 4;
// console.log(num1); // 4

// 3️⃣ sustracción o adicion por unidad
// num += 1;
num1++;
// console.log(num1);

num1--;
// console.log(num1);

// 4️⃣ OBJETO MATH

let num2 = 10.5;

let res1 = Math.floor(num2);
console.log(res1);

let res2 = Math.ceil(num2);
console.log(res2);

let res3 = Math.round(num2);
console.log(res3);