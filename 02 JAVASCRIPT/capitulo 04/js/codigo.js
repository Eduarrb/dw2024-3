const passInput = document.querySelector('input[type=password]');
const icon = document.querySelector('i');

passInput.addEventListener('input', function(){
    // console.log('agregaste texto');
    // icon.classList.add('show');
    // console.log(passInput.value.length)
    // console.log(this.value.length)
    if(this.value.length > 0) {
        icon.classList.add('show');
        if(this.value.length < 6) {
            this.classList.add('alert')
            this.classList.remove('success')
        } else {
            this.classList.remove('alert');
            this.classList.add('success');
        }
    } else {
        icon.classList.remove('show');
    }
});

icon.addEventListener('mousedown', function(){
    // console.log(this);
    passInput.setAttribute('type','text');
});

icon.addEventListener('mouseup', function(){
    passInput.setAttribute('type', 'password');
});