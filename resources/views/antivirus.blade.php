@extends("layouts.master", [
  'active' => 'antivirus'
])

@section("nav_class", "nav-red")

@section("title", "antivirus")

@section("header", "header--antivirus")

@section("content")

    <div class="columns">
      <div class="column">
        <h2 class="title_blue" id="center">Antivirus</h2>
        <p class="text_black" id="center">Protege tu sistema de trabajo.</p>
      </div>
    </div>

  </div> <!-- header container -->
</header>
 <!-- header end -->

 <!-- main -->

<div class="main">
  <div class="container">
    <div class="columns">
      <div class="column ">
        <p class="title_blue" id="center">Descubre las facilidades de <br>proteger tu sistema de virus</p>
      </div> <!-- main column 1 -->
    </div><!-- main columns -->
  </div><!-- main container-->
</div> <!-- main -->


<div class="main--solutions">
  <div class="container">

    <div class="columns is-vcentered">
      <br>
      <div class="column">
        <div class="main--card-icons">
          <img src="img/antivirus--admin-icon.png">
        </div>
      </div>
      <div class="column">
        <hr class="color">
        <h2 class="title_blue">Administración desde una consola</h2>
        <p class="text_black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque erat aliquet bibendum bibendum. Sed nisi risus, molestie sit amet sapien quis, blandit sollicitudin turpis. Donec ipsum ante, luctus et tellus vulputate, pharetra aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin turpis velit, bibendum et magna et,</p>
      </div>
    </div><!-- main solution columns 1-->


    <div class="columns is-vcentered">
      <br>
      <div class="column">
        <div class="main--card-icons">
          <img src="img/antivirus--up-to-day-icon.png">
        </div>
      </div>
      <div class="column">
        <hr class="color">
        <h2 class="title_blue">Mantén tus equipos al día </h2>
        <p class="text_black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque erat aliquet bibendum bibendum. Sed nisi risus, molestie sit amet sapien quis, blandit sollicitudin turpis. Donec ipsum ante, luctus et tellus vulputate, pharetra aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin turpis velit, bibendum et magna et,</p>
      </div>
    </div><!-- main solution columns 2-->

    <div class="columns is-vcentered">
      <br>
      <div class="column">
        <div class="main--card-icons">
          <img src="img/antivirus--monitoring-icon.png">
        </div>
      </div>
      <div class="column">
        <hr class="color">
        <h2 class="title_blue">Obtén un mejor control y monitoreo de tus dispositivos</h2>
        <p class="text_black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque erat aliquet bibendum bibendum. Sed nisi risus, molestie sit amet sapien quis, blandit sollicitudin turpis. Donec ipsum ante, luctus et tellus vulputate, pharetra aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin turpis velit, bibendum et magna et,</p>
      </div>
    </div><!-- main solution columns 3-->

  </div><!-- main container -->
</div><!-- main solutions -->

<div class="resume">
  <div class="container">
    <div class="columns">
      <div class="column ">
        <hr class="color">
        <p class="text_black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque erat aliquet bibendum bibendum. Sed nisi risus, molestie sit amet sapien quis, blandit sollicitudin turpis. Donec ipsum ante, luctus et tellus vulputate, pharetra aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin turpis velit, bibendum et magna et,</p>
      </div> <!-- main column 1 -->
      <br>
    </div><!-- main columns -->
  </div><!-- main container-->
</div> <!-- main --> 


@endsection