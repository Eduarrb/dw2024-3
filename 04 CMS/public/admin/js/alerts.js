const productosBody = document.querySelector('.productos');
productosBody.addEventListener('click', e => {
    if(e.target.classList.contains('delete')){
        // console.log(window.location.href);
        // console.log(e.target.dataset.delete);
        const id = e.target.dataset.delete
        const url = window.location.href;
        e.preventDefault();
        Swal.fire({
            title: "¿Estas seguro de borrar este elemento?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
              console.log('redirigir');
              window.location.href = url + '&delete=' + id;
            }
          });
    }
})
