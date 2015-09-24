<h5>Nueva entrada de <?php echo $medicamento->nombre_distintivo.'('.$medicamento->nombre_generico.')'; ?> </h5>
<?php echo Form::open(); ?>
   <?php echo Form::hidden('medicamento_id', $entrada->medicamento_id); ?>
   <?php echo Form::label('cantidad', 'Cantidad'); ?>
      <?php echo Form::input('cantidad', $entrada->cantidad, array('type'=>'number', 'min'=>'1')); ?>
      <p class="error"> <?php echo Arr::get($errors, 'cantidad'); ?> </p>

   <?php echo Form::label('caducidad', 'Caducidad(AAAA-mm-00)'); ?>
      <?php echo Form::input('caducidad', $entrada->caducidad, array('type'=>'date', 'class'=>'datepicker2')); ?>
      <p class="error"> <?php echo Arr::get($errors, 'caducidad'); ?> </p>

   <?php echo Form::label('lote', 'Lote'); ?>
      <?php echo Form::input('lote', $entrada->lote); ?>
      <p class="error"> <?php echo Arr::get($errors, 'lote'); ?> </p>

   <?php echo Form::label('no_registro', 'No. de registro'); ?>
      <?php echo Form::input('no_registro', $entrada->no_registro); ?>
      <p class="error"> <?php echo Arr::get($errors, 'no_registro'); ?> </p>

   <?php echo Form::label('fecha_entrada', 'Fecha de entrada(AAAA-mm-dd)'); ?>
      <?php echo Form::input('fecha_entrada', $entrada->fecha_entrada, array('type'=>'date', 'class'=>'datepicker')); ?>
      <p class="error"> <?php echo Arr::get($errors, 'fecha_entrada'); ?> </p>

   <?php echo Form::label('observaciones', 'Observaciones'); ?>
      <?php echo Form::input('observaciones', $entrada->observaciones); ?>
      <p class="error"> <?php echo Arr::get($errors, 'observaciones'); ?> </p>

   <?php echo Form::submit(NULL, 'guardar', array('class'=>'btn')); ?>

<?php echo Form::close(); ?>
