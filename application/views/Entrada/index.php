<div class="">
   <?php echo HTML::anchor('/Entrada/new', 'Nueva entrada de medicamento'); ?>
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
