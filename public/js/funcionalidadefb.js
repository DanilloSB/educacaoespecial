/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/funcionalidadefb.js ***!
  \******************************************/
function criarUsuario() {
  var email = document.getElementById("emailDoUsuario").value;
  var pass = document.getElementById("senha").value;
  console.log(window.fbApp);
  console.log(window.fbAuth);
  console.log(window.createUserWithEmailAndPassword);
  window.createUserWithEmailAndPassword(window.fbAuth, email, pass).then(function (credenciaisDoUsuario) {
    console.dir(credenciaisDoUsuario);
  })["catch"](function (err) {
    return console.log(err);
  });
  var emailDoUsuarioLogado = credenciaisDoUsuario.user.email;
}

function logarUsuario() {}

function trocarSenha() {}

function obterUsuarioLogado() {}
/******/ })()
;