const cajaComentarios = document.querySelector('.comentarios__container__box');
const url = location.href;
const urlArray = url.split("=");
const id = +urlArray[1];

const fechaOptions = {
    weekday: 'short',
    year: 'numeric',
    month: 'short',
    day: 'numeric'
}

const renderComentarios = objComentario => {
    const fecha = new Date(objComentario.com_fecha);

    let plantillaEstrellas = '';

    for(let i = 0; i < +objComentario.com_puntaje; i++) {
        plantillaEstrellas += '<i class="fa-solid fa-star"></i>';
    }
    if(+objComentario.com_puntaje !== 5) {
        for(let j = 0; j < 5 - +objComentario.com_puntaje; j++) {
            plantillaEstrellas += '<i class="fa-regular fa-star star-yellow"></i>';
        }
    }

    return `
        <div class="comentarios__container__box__item">
            <div class="comentarios__container__box__item__imgBox">
                <img src="img/${!objComentario.user_img ? 'user.png' : objComentario.user_img}" alt="">
            </div>
            <div class="comentarios__container__box__item__data">
                <div class="comentarios__container__box__item__data__top">
                    <span>${objComentario.usuario}</span>
                    <span>${fecha.toLocaleDateString("es-ES", fechaOptions)}</span>
                </div>
                <p class="comentarios__container__box__item__data__descri mt-1">
                    ${objComentario.com_mensaje}
                </p>
                <div class="comentarios__container__box__item__data__stars mt-1">
                    ${plantillaEstrellas}
                </div>
            </div>
        </div>
    `;
}

axios.get('apiRequest/getComentarios.php', {
    params: {
        id
    }
})
    .then(res => {
        console.log(res.data);
        const plantilla = res.data.map(renderComentarios).join('');
        // console.log(plantilla);
        cajaComentarios.innerHTML = plantilla;
    })
    .catch(err => {
        console.log(err)
    })