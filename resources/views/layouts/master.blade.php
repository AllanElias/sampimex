<!DOCTYPE html>
<html lang="eng">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bulma.css"><!-- my css-->
<link rel="stylesheet" href="css/style.css"><!-- my css-->
<script src="js/functions.js"></script>
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet"><!-- fonts link-->
<link rel=icon href="img/sampimex--fav-icon.png">
<head>
    <meta charset="utf-8">
    <title>Sampimex @yield("title") </title>
</head>
<body>



<!-- header -->
<header class="@yield("header")">
  <div class="container">
    <nav class="nav">
      <div class="nav-left">
        <a href="/home" class="nav-item">
          <div class="logo">
            <img src="img/sampimex-logo.png" alt="logotipo Sampimex tecnologías de la información" style="width: 90%;float: left;">
          </div>
        </a>
      </div>

      <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
      <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
      <span class="nav-toggle" onclick="openMenu()">
        <span></span>
        <span></span>
        <span></span>
      </span>

      <!-- This "nav-menu" is hidden on mobile -->
      <!-- Add the modifier "is-active" to display it on mobile -->
      <div class="nav-right nav-menu">
        @include('layouts.partials.main-menu')
      </div>
    </nav>


    @yield('content')

<footer>
  <div class="container">
    <div class="columns is-vcentered">
      <div class="column is-mobile">
          <div class="footer--logo">
            <a href="/home" class="nav-item">
              <img src="img/footer--logo_white.png">
            </a>
          </div>
      </div><!-- foter logo column -->
      <div class="column is-mobile">
        <div class="footer--reserved-rights" id="center">
          <h2 class="text_white">© 2017 Sampimex. Derechos reservados</h2>

        </div>
      </div><!-- foter reserved rights-->
      <div class="column is-mobile">
        <div class="footer--mail">
          <a href="mailto:contacto@sampimex.com" class="footer--mail_mailto"> 
            <img src="img/footer--mail-icon.png" class="mail-icon">
            <span class="text_white">contacto@sampimex.com</span>
          </a>  
        </div>
      </div><!-- foter mail-->
    </div><!-- section empresas columns -->
  </div><!-- footer container -->
</footer>



</body>
</html>