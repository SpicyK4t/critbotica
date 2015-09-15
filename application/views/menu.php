<nav>
 <div class="nav-wrapper purple darken-4">
   <a href="#" class="brand-logo">SIB Crit Guanajuato</a>
   <ul class="right hide-on-med-and-down">
     <li>
        <a href="#" class="dropdown-button" data-activates="reportes_dropdown"><i class="material-icons right">print</i>Reportes de Inventario</a>
         <ul id="reportes_dropdown" class="dropdown-content">
            <li> <?php echo HTML::anchor('#', '<i class="material-icons left">description</i>Inventario I'); ?> </li>
            <li> <?php echo HTML::anchor('#', '<i class="material-icons left">description</i>Inventario II'); ?> </li>
        </ul>
     </li>
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
