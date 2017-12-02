<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Barber Shop</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">

</head>

<body>
  <nav class="black">
    <div class="nav-wrapper">
      <a style="margin-left:10px;" href="/" class="brand-logo">Barber Shop</a>
      <ul class="right hide-on-med-and-down">
        @if(Auth::check() == false)
        <li><a href="/">Home</a></li>
        <li><a href="/login">Login</a></li>
        <li><span>|</span></li>
        <li><a href="/register">Register</a></li>
        @endif
        @if(Auth::check() == true)
        <li><a href="/">Home</a></li>
        <li><a href="/home">Marcar Horário</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/logout">Logout</a></li>
        @endif
      </ul>
    </div>
  </nav>

  @yield('content')


  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
<footer class="page-footer black">
  <div class="container">

  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2017 Carlotto&Maffezzolli
      <a class="grey-text text-lighten-4 right" href="#!">João Pedro e Leonardo</a>
    </div>
  </div>
</footer>
</html>
