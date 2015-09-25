<nav>
 <div class="nav-wrapper purple darken-4">
   <a href="#" class="brand-logo" style="padding-left: 3%;">  <?php echo HTML::image(url::base().'media/img/favicon-32x32.png') ?> SIB </a>
   <ul class="right hide-on-med-and-down">
      <?php if(Auth::instance()->logged_in('admin')) { ?>
         <li>
            <a href="#" class="dropdown-button" data-activates="usuarios_dropdown">Usuarios (Admin)</a>
            <ul id="usuarios_dropdown" class="dropdown-content">
               <li> <?php echo HTML::anchor('/user/new/', 'Nuevo Usuario'); ?> </li>
               <li> <?php echo HTML::anchor('/user/', 'Lista de Usuarios'); ?></li>
            </ul>
         </li>
      <?php } ?>
     <li>
       <a href="#" class="dropdown-button" data-activates="medicamentos_dropdown">Medicamentos</a>
       <ul id="medicamentos_dropdown" class="dropdown-content">
          <li> <?php echo HTML::anchor('/medicamento/new/', 'Nuevo Medicamento'); ?> </li>
          <li> <?php echo HTML::anchor('/medicamento/', 'Lista de Medicamentos'); ?> </li>
       </ul>
     </li>
     <li>
       <a href="#" class="dropdown-button" data-activates="pacientes_dropdown">Pacientes</a>
       <ul id="pacientes_dropdown" class="dropdown-content">
         <li> <?php echo HTML::anchor('/paciente/new/', 'Nuevo Paciente'); ?> </li>
         <li> <?php echo HTML::anchor('/paciente/', 'Lista de Pacientes'); ?> </li>
       </ul>
     </li>
     <li>
        <a href="#" class="dropdown-button" data-activates="doctores_dropdown">Doctores</a>
        <ul id="doctores_dropdown" class="dropdown-content">
           <li> <?php echo HTML::anchor('/doctor/new/', 'Nuevo Doctor'); ?> </li>
           <li> <?php echo HTML::anchor('/doctor/', 'Lista de Doctores'); ?> </li>
        </ul>
     </li>
     <!-- <li>
        <a href="#" class="dropdown-button" data-activates="reportes_dropdown"><i class="material-icons right">print</i>Reportes de Inventario</a>
        <ul id="reportes_dropdown" class="dropdown-content">
            <li> <?php echo HTML::anchor('#', '<i class="material-icons left">description</i>Inventario I'); ?> </li>
            <li> <?php echo HTML::anchor('#', '<i class="material-icons left">description</i>Inventario II'); ?> </li>
        </ul>
    </li> -->
     <li> <?php echo HTML::anchor('/', '<i class="material-icons">dashboard</i>'); ?> </li>
     <li>
        <a href="#" class="dropdown-button" data-activates="login_dropdown"><i class="material-icons right">more_vert</i>Bienvenid@, <?php echo Auth::instance()->get_user()->username; ?></a>
        <ul id="login_dropdown" class="dropdown-content">
           <li> <?php echo HTML::anchor('/User/misdatos/', '<i class="material-icons left">perm_identity</i>Mi perfil'); ?> </li>
           <li> <?php echo HTML::anchor('/Auth/logout', '<i class="material-icons left">settings_power</i>Cerrar Sesión'); ?> </li>
        </ul>
     </li>
   </ul>
 </div>
</nav>
