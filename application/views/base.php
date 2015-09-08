<!DOCTYPE html>

<html>
    <head>
        <title> Sistema de Inventariado de Bótica - SIB </title>
        <?php echo HTML::style('media/css/materialize.min.css'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <?php echo $menu; ?>
        <?php echo $contenido; ?>

        <?php echo HTML::script('media/js/jquery-2.1.4.min.js');  ?>
        <?php echo HTML::script('media/js/materialize.min.js'); ?>
        <?php
            if(isset($scripts))
                  echo $scripts;
        ?>
    </body>
</html>
