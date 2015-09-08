<?php
    if(Auth::instance()->logged_in('admin'))
    {
        echo HTML::anchor('/user/', 'Usuarios');
    }
?>
<h5><?php echo HTML::anchor('/doctor/', 'Doctores'); ?></h5>
<h5><?php echo HTML::anchor('/paciente/', 'Pacientes'); ?></h5>
<h5><?php echo HTML::anchor('/medicamento/', 'Medicamentos'); ?></h5>
<h5>Entradas</h5>
<h5>Salidas</h5>
<h5>Reportes</h5>
