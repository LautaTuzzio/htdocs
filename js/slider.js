const widthContItem = document.querySelector('.contenedor__items');
const cantItems = document.querySelectorAll('.items');

let tamano_ContItem = 100 * cantItems.length;
widthContItem.style.width = `${tamano_ContItem}%`;
const boton_siguiente = document.querySelector('#boton__siguiente');
const boton_anterior = document.querySelector('#boton__anterior');

boton_siguiente.addEventListener('click', e => siguiente())
boton_anterior.addEventListener('click', e => anterior())

let translate = 0,
    contador = 0,
    tamano = 100 / cantItems.length;

setInterval(() => {
    siguiente();
}, 5000);
function siguiente() {
    if(contador >= cantItems.length-1){
        translate = 0;
        contador = 0;
        widthContItem.style.transform = `translateX(-${translate}%)`;
        return;
    }
    contador++;
    translate = translate + tamano;
    widthContItem.style.transform = `translateX(-${translate}%)`;
    widthContItem.style.transition = 'all ease .3s';
}
function anterior(){
    contador--;
    if(contador < 0){
        contador = cantItems.length-1;
        translate = tamano * (cantItems.length-1)
        widthContItem.style.transform = `translateX(-${translate}%)`;
        return;
    }
    translate = translate - tamano;
    widthContItem.style.transform = `translateX(-${translate}%)`;
    widthContItem.style.transition = 'all ease .3s';
}