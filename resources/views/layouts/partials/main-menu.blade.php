<ul class="header--menu">
      <li><a href="/home" class="{{ (@$active == 'home' ? 'nav--text_active' : 'nav--text_static' )}}">Inicio</a></li>
      <li class="li--header-sub-menu">
      <a class="{{ (@$active == 'soluciones' ? 'nav--text_active' : 'nav--text_static' )}}">Soluciones</a>
      <ul class="header--sub-menu">
            <li><a href="/service-desk" class="{{ (@$active == 'service-desk' ? 'nav--text_active' : 'nav--text_static' )}}">Service Desk</a></li>
            <li><a href="/admin-activos" class="{{ (@$active == 'admin-activos' ? 'nav--text_active' : 'nav--text_static' )}}">Administración de Activos</a></li>
            <li><a href="/admin-dispositivos" class="{{ (@$active == 'admin-dispositivos' ? 'nav--text_active' : 'nav--text_static' )}}">Administración de Dispositivos</a></li>
            <li><a href="/workflows" class="{{ (@$active == 'workflows' ? 'nav--text_active' : 'nav--text_static' )}}">Workflows</a></li>
            <li><a href="/antivirus" class="{{ (@$active == 'antivirus' ? 'nav--text_active' : 'nav--text_static' )}}">Antivirus</a></li>
            <li><a href="/respaldos" class="{{ (@$active == 'respaldos' ? 'nav--text_active' : 'nav--text_static' )}}">Respaldos y Disponibilidad</a></li>
            <li><a href="/prevencion" class="{{ (@$active == 'prevencion' ? 'nav--text_active' : 'nav--text_static' )}}">Prevención de Pérdida de Datos</a></li>
      </ul>
      </li>
      <li><a href="/nosotros" class="{{ (@$active == 'nosotros' ? 'nav--text_active' : 'nav--text_static' )}}">Nosotros</a></li>
      <li><a href="/contacto" class="{{ (@$active == 'contacto' ? 'nav--text_active' : 'nav--text_static' )}}">Contacto</a></li>
</ul>