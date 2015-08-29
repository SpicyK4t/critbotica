<?php echo Form::open(); ?>
    <?php if(isset($doctor->id)) { echo Form::hidden('id', $doctor->id); } ?>
    <?php echo Form::label('nombre_doctor', 'Nombre del doctor'); ?>
        <?php echo Form::input('nombre_doctor', $doctor->nombre_doctor);  ?>
        <p class="error"> <?php echo Arr::get($errors, 'nombre_doctor'); ?> </p>
    <?php echo Form::label('apellido_doctor', 'Apellido del doctor'); ?>
        <?php echo Form::input('apellido_doctor', $doctor->apellido_doctor); ?>
        <p class="error"> <?php echo Arr::get($errors, 'apellido_doctor'); ?> </p>
    <?php echo Form::submit(NULL, 'Guardar'); ?>
<?php echo Form::close(); ?>
