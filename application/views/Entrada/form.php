<?php echo Form::open(); ?>
   <?php if(isset($entrada->id)) { echo Form::hidden('id', $entrada->id); } ?>

   <div class="input-field">
      <?php echo Form::select('medicamento', $medicamentos, $entrada->medicamento->id); ?>
      <?php echo Form::label('medicamento', 'Medicamento'); ?>
      <p class="error"> <?php echo Arr::get($errors, 'medicamento_id'); ?> </p>
   </div>

   <?php echo Form::label('cantidad', 'Cantidad'); ?>
      <?php echo Form::input('cantidad', $entrada->cantidad); ?>
      <p class="error"> <?php echo Arr::get($errors, 'cantidad'); ?> </p>

   <?php echo Form::label('caducidad', 'Caducidad'); ?>
      <?php echo Form::input('caducidad', $entrada->caducidad); ?>
      <p class="error"> <?php echo Arr::get($errors, 'caducidad'); ?> </p>

   <?php echo Form::label('lote', 'Lote'); ?>
      <?php echo Form::input('lote', $entrada->lote); ?>
      <p class="error"> <?php echo Arr::get($errors, 'lote'); ?> </p>

   <?php echo Form::label('no_registro', 'No. de registro'); ?>
      <?php echo Form::input('no_registro', $entrada->no_registro); ?>
      <p class="error"> <?php echo Arr::get($errors, 'no_registro'); ?> </p>

   <?php echo Form::label('fecha_entrada', 'Fecha de entrada'); ?>
      <?php echo Form::input('fecha_entrada', $entrada->fecha_entrada); ?>
      <p class="error"> <?php echo Arr::get($errors, 'fecha_entrada'); ?> </p>

   <?php echo Form::label('observaciones', 'Observaciones'); ?>
      <?php echo Form::input('observaciones', $entrada->observaciones); ?>
      <p class="error"> <?php echo Arr::get($errors, 'observaciones'); ?> </p>

   <?php echo Form::submit(NULL, 'guardar'); ?>

<?php echo Form::close(); ?>
