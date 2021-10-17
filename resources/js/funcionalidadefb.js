function criarUsuario() {
    let email = document.getElementById("emailDoUsuario").value;
    let pass = document.getElementById("senha").value;

    console.log(window.fbApp);
    console.log(window.fbAuth);
    console.log(window.createUserWithEmailAndPassword);
    window.createUserWithEmailAndPassword(window.fbAuth, email, pass)
        .then((credenciaisDoUsuario)=>{
            console.dir(credenciaisDoUsuario)
        })
        .catch ((err) => console.log(err));
        let emailDoUsuarioLogado = credenciaisDoUsuario.user.email
}

function logarUsuario(){

}
function trocarSenha(){

}
function obterUsuarioLogado(){

}