const form = document.querySelector('.form_abertura');
const modalEditado = document.querySelector('.alert_editado');


form.addEventListener('submit', function() {
    modalEditado.classList.toggle('alert_editado_aberto');
})
