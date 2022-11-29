const email = document.getElementById("email");
const senha = document.getElementById("senha");
const validaLogin = document.querySelector(".validacoes")
const form = document.getElementById("form");

form.addEventListener('submit', function(e) {

    if(email.value == "") {
        e.preventDefault();
        email.focus();
        
        validaLogin.innerHTML = '<div data-aos="zoom-in" class="validaLogin"> <i class = "fa-solid fa-triangle-exclamation"></i> Por favor preencha seu e-mail! </div>';
    } else if (senha.value == "") {
        e.preventDefault();
        senha.focus();

        validaLogin.innerHTML = '<div data-aos="zoom-in" class="validaLogin"> <i class = "fa-solid fa-triangle-exclamation"></i> Por favor preencha sua senha! </div>';
    }
});

// ******************************

const alertaDanger = document.querySelector(".alert-danger");

function stopAlert() {
    alertaDanger.classList.toggle("alertNone")
}

setTimeout(stopAlert, 3000);


