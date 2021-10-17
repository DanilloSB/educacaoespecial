<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="manifest" href="resources/manifest.json">
    

  <script type="Module" assent="./configfb.js"></script>
  <script type="Module" assent="./funcionalidadefb.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    @yield('title')
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}" href="{{ route('site.home') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::current()->getName() === 'site.contact' ? 'active' : '') }}" href="{{ route('site.contact') }}">Contato</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::current()->getName() === 'site.whoweare' ? 'active' : '') }}" href="{{ route('site.whoweare') }}">Quem somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::current()->getName() === 'site.login' ? 'active' : '') }}" href="{{ route('site.login') }}">Sing in</a>
    </li>
  </ul>
</nav>

<div class="jumbotron text-center">
  <h1>Educação Para Todos!!!</h1>
  <p>Educação especial para alunos com necessidades especiais.</p> 
</div>

@yield('content')
<main>
<footer class="container">
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
    <p>&copy; {{date('Y')}} Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
</body>
</html>