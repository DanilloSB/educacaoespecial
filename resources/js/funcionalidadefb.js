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
         var emailDoUsuarioLogado = credenciaisDoUsuario.user.email;
         document.getElementById("userLoggedIn").innerHTML = emailDoUsuarioLogado
}

function logarUsuario(){
    var email = document.getElementById("emailDoUsuario").value;
    var pass = document.getElementById("senha").value;
  
    signInWithEmailAndPassword(window.fbAuth, email, pass)
    .then((cred)=>{
      var emailDoUsuarioLogado = credenciaisDoUsuario.user.email;
      document.getElementById("userLoggedIn").innerHTML = emailDoUsuarioLogado
    })["catch"](function (err) {
      return console.log(err);
    });
  
}
function trocarSenha(){

}
function obterUsuarioLogado(){

}