if ('serviceWorker' in navigator){
    navigator.serviceWorker.register('/sw.js')
    console.log('registrando Service Worker')
        .then(function(registration){
            alert('Registrado com sucesso, scope is:', registration.scope);
        })
        .catch(function(error){
            alert('Erro na instalação do Service worker:', error);
        });
}