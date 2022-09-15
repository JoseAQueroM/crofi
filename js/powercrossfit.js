//Trayendo los mensajes ocultos

let hideText = document.getElementById('hideText');
let hideText2 = document.getElementById('hideText2');
let hideText3 = document.getElementById('hideText3');
let hideText4 = document.getElementById('hideText4');
let hideText5 = document.getElementById('hideText5');

// Agregando evento a los botones

hideTextBtn.addEventListener('click', mostrarTexto);
hideTextBtn2.addEventListener('click', mostrarTexto2);
hideTextBtn3.addEventListener('click', mostrarTexto3);
hideTextBtn4.addEventListener('click', mostrarTexto4);
hideTextBtn5.addEventListener('click', mostrarTexto5);

// Funciones de los botones

function mostrarTexto(){
    hideText.classList.toggle('showText');
   
    if(hideText.classList.contains('showText')){
        hideTextBtn.innerHTML = 'Ocultar texto'
    }   else {
        hideTextBtn.innerHTML = 'Leer mas'
    }
    

}

function mostrarTexto2(){
    hideText2.classList.toggle('showText');

    if(hideText2.classList.contains('showText')){
        hideTextBtn.innerHTML = 'Ocultar texto'
    }   else {
        hideTextBtn.innerHTML = 'Leer mas'
    }
    
}

function mostrarTexto3(){
    hideText3.classList.toggle('showText');

    if(hideText3.classList.contains('showText')){
        hideTextBtn.innerHTML = 'Ocultar texto'
    }   else {
        hideTextBtn.innerHTML = 'Leer mas'
    }
    

}

function mostrarTexto4(){
    hideText4.classList.toggle('showText');

    if(hideText4.classList.contains('showText')){
        hideTextBtn.innerHTML = 'Ocultar texto'
    }   else {
        hideTextBtn.innerHTML = 'Leer mas'
    }
    
}

function mostrarTexto5(){
    hideText5.classList.toggle('showText');

    if(hideText5.classList.contains('showText')){
        hideTextBtn.innerHTML = 'Ocultar texto'
    }   else {
        hideTextBtn.innerHTML = 'Leer mas'
    }
    
}

