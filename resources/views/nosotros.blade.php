@extends("layouts.master", [
  'active' => 'nosotros'
])

@section("nav_class", "nav-red")

@section("title", "Nosotros")

@section("header", "header--about-us")

@section("content")

    <div class="columns">
      <div class="column">
        <h2 class="title_blue" id="center">¿Por que SAMPIMEX?</h2>
        <p class="text_black" id="center">administración y automatización de tecnologías de la información.</p>
      </div>
    </div>

  </div> <!-- header container -->
</header>
 <!-- header end -->
 <!-- main -->
<div class="main--solutions">
  <div class="container">
    <div class="columns is-vcentered">
      <div class="column">
        <div class="main--card-aboutus">
          <div>
            <hr class="color_center">
          </div>
          <div class="card--text_left">
            <p class="title_blue" id="center">Sampimex</p>
          </div>
        </div>
      </div>
      <div class="column">
        <p class="text_black">Somos una empresa mexicana dedicada a la administración y automatización de tecnologías de la información. Contamos con el personal mejor capacitado en el área y con amplia experiencia, comprometidos totalmente con el cliente. Nuestras herramientas se adecuan a la necesidad de nuestros clientes.</p>
      </div>
    </div><!-- main columns-->
    <div class="columns is-vcentered">
      <div class="column">
        <div class="main--card-mision">
          <div>
            <hr class="color_center">
          </div>
          <div class="card--text_left">
            <p class="title_blue" id="center">Misión</p>
          </div>
        </div>
      </div>
      <div class="column">
        <p class="text_black">Mejorar la gestión y administración de Tecnologías de la Información a empresas que quieran innovar en desarrollo tecnológico a través de asesorías y herramientas que facilite los procesos, aumentando la calidad del servicio.</p>
      </div>
    </div><!-- main columns 2-->
    <div class="columns is-vcentered">
      <div class="column">
        <div class="main--card-valores">
          <div>
            <hr class="color_center">
          </div>
          <div class="card--text_left">
            <p class="title_blue" id="center">Valores</p>
          </div>
        </div>
      </div>
      <div class="column">
        <p class="text_black">-Calidad</p>
        <p class="text_black">-Profesionalismo</p>
        <p class="text_black">-Honestidad</p>
        <p class="text_black">-Compromiso</p>
        <p class="text_black">-Integridad</p>
        <p class="text_black">-Respeto</p>
      </div>
    </div><!-- main columns 3-->
    <div class="columns is-vcentered">
      <div class="column">
        <div class="main--card-wishes">
          <div>
            <hr class="color_center">
          </div>
          <div class="card--text_left">
            <p class="title_blue" id="center">Aspiraciones</p>
          </div>
        </div>
      </div>
      <div class="column">
        <p class="text_black">Mejorar la productividad de nuestros clientes apoyando al área de sistemas a dar ventajas competitivas y ser rentable, proveyendo las mejores soluciones en el mercado</p>
      </div>
    </div><!-- main columns 4-->
  </div><!-- main container -->
</div><!-- main solutions -->

<section class="mejora">
  <div class="container">
    <div class="columns is-vcentered" id="section--mejora">
      <div class="column">
        <div class="section--mejora-text_left">
          <hr class="color">
          <h2 class="title_white">Proceso de mejora continua SAMPIMEX</h2>
          <br>
          <p class="text_white">Evaluamos y diagnosticamos las partes vulnerables tecnológicas de nuestros clientes para ofrecer las soluciones adecuadas.</p>
          <br>
          <p class="text_white">Nuestro proceso de mejora continua da seguimiento y evaluación constante en los procesos y servicios de nuestros clientes.</p>
        </div>
      </div>

      <div class="column">
        <div class="section--mejora_right">
          <img src="img/section--mejora-desarrollo.png">
        </div>
      </div>
    </div><!-- section mejora columns -->
  </div><!-- section mejora container -->
  
</section><!-- section mejora -->

@endsection