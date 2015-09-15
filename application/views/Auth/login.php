<div class="card-panel">
   <h3>Inicio de sesión</h3>
   <hr>
   <?php echo Form::open();  ?>
      <div class="row">
         <div class="input-field col s12">
            <?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
            <?php echo Form::label('username', 'Nombre de usuario'); ?>
         </div>
      </div>
      <div class="row">
         <div class="input-field col s12">
            <?php echo Form::password('password'); ?>
            <?php echo Form::label('password', 'Contraseña'); ?>
         </div>
      </div>
      <div class="row">
         <div class="col s12">
            <div class="switch">
               <label> No recordar
                  <?php echo Form::checkbox('remember'); ?>
                  <span class="lever"></span>
                  Si recordar
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col s6">
            <?php if(isset($errors) && !empty($errors)) { echo HTML::anchor('#error_modal', '!E', array('class'=>'green accent-2 waves-effect waves-light btn modal-trigger left')); }
                  else { echo '&nbsp;'; }?>
         </div>
         <div class="col s6">
            <?php echo Form::submit('login', 'Entrar', array('class'=>'green accent-2 btn right')); ?>
         </div>

      </div>
   <?php echo Form::close(); ?>
</div>
<?php if(isset($errors) && !empty($errors)) { ?>
<!-- Modal Structure -->
<div id="error_modal" class="modal">
 <div class="modal-content">
   <h4>Errores</h4>
   <ul>
      <?php
         foreach ($errors as $error)
         {
            echo '<li>'.$error.'</li>';
         }
      ?>
   </ul>
 </div>
 <div class="modal-footer">
   <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
 </div>
</div>
<?php } ?>
