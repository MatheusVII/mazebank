const btn = document.querySelector(".btn-login");

btn.addEventListener("click", () => {
    const usuario = document.getElementById("input-usuario").value.trim();
    const alert = document.querySelector('.alerta');

    if(usuario === ''){
        alert.innerHTML = "<p>Insira o nome de usuario</p>";
    }
    else{
        alert.innerHTML = "";
    }
});

function verificarSenha(){
    const senha = document.getElementById("input-senha").value;
    const btn = document.querySelector(".btn-login");
    const alert = document.querySelector('.alerta');


    if(senha != ""){
        alert.innerHTML = "";
        if(senha.length < 5){
            alert.innerHTML = "<p>A senha deve conter no mínimo 5 caracteres</p>";
        }
        else{
            btn.type = "submit";
            alert.innerHTML = "";
        }
    }
    else{
        alert.innerHTML = "<p>Digite sua senha</p>";
    }
}