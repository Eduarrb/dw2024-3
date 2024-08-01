// fetch("https://api.discogs.com/database/search?q=nirvana&type=master&artist=nirvana&format=album&token=vFbTObsdUqoiZMMXLKtnkIfzMVLXsjIepDmVCeFm")
//     .then(async res => {
//         // console.log(res);
//         let data = await res.json()
//         console.log(data);
//     })
//     .catch(async err => {
//         console.log(err)
//     })

// const axios = require('axios');

const artistaInput = document.querySelector('.search');
const btn = document.querySelector(".btn");
const box = document.querySelector('.section__right__contenido__resultado__discografia');

async function obtenerJson(artista) {
    try {
        const res = await axios.get(`https://api.discogs.com/database/search?q=${artista}&type=master&artist=${artista}&format=album&token=vFbTObsdUqoiZMMXLKtnkIfzMVLXsjIepDmVCeFm`);
        // console.log(res.data.results);
        return res.data.results;
    } catch (error) {
        console.log(error);
    }
}

const imprimirData = async () => {
    const artista = artistaInput.value;
    const res = await obtenerJson(artista);
    // console.log(res);
    // for(let i = 0; i < res.length; i++){
    //     console.log(res[i]);
    // }
    let plantilla = '';
    res.forEach(obj => {
        // console.log(obj);
        plantilla += `
            <div class="section__right__contenido__resultado__discografia__item">
                <h3 class="section__right__contenido__resultado__discografia__item--titulo">${obj.title}</h3>
                <div class="section__right__contenido__resultado__discografia__item__left">
                    <img src="${obj.cover_image}" alt="${obj.title}">
                    <div class="section__right__contenido__resultado__discografia__item__left__info">
                        <p>Año: <span>${obj.year}</span></p>
                        <p>País: <span>${obj.country}</span></p>
                    </div>
                </div>
            </div>
        `;
    });
    // console.log(plantilla);
    box.innerHTML = plantilla;
    artistaInput.value = '';
}

btn.addEventListener('click', () => {
    imprimirData();
})




