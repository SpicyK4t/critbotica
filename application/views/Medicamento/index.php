<div>
      <?php echo HTML::anchor('/medicamento/new', 'Nuevo Medicamento'); ?>
</div>

<div>
   <table>
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
               <td> <?php echo HTML::anchor('/medicamento/edit/'.$medicamento->id, 'Editar'); ?> </td>
            </tr>
         <?php }?>
      </tbody>
   </table>
</div>
