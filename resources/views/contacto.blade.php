@extends("layouts.master", [
  'active' => 'contacto'
])

@section("nav_class", "nav-red")

@section("title", "contacto")

@section("header", "header--contact")

@section("content")

    <div class="columns">
      <div class="column">
        <h2 class="title_blue" id="center">Contacto</h2>
        <p class="text_black" id="center">¿Te gustaría saber mas sobre SAMPIMEX?</p>
      </div>
    </div>

  </div> <!-- header container -->
</header>
 <!-- header end -->
 <!-- main -->
<div class="main--solutions">
  <div class="container">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <p class="title_blue" id="center">Estamos listos para mejorar<br>tu productividad</p>
      </div>
    </div>
    <div class="columns is-vcentered">
      <div class="column">
        <div class="main--contact">
          <hr class="color">
          <p class="text_black">Nuestra oficina</p><br>
          <p class="text_black">Lunes – Viernes: 9:00 a 18:00</p><br>
          <p class="text_black">Teléfono - (55) 6721 3894</p><br>
          <a class="link_red" href="mailto:contacto@sampimex.com">contacto@sampimex.com</a>
        </div>
      </div>
      <div class="column">
        <p class="subtitle_blue" id="center">Mandanos un mail para contactarte</p>
        <br>
        <div class="field">
          <label class="text_black">Nombre</label>
          <p class="control">
            <input class="input is-info" type="text" placeholder="Tu combre">
          </p>
        </div>

        <div class="field">
          <label class="text_black">Correo</label>
          <p class="control">
            <input class="input is-info" type="text" placeholder="Tu correo" >
          </p>
        </div>

        <div class="field">
          <label class="text_black">Telefono</label>
          <p class="control">
            <input class="input is-info" type="text" placeholder="Tu teléfono">
          </p>
        </div>
        <div class="field">
          <label class="text_black">Empresa</label>
          <p class="control">
            <input class="input is-info" type="text" placeholder="Tu empresa">
          </p>
        </div>

        <div class="field">
          <label class="text_black">Mensaje</label>
          <p class="control">
            <textarea class="textarea-blue" type="text" placeholder="Platícanos como podemos ayudarte"></textarea>
          </p>
        </div>

        <div class="field">
          <p class="control">
            <button class="button_blue">Enviar</button>
          </p>
        </div>
      </div><!-- main column-->
    </div><!-- main columns-->
  </div><!-- main container -->
</div><!-- main solutions -->
<br>

@endsection