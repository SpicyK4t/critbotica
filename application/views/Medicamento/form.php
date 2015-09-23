<?php defined('SYSPATH') or die('No direct script access.');  ?>
<div class="row">
   <div class="col s12 m6">
      <h3>Medicamentos</h3>
      <?php echo Form::open(NULL, array('enctype'=>'multipart/form-data')); ?>
         <?php if(isset($medicamento->id)) { Form::hidden('id', $medicamento->id); } ?>
         <div class="row">
            <div class="input-field col s12">
               <?php echo Form::select('grupo', $grupos, $medicamento->grupo); ?>
               <?php echo Form::label('grupo', 'Grupo'); ?>
               <p class="error"> <?php echo Arr::get($errors, 'grupo'); ?> </p>
            </div>
         </div>
         <div class="row">
            <div class="input-field col s12">
               <?php echo Form::label('nombre_distintivo', 'Nombre distintivo'); ?>
               <?php echo Form::input('nombre_distintivo', $medicamento->nombre_distintivo); ?>
               <p class="error"> <?php echo Arr::get($errors, 'nombre_distintivo'); ?> </p>
            </div>
         </div>
         <div class="row">
            <div class="input-field col s12">
               <?php echo Form::label('nombre_generico', 'Nombre genérico'); ?>
               <?php echo Form::input('nombre generico', $medicamento->nombre_generico); ?>
               <p class="error"> <?php echo Arr::get($errors, 'nombre_generico'); ?> </p>
            </div>
         </div>
         <div class="row">
            <div class="input-field col s12">
               <?php echo Form::label('presentacion', 'Presentacion'); ?>
               <?php echo Form::input('presentacion', $medicamento->presentacion); ?>
               <p class="error"> <?php echo Arr::get($errors, 'presentacion'); ?> </p>
            </div>
         </div>
         <div class="row">
            <div class="input-field col s12">
               <?php echo Form::label('stock_minimo', 'Stock Mínimo'); ?>
               <?php echo Form::input('stock_minimo', $medicamento->stock_minimo, array('type'=>'number')); ?>
               <p class="error"> <?php echo Arr::get($errors, 'stock_minimo'); ?> </p>
            </div>
         </div>
         <div class="row">
            <div class="col s10">
               <div class="file-field input-field">
                  <div class="btn">
                     <span>File</span>
                     <input name="imagen" type="file" />
                  </div>
                  <div class="file-path-wrapper">
                     <input class="file-path validate" type="text">
                  </div>
               </div>
            </div>
            <div class="col s1">
               <?php if(isset($medicamento->imagen_medicamento))
               {
                  echo Form::image(NULL, NULL, array('src'=>'media/fotos/'.$medicamento->imagen_medicamento));
                  echo Form::hidden('imagen_medicamento', $medicamento->imagen_medicamento);
               }
               ?>
            </div>
         </div>
         <p class="error"> <?php echo Arr::get($errors, 'imagen_medicamento'); ?> </p>
         <?php echo Form::submit(NULL, 'Guardar', array('class' => 'btn right')); ?>
      <?php echo Form::close(); ?>
   </div>
</div>
