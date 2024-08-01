

// ⚡⚡ EJECUCIONES ASINCORNAS ⚡⚡
// ESPERAN QUE TERMINE UN PROFESO
// setInterval(function(){
//     console.log('hiciste una peticion');
// }, 3000);


// ⚡⚡ EJECUCIONES SINCRONAS ⚡⚡

const nombre = 'Jhonel';

// console.log(nombre);

function saludar() {
    console.log('Hola a todos');
}

// saludar();


/****************************************************/
// JSON -> JAVASCRIPT OBJECT NOTATION
// FETCH -> DEVUELVE UNA "PROMESA"
/*
    if(ok){

    }
    else {
        algo malo
    }

*/
fetch("data/usuarios.json")
    .then(
        // callbacks -> funciones que se ejecutan inmediatamente
        async function(res){
            console.log(res);
            let data = await res.json();
            console.log(data);
        }
    )
    .catch(
        function(error){
            console.log(error)
        }
    );

/*
    mipagina.com?id=1&ciudad=Huancayo

*/