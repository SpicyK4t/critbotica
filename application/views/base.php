<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8" />
      <meta name="author" content="Estefania Vera Ibarra y Guillermo Arturo González Villagómez" />
      <meta name="description" content="Sistema para control de inventario de bótica del CRIT Guanajuato" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta http-equiv="X-UA-Compatible" content="IE=7,8,9" /> <!-- Compatibilidad para IE -->
      <meta http-equiv="refresh" content="45" /> <!-- Refrescar página cada 45 segundos -->

      <title> SIB ..::Sistema de Inventariado de Bótica::.. </title>

      <!-- Inicia definición de íconos (http://www.favicon-generator.org) -->
      <link rel="apple-touch-icon" sizes="57x57" href="<?php echo URL::base().'media/img/apple-icon-57x57.png'; ?>">
      <link rel="apple-touch-icon" sizes="60x60" href="<?php echo URL::base().'media/img/apple-icon-60x60.png'; ?>">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo URL::base().'media/img/apple-icon-72x72.png'; ?>">
      <link rel="apple-touch-icon" sizes="76x76" href="<?php echo URL::base().'media/img/apple-icon-76x76.png'; ?>">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo URL::base().'media/img/apple-icon-114x114.png'; ?>">
      <link rel="apple-touch-icon" sizes="120x120" href="<?php echo URL::base().'media/img/apple-icon-120x120.png'; ?>">
      <link rel="apple-touch-icon" sizes="144x144" href="<?php echo URL::base().'media/img/apple-icon-144x144.png'; ?>">
      <link rel="apple-touch-icon" sizes="152x152" href="<?php echo URL::base().'media/img/apple-icon-152x152.png'; ?>">
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URL::base().'media/img/apple-icon-180x180.png'; ?>">
      <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo URL::base().'media/img/android-icon-192x192.png'; ?>">
      <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URL::base().'media/img/favicon-32x32.png'; ?>">
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo URL::base().'media/img/favicon-96x96.png'; ?>">
      <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URL::base().'media/img/favicon-16x16.png'; ?>">
      <link rel="manifest" href="<?php echo URL::base().'media/img/manifest.json'; ?>">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="<?php echo URL::base().'media/img/ms-icon-144x144.png'; ?>">
      <meta name="theme-color" content="#ffffff">
      <!-- Termina definición de íconos -->

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- Habilitar uso de íconos -->
      <?php echo HTML::style('media/css/materialize.min.css'); ?>
      <?php echo HTML::style('media/css/sticky-footer.css'); ?>
   </head>
   <body>
      <header class="purple darken-4">
         <div>
            <?php if(isset($menu)) { echo $menu; } ?>
         </div>
      </header>
      <main>
         <section class="container">
            <?php if(isset($contenido)) { echo $contenido; } ?>
         </section>
      </main>
      <aside>
      </aside>

      <footer class="page-footer white">
          <div class="footer-copyright yellow accent-2">
             <div class="container black-text"> © 2015 CRIT Guanajuato </div>
          </div>
      </footer>

     <?php echo HTML::script('media/js/jquery-2.1.4.min.js');  ?>
     <?php echo HTML::script('media/js/materialize.min.js'); ?>
     <?php echo HTML::script('media/js/tooltip.js'); ?>
     <?php if(isset($scripts)) echo $scripts; ?>
  </body>
</html>
