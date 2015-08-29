<?php echo Form::open();  ?>
    <?php if(isset($usuario->id)) { echo Form::hidden('id', $usuario->id); } ?>
    <?php echo Form::label('username', 'Username'); ?>
        <?php echo Form::input('username', $usuario->username); ?>
        <p class="error"> <?php echo Arr::get($errors, 'username'); ?> </p>
    <?php if(!isset($usuario->id)) { ?>
        <?php echo Form::label('password', 'Password'); ?>
            <?php echo Form::password('password'); ?>
            <p class="error"> <?php echo Arr::get($errors, 'password'); ?> </p>
    <?php } ?> 
    <?php echo Form::label('email', 'Email'); ?>
        <?php echo Form::input('email', $usuario->email ); ?>
        <p class="error"> <?php echo Arr::get($errors, 'email'); ?> </p>
    <?php echo Form::label('nombre', 'Nombre'); ?>
        <?php echo Form::input('nombre', $usuario->nombre ); ?>
        <p class="error"> <?php echo Arr::get($errors, 'nombre'); ?> </p>
    <?php echo Form::label('apellido', 'Apellido'); ?>
        <?php echo Form::input('apellido', $usuario->apellido);?>
        <p class="error"> <?php echo Arr::get($errors, 'apellido'); ?> </p>
    <?php echo Form::submit(NULL, 'Guardar'); ?>
<?php echo Form::close(); ?>