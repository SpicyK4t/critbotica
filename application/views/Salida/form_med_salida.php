<h5>Nueva salida de <?php echo $medicamento->nombre_distintivo.'('.$medicamento->nombre_generico.')'; ?> </h5>
<?php echo Form::open(); ?>
    <?php echo Form::hidden('medicamento_id', $medicamento->id); ?>

    <?php echo Form::label('cantidad', 'Cantidad'); ?>
    <?php echo Form::input('cantidad', $salida->cantidad, array('type'=>'number', 'min'=>'1')); ?>
    <p class="error"> <?php echo Arr::get($errors, 'cantidad'); ?> </p>

    <?php echo Form::label('fecha_salida', 'Fecha de salida'); ?>
    <?php echo Form::input('fecha_salida', $salida->fecha_salida, array('type'=>'date', 'class'=>'datepicker')); ?>
    <p class="error"> <?php echo Arr::get($errors, 'fecha_salida')?> </p>

    <?php echo Form::label('observaciones', 'Observaciones'); ?>
    <?php echo Form::input('observaciones', $salida->observaciones, array('class'=>'')); ?>
    <p class="error"> <?php echo Arr::get($errors, 'observaciones') ?> </p>

    <div class="input-field">
        <?php echo Form::select('doctor', $doctores, NULL, array()); ?>
        <?php echo Form::label('doctor', 'Doctor'); ?>
    </div>

    <div class="input-field">
        <?php echo Form::select('paciente', $pacientes, NULL, array()); ?>
        <?php echo Form::label('paciente', 'Paciente'); ?>
    </div>

    <?php echo Form::submit(NULL, 'Guardar', array('class'=>'btn')); ?>

<?php echo Form::close(); ?>
