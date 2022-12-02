const titulo = document.getElementById('titulo');
const categoria = document.getElementById('categoria');
const descricao = document.getElementById('descricao');
const alertas = document.querySelector('.alertas');
const form = document.getElementById('form');

form.addEventListener('submit', function(e) {
    if(titulo.value == "") {
        e.preventDefault();
        alertas.innerHTML = '<div class="alert_abrir_chamado" data-aos="zoom-in"> <i class="fa-solid fa-triangle-exclamation"></i> Preencha o titulo por favor</div>';
        titulo.focus();

    } else if (categoria.value == "") {
        e.preventDefault();
        alertas.innerHTML = '<div class="alert_abrir_chamado" data-aos="zoom-in"> <i class="fa-solid fa-triangle-exclamation"></i> Preencha a categoria por favor</div>';
        categoria.focus();

    } else if (descricao.value == "") {
        e.preventDefault();
        alertas.innerHTML = '<div class="alert_abrir_chamado" data-aos="zoom-in"> <i class="fa-solid fa-triangle-exclamation"></i> Preencha a descrição por favor</div>';
        descricao.focus();
    }
})
