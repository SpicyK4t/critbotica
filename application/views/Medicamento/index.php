<div>
   <h4>Medicamentos</h4>
   <?php echo HTML::anchor('/medicamento/new', 'Nuevo Medicamento', array('class'=>'btn')); ?>
   <?php echo Form::open(); ?>
        <div class="row">
            <div class="col s12 m10">
                <?php echo Form::input('busqueda', '', array()); ?>
            </div>
            <div class="col s12 m2">
                <?php echo Form::submit(NULL, 'buscar', array('class'=>'btn')); ?>
            </div>
        </div>
   <?php echo Form::close(); ?>
   <table id="tabla" class="striped tablesorter">
      <thead>
         <tr>
            <th>&nbsp;</th>
            <th valign="center">Nombre distintivo</th>
            <th valign="center">Nombre gen&eacute;rico </th>
            <th valign="center">Grupo</th>
            <th>&nbsp;</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($medicamentos as $medicamento) { ?>
            <tr>
               <td valign="center"> <?php echo HTML::image(url::base()."media/fotos/".$medicamento->imagen_medicamento,
                     array('alt'=>$medicamento->nombre_generico)); ?> </td>
               <td valign="center"> <?php echo $medicamento->nombre_distintivo; ?> </td>
               <td valign="center"> <?php echo $medicamento->nombre_generico; ?> </td>
               <td valign="center"> <?php echo $medicamento->grupo; ?> </td>
               <td valign="center">
                  <?php echo HTML::anchor('/medicamento/edit/'.$medicamento->id, '<i class="material-icons">info_outline</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
                  <?php echo HTMl::anchor('/entrada/registro/'.$medicamento->id, '<i class="material-icons">thumb_up</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
                  <?php echo HTML::anchor('/salida/registro/'.$medicamento->id, '<i class="material-icons">thumb_down</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
                  <?php echo HTML::anchor('/entrada/index/'.$medicamento->id, '<i class="material-icons">trending_up</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
                  <?php echo HTML::anchor('/salida/index/'.$medicamento->id, '<i class="material-icons">trending_down</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
               </td>
            </tr>
         <?php }?>
      </tbody>
   </table>
</div>
