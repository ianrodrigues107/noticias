let ul = document.querySelector('nav #ul')
let button = document.querySelector('nav .menu1')
let button2 = document.querySelector('nav .menu2')

function Btn(){

    if(ul.classList.contains('open')){

        ul.classList.remove('open')
        button.classList.remove('open2')
        button.classList.add('menu1')
        button2.classList.remove('open3')
        button2.classList.add('menu2')

    }
    else{
        
        ul.classList.add('open')
        button.classList.add('open2')
        button.classList.remove('menu1')
        button2.classList.add('open3')
        button2.classList.remove('menu2')
        
        }
}
let write = document.querySelector('section .text-write')
mudar(write)
function mudar(evento){
    elemento = evento.innerHTML.split('')
    evento.innerHTML = ''
    elemento.forEach((letra,indice) => {
        setTimeout(() =>{
            evento.innerHTML += letra
        },75* indice)
    });
}
function more(){
    let most = document.querySelector('.lern-more')
    let header = document.querySelector('.header-none')
    if(!most.classList.contains('morec')){
        most.classList.add('morec')
        header.classList.remove('header-none')
        header.classList.add('header-more')
    }
    
}