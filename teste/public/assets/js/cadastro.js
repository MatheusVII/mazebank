const btn = document.querySelector('.btn-cadastro');

function verificar(){
    let senha1 = document.getElementById("input-senha").value.trim();
    let senha2 = document.getElementById("input-confirmar-senha").value.trim();
    const btn = document.querySelector('.btn-cadastro');
    const alert = document.querySelector('.alerta');
    const usuario = document.getElementById("input-usuario").value.trim();

    if(senha1.length < 5 && senha1 != ''){
        btn.type = "button";
        alert.innerHTML = "<p>A senha deve conter no mímimo 5 caracteres</p>"
    }
    else{
        alert.innerHTML = "";
        if(senha1 != '' && senha2 != ''){
            if(senha1 === senha2){

                btn.type = "submit";
                alert.innerHTML = "";
            }
            else{
                btn.type = "button";
                alert.innerHTML = "<p>As senhas não são iguais</p>";
            }
        }
    }
}   
btn.addEventListener("click", () => {
    const usuario = document.getElementById("input-usuario").value.trim();
    const alert = document.querySelector('.alerta');

    if(usuario === ''){
        alert.innerHTML = "<p>Insira o nome de usuario</p>";
    }
    else{
        alert.innerHTML = "";
    }
})