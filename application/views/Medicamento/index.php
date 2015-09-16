<div>
   <h4>Medicamentos</h4> <?php echo HTML::anchor('/medicamento/new', 'Nuevo Medicamento'); ?>
   <table  id="tabla" class="striped tablesorter">
      <thead>
         <tr>
            <th>&nbsp;</th>
            <th>Nombre Distintivo</th>
            <th>Nombre gen&eacute;rico </th>
            <th>Grupo<th>
            <th>&nbsp;</th>
         </tr>
      </thead>
      <tbody>
         <?php foreach ($medicamentos as $medicamento) { ?>
            <tr>
               <td> <?php echo HTML::image(url::base()."media/fotos/".$medicamento->imagen_medicamento,
                     array('alt'=>$medicamento->nombre_generico)); ?> </td>
               <td> <?php echo $medicamento->nombre_distintivo; ?> </td>
               <td> <?php echo $medicamento->nombre_generico; ?> </td>
               <td> <?php echo $medicamento->grupo; ?> </td>
               <td>
                  <?php echo HTML::anchor('/medicamento/edit/'.$medicamento->id, '<i class="material-icons">info_outline</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
                  <?php echo HTMl::anchor('/entrada/registrar/'.$medicamento->id, '<i class="material-icons">thumb_up</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
                  <?php echo HTML::anchor('/salida/registrar/'.$medicamento->id, '<i class="material-icons">thumb_down</i>', array('class'=>'btn green accent-2 waves-effect waves-light black-text')); ?>
               </td>
            </tr>
         <?php }?>
      </tbody>
   </table>
</div>
