<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>App Fodal</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>


</head>

<body>
  <nav class="black">
    <div class="nav-wrapper">
      <a style="margin-left:10px;" href="/" class="brand-logo">AppFodal</a>
      <ul class="right hide-on-med-and-down">
        @if(Auth::check() == false)
        <li><a href="/login">Login</a></li>
        <li><span>|</span></li>
        <li><a href="/register">Register</a></li>
        @endif
        @if(Auth::check() == true)
        <li><a href="/home">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/logout">Logout</a></li>
        @endif
      </ul>
    </div>
  </nav>

  @yield('content')


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
<footer class="page-footer black">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Trabalho de PHP</h5>
        <p class="grey-text text-lighten-4">Aplicação para agendar horários em barbearias.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Menu</h5>
        <ul>
          <li><a class="grey-text text-lighten-3"  href="/login">Login</a></li>
          <li><a class="grey-text text-lighten-3"  href="/register">Register</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2017 Carlotto
      <a class="grey-text text-lighten-4 right" href="#!">Leonardo Dias Carlotto</a>
    </div>
  </div>
</footer>
</html>
