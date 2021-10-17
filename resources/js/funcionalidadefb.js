import { getAuth, createUserWithEmailAndPassword } from './configfb.js';

function criarusuario() {
    let email = document.getElementById("emailDoUsuario").value;
    let password = document.getElementById("senha").value;

    console.log(window.fbapp);
    console.log(window.fbAuth);
    console.log(window.createUserWithEmailAndPassword);
    window.createUserWithEmailAndPassword(window.fbAuth, email, password)
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