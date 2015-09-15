<div class="row">
   <?php if(Auth::instance()->logged_in('admin')) { ?>
      <div class="col s12 m5">
         <div class="card-panel blue-grey lighten-4">
            <div class="row">
               <div class="col s12 m7">
                  <h5>Usuarios</h5>
               </div>
               <div class="col s12 m5">
                  <?php echo HTML::anchor('/user/',
                     '<i class="material-icons">view_list</i>',
                     array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                           'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Lista de usuarios')); ?>
                  <?php echo HTML::anchor('/user/new/',
                     '<i class="material-icons">add</i>',
                     array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                           'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Agregar nuevo usuario')); ?>
               </div>
            </div>
         </div>
      </div>
   <?php } ?>
   <div class="col s12 m5">
      <div class="card-panel blue-grey lighten-4">
         <div class="row">
            <div class="col s12 m7">
               <h5>Doctores</h5>
            </div>
            <div class="col s12 m5">
               <?php echo HTML::anchor('/doctor/',
                  '<i class="material-icons">view_list</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Lista de doctores')); ?>
               <?php echo HTML::anchor('/doctor/new/',
                  '<i class="material-icons">add</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Agregar nuevo doctor')); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="col s12 m5">
      <div class="card-panel blue-grey lighten-4">
         <div class="row">
            <div class="col s12 m7">
               <h5>Pacientes</h5>
            </div>
            <div class="col s12 m5">
               <?php echo HTML::anchor('/paciente/',
                  '<i class="material-icons">view_list</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Lista de pacientes')); ?>
               <?php echo HTML::anchor('/paciente/new/',
                  '<i class="material-icons">add</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Agregar nuevo paciente')); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="col s12 m5">
      <div class="card-panel blue-grey lighten-4">
         <div class="row">
            <div class="col s12 m4">
               <h5>Medicamentos</h5>
            </div>
            <div class="col s12 m8">
               <?php echo HTML::anchor('/medicamento/',
                  '<i class="material-icons">view_list</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Lista de medicamentos')); ?>
               <?php echo HTML::anchor('/medicamento/new/',
                  '<i class="material-icons">add</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Agregar nuevo medicamento')); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="col s12 offset-m2 m7">
      <div class="card-panel blue-grey lighten-4">
         <div class="row">
            <div class="col s12 m8">
               <h5>Entrada de medicamento</h5>
            </div>
            <div class="col s12 m4">
               <?php echo HTML::anchor('/entrada/',
                  '<i class="material-icons">view_list</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Lista de entradas de medicamento')); ?>
               <?php echo HTML::anchor('/entrada/new/',
                  '<i class="material-icons">add</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Agregar nueva entrada de medicamento')); ?>
            </div>
         </div>
      </div>
   </div>
   <div class="col s12 offset-m2 m7">
      <div class="card-panel blue-grey lighten-4">
         <div class="row">
            <div class="col s12 m8">
               <h5>Salida de medicamento</h5>
            </div>
            <div class="col s12 m4">
               <?php echo HTML::anchor('/salida/',
                  '<i class="material-icons">view_list</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Lista de entradas de medicamento')); ?>
               <?php echo HTML::anchor('/salida/new/',
                  '<i class="material-icons">add</i>',
                  array('class'=>'btn-floating btn-large waves-effect waves-light green accent-2 right tooltipped',
                        'data-position'=>'right', 'data-delay'=>50, 'data-tooltip'=>'Agregar nueva entrada de medicamento')); ?>
            </div>
         </div>
      </div>
   </div>
</div>
