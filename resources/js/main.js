if ('serviceWorker' in navigator){
    nivigator.serviceWorker.register('/js/sw.js')
        .then(function(registration){
            alert('Registrado com sucesso, scope is:', registration.scope);
        })
        .catch(function(error){
            alert('Erro na instalação do Service worker:', error);
        });
}