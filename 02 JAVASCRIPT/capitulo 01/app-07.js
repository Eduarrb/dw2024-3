/* ⚡⚡ OBJETOS ⚡⚡ */

// PUEDE SER UN ELEMENOT QUE TIENE CARACTERISTICAS Y PROPIEDADES

// key - value pairs
// console.log(datosEtiqueta);
// console.log(window);

const celular = {
    marca: 'Apple',
    modelo: 'Iphone 15 pro',
    precio: 3599.99,
    accesorios: ['cargador', 'audifones', 'cable usb'],
    bateria: {
        capacidad: '5000ma',
        tipoCarga: '30w'
    }
}

// console.log(celular);

// 1️⃣ METODOS -> funciones en objetos o clases
const usuario = {
    dni: '12345678',
    nombre: 'Juan',
    correo: 'juan@mipagina.com',
    fechaNac: 1996,
    iniciarSesion: function() {
        console.log('Bienvenido a la aplicacion');
    },
    cerrarSesion: () => {
        console.log('Hasta la próxima');
    }
}

// 'palabra'.length
// console.log(usuario.dni);
// usuario.iniciarSesion();
// usuario.cerrarSesion();

const personaje = {
    nombre: 'Mario',
    correo: 'mario@nintendo.com',
    skills: [
        'saltar',
        'golpear tortugas',
        'comer hongos'
    ],
    saltar: function () {
        // console.log(`${personaje.nombre} dio un salto`);
        // 🌟🌟 THIS hace referencia al objeto en el cual se este ejecutando
        console.log(`${this.nombre} dio un salto`);
    },
    golpear: () => {
        console.log(this);
        // console.log(`${this.nombre} dio un golpe`);
    },
    plantilla: '',
    crearPlantilla: function(){
        for (let i = 0; i < this.skills.length; i++) {
            // console.log(this.skills[i]);
            this.plantilla += `<li>${this.skills[i]}</li>`;
        }
    },
    printHtml: function (etiqueta) {
        etiqueta.innerHTML = this.plantilla;
    }
}

const datosEtiqueta = document.querySelector('.datos');

personaje.crearPlantilla();
// console.log(personaje.platilla);
personaje.printHtml(datosEtiqueta);

// JSON -> JAVASCRIPT OBJECT NOTATION