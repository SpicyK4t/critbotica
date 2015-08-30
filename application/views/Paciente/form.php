<?php echo Form::open(); ?>
    <?php if(isset($paciente->id)) { echo Form::hidden('id', $paciente->id); } ?>
    <?php echo Form::label('carnet', 'Carnet'); ?>
      <?php echo Form::input('carnet', $paciente->carnet); ?>
      <p class="error"> <?php echo Arr::get($errors, 'carnet'); ?> </p>
    <?php echo Form::label('nombre_paciente', 'Nombre del paciente'); ?>
      <?php echo Form::input('nombre_paciente', $paciente->nombre_paciente); ?>
      <p class="error"> <?php echo Arr::get($errors, 'nombre_paciente'); ?> </p>
    <?php echo Form::label('apellido_paciente', 'Apellido del paciente'); ?>
      <?php echo Form::input('apellido_paciente', $paciente->apellido_paciente); ?>
      <p class="error"> <?php echo Arr::get($errors, 'apellido_paciente'); ?> </p>
    <?php echo Form::label('nombre_tutor', 'Nombre del tutor'); ?>
      <?php echo Form::input('nombre_tutor', $paciente->nombre_tutor); ?>
      <p class="error"> <?php echo Arr::get($errors, 'nombre_tutor'); ?>
    <?php echo Form::label('apellido_tutor', 'Apellido del tutor'); ?>
      <?php echo Form::input('apellido_tutor', $paciente->apellido_tutor); ?>
      <p class="error"> <?php echo Arr::Get($errors, 'apellido_tutor'); ?>
    <?php echo Form::submit(NULL, 'Guardar'); ?>
<?php echo Form::close(); ?>
