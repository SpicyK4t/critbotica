<div class="">
    <?php if(isset($medicamento)) { ?>
    <h4> <?php echo $medicamento->nombre_distintivo; ?> </h4>
    <?php echo HTML::anchor('/Entrada/registro/'.$medicamento->id,
                'Nueva entrada', array('class'=>'btn')); ?>
    <?php }
    else { ?>
        <?php echo HTML::anchor('/Entrada/new/',
                    'Nueva entrada de medicamento', array('class'=>'btn')); ?>
    <?php } ?>
</div>
<div class="">
   <table>
      <thead>
         <tr>
            <th> Medicamento </th>
            <th> Cantidad </th>
            <th> Caducidad </th>
            <th> &nbsp; </th>
         </tr>
      </thead>
      <tbody>
         <?php
            foreach ($entradas as $entrada)
            {
         ?>
               <tr>
                  <td>
                     <?php echo $entrada->medicamento->nombre_distintivo; ?>
                     (<?php echo $entrada->medicamento->nombre_generico; ?>)
                  </td>
                  <td> <?php echo $entrada->cantidad; ?> </td>
                  <td> <?php echo $entrada->caducidad; ?> </td>
                  <td> <?php echo HTML::anchor('/entrada/edit/'.$entrada->id, 'Editar'); ?> </td>
               </tr>
         <?php
            }
         ?>
      </tbody>
   </table>
</div>
