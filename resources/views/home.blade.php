@extends("layouts.master", [
  'active' => 'home'
])

@section("nav_class", "nav-red")

@section("title", "Inicio")




@section("content")

    <div class="columns is-desktop" id="header--content">
      <div class="column">
        <h1 class="title_blue">Expertos en gestión TI</h1>
        <br>
        <ul>
          <li class="subtitle-2">-Mejora tu productividad en un 300%</li>
          <li class="subtitle-2">-Fortalece el área de sistemas</li>
          <li class="subtitle-2">-Respalda tu información con seguridad</li>
          <li class="subtitle-2">-Tus activos inventariados con ciclo de vida</li>
        </ul>
      </div>
      <div class="column">
        <div class="main--align_bottom">
          <div class="header--text_right">
              <h2 class="subtitle-2">Conoce nuestras soluciones</h2>
            <div class="header--link_right">
              <a class="link_red" href="/service-desk" >Service Desk <img src="img/arrow.png"></a>
            </div>
            <div class="header--link_right">
              <a class="link_red" href="/admin-dispositivos" >Administración de Dispositivos <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div> <!-- header container -->
</header>
 <!-- header end -->
 <!-- main -->
<div class="main">
  <div class="container">
    <div class="columns">
      <div class="column is-half is-offset-one-quarter">
        <p class="title_blue" id="center">Soluciones SAMPIMEX</p>
      </div> <!-- main column 1 -->
    </div><!-- main columns -->
  </div>
</div>

<div class="main--solutions">
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--service-desk-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Service Desk</h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Administre sus incidentes de manera eficiente, mida el tiempo y mantenga el control del trabajo dedicado a los incidentes mientras evalúa sus niveles de servicio. Con nuestras herramientas de Service Desk tendrá una completa visibilidad sobre el trabajo con los clientes. </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/service-desk" >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="column">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--activos-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Administración de Activos</h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Conozca en que se usan sus activos y el usuario responsable, guarde información personalizada de sus activos y relacione los activos con ubicaciones y departamentos </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/admin-activos" >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 

      <div class="column">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--moviles-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Administración de Dispositivos </h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Mantenga control de sus dispositivos, automatice la instalación de programas y actualizaciones, obtenga auditoria de software y licenciamiento en tiempo real, mida el uso del software; todo sin afectar la producción de su organización. </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/admin-dispositivos" >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 
    </div><!-- main columns 1 -->

    <div class="columns">
      <div class="column">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--antivirus-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Antivirus
               </h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Nuestras soluciones de antivirus le permiten tener más que una protección contra virus y ataques. Identifique los ataques, controle y proteja sus dispositivos. Cuente con una visibilidad de la protección de los equipos en tiempo real desde un solo punto. </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/antivirus"  >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="column">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--workflows-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Workflows</h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Identifique los cuellos de botella y procesos que afectan a su organización. Le ayudamos a hacerlos simples y con el menor recurso. Aumente la productividad de sus empleados y la calidad de sus servicios evitando errores humanos en la actividad diaria. </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/workflows" >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 

      <div class="column">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--respaldos-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Respaldos y Disponibilidad</h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Proteja el activo más importante de la empresa; su información puede verse afectada por factores externos, como robos, incendios, fallas de disco, virus u otros. Cuente con un plan de protección permanente de su información crítica, así como un plan de recuperación ante una contingencia. </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/respaldos" >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 
    </div><!-- main columns2 -->

    <div class="columns">
      <div class="column is-one-third-desktop">
        <div class="main--solutions-solution">
          <div class="align_bottom">
            <div class="main--solutions-solution-icon">
              <img src="img/main--lost-data-icon.png">
            </div>
            <div class="main--solutions-solution-subtitle">
              <h2 class="subtitle">Prevención de Pérdida de Datos
               </h2>
            </div>
            <div class="main--solutions-solution-description">
              <p class="text_black">Proteja su información en la empresa y en entornos de nube y móviles. La pérdida de datos puede tener consecuencias devastadoras para una compañía. Reduzca el riesgo de la pérdida de información mientras identifica los riesgos, establece políticas y procesos, educa a los usuarios e integra controles para potenciar la seguridad.. </p>
            </div>
            <div class="main--solutions-solution-link">
              <a class="link_red" href="/prevencion" >Más información <img src="img/arrow.png"> </a>
            </div>
          </div>
        </div>
      </div> 
      
      
      </div> 
    </div><!-- main columns3 -->
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

<section class="empresas">
  <div class="container">
    <div class="columns">
      <div class="column is-10 is-offset-1">
        <h2 class="title_blue" id="center">Quienes cuentan con nuestras herramientas</h2>
        <br>
        <p class="text_black" id="center">Bancos/Finanzas– Seguros– Educación – Manufacturas– Minería– Transporte Infraestructura– Construcción – Retail – Hotelería– Tecnología – Salud- Laboratorios</p>
        <br>
      </div><!-- section empresas column -->
    </div><!-- section empresas columns -->
  </div><!-- section empresas container -->
</section><!-- section empresas -->

@endsection