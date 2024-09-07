// axios.get('https://pokeapi.co/api/v2/pokemon/ditto')
//     .then(res => {
//         console.log(res.data);
//     })
//     .catch(err => {
//         console.log(err)
//     })

axios.get('apiRequest/getComentarios.php', {
    params: {
        id: 2
    }
})
    .then(res => {
        console.log(res.data);
    })
    .catch(err => {
        console.log(err)
    })