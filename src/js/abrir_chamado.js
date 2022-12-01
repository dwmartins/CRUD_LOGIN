const titulo = document.getElementById('titulo');
const categoria = document.getElementById('categoria');
const descricao = document.getElementById('descricao');
const alerta = document.querySelector('.alert_abrir_chamado');

const form = document.getElementById('form');

form.addEventListener('submit', function(e) {
    if(titulo.value == "") {
        e.preventDefault();
        alerta.innerHTML = '<i class = "fa-solid fa-triangle-exclamation"></i> Por favor preencha sua senha!';
        alerta.classList.toggle('abrir_alerta');
        titulo.focus();

    } else if (categoria.value == "") {
        e.preventDefault();
        alert('Preencha a categoria!');
        categoria.focus();

    } else if (descricao.value == "") {
        e.preventDefault();
        alert('Preencha a descrição');
        descricao.focus();
    }
})