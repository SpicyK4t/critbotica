<?php echo Form::open();  ?>
    <?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
    <?php echo Form::password('password'); ?>
    <?php echo Form::checkbox('remember'); ?>
    <?php echo Form::submit('login', 'Login', array('class'=>'btn')); ?>
<?php echo Form::close(); ?>