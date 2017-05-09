@extends("layouts.master", [
  'active' => 'admin-activos'
])

@section("nav_class", "nav-red")

@section("title", "admin-activos")

@section("header", "header--admin-activos")

@section("content")

    <div class="columns">
      <div class="column">
        <h2 class="title_blue" id="center">Administración de Activos</h2>
        <p class="text_black" id="center">Todos tus reportes listos cuando los necesitas.</p>
      </div>
    </div>

  </div> <!-- header container -->
</header>
 <!-- header end -->
<div class="main">
  <div class="container">
    <div class="columns">
      <div class="column ">
        <p class="title_blue" id="center">Descubre los beneficios <br>de administrar tus activos</p>
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
          <img src="img/activos--life-finances-icon.png">
        </div>
      </div>
      <div class="column">
        <hr class="color">
        <h2 class="title_blue">Ciclo de Vida y Finanzas</h2>
        <p class="text_black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque erat aliquet bibendum bibendum. Sed nisi risus, molestie sit amet sapien quis, blandit sollicitudin turpis. Donec ipsum ante, luctus et tellus vulputate, pharetra aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin turpis velit, bibendum et magna et,</p>
      </div>
    </div><!-- main solution columns 1-->


    <div class="columns is-vcentered">
      <br>
      <div class="column">
        <div class="main--card-icons">
          <img src="img/activos--barcode-icon.png">
        </div>
      </div>
      <div class="column">
        <hr class="color">
        <h2 class="title_blue">Barcode </h2>
        <p class="text_black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque erat aliquet bibendum bibendum. Sed nisi risus, molestie sit amet sapien quis, blandit sollicitudin turpis. Donec ipsum ante, luctus et tellus vulputate, pharetra aliquet augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin turpis velit, bibendum et magna et,</p>
      </div>
    </div><!-- main solution columns 2-->

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