function verificarSenha(){
    let senha1 = document.getElementById("input-senha").value.trim();
    let senha2 = document.getElementById("input-confirmar-senha").value.trim();
    const btn = document.querySelector('.btn-cadastro');
    const alert = document.querySelector('.alerta');

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