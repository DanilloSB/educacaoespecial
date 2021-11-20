<!-- Layout Principal De Todas As Páginas -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="manifest" assent="resources/manifest.json">
  <link rel="icon" type="image/png" href="http://www.apadam.org/img/maos3.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>.bg-gradient {background: linear-gradient(-105deg, #0abab5, rgb(245, 247, 241));}</style>
  <style>
  footer {
    position: fixed;
    height: 60px;
    bottom: 0;
    width: 100%;
}</style>

  <script src="./js/configfb.js" type="module"></script>
  <script src="./js/funcionalidadefb.js"></script>
  <script src="./js/main.js" defer></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Projeto - Educação Especial</title>

    @yield('title')
</head>
<body >

<header>
<nav class="navbar col-12 navbar-dark bg-gradient" style="z-index: 999;">
            <div class="container-fluid col-12 m-auto">
            <a class="navbar-brand me-2" href="{{ route('site.home') }}">
                <img class="rounded-circle mr-3"
                src="http://www.apadam.org/img/maos3.png"
                height="60"
                alt="60"
                loading="lazy"/>
              </a>

  <a class="navbar-nav ml-auto">         
    <li class="nav-item navbar">
      <a class="nav-link {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }} text-white" href="{{ route('site.home') }}">Início</a>
    </li>
    <li class="nav-item navbar">
      <a class="nav-link {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }} text-white" href="{{ route('site.contact') }}">Fale Conosco</a>
    </li>
    <li class="nav-item navbar">
      <a class="nav-link {{ (Route::current()->getName() === 'site.whoweare' ? 'active' : '') }} text-white" href="{{ route('site.whoweare') }}">Quem Somos</a>
    </li>
    <li class="nav-item navbar">
      <a class="nav-link {{ (Route::current()->getName() === 'site.aulas' ? 'active' : '') }} text-white" href="{{ route('site.aulas') }}">Aulas</a>
    </li>
    <li class="nav-item navbar">
      <a class="nav-link {{ (Route::current()->getName() === 'site.login' ? 'active' : '') }} text-white" href="{{ route('site.login') }}">Login</a>
    </li>
    
  </a>
</nav>


@yield('content')

</body>
</html>

