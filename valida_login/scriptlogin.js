function cadastrar(){
    let login = document.querySelector('.center')
    let cadastra = document.querySelector('.none')
    if(login.classList.contains('center')){
        login.classList.remove('center')
        login.classList.add('none')
        cadastra.classList.add('center')
        cadastra.classList.remove('none')
    }
}