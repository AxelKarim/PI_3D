
/* <---------- Función para activar el link cuando el cursor pase por encima de la opción menú -----------> */
var lista = document.querySelectorAll('.nav li')
function activarLink() {
    lista.forEach((item) => 
        item.classList.remove('active'))
    this.classList.add('active')
}

lista.forEach((item) =>
    item.addEventListener('mouseover', activarLink))


// preguntar a busquets duda sobre lista.forEach is not a function

/* <------- Función para mostrar/ocultar el menú ------->*/

let toggle = document.querySelector('.toggle')
let nav = document.querySelector('.nav')
let container = document.querySelector('.container')

toggle.onclick = function() { 
    nav.classList.toggle('active')
    container.classList.toggle('active')
}

