
<div class="row">
    <div class="col s12 m5 offset-m3">
        <div class="card-panel green accent-2">
          <?php echo Form::open(); ?>
          <div class="row">
            <div class="input-field col s12">
              <?php echo Form::select('medicamento_id', $medicamentos); ?>
            </div>
          </div>
          <div class="row">
            <div class="s12">
              <?php echo Form::submit('btn_entrada', 'Entrada', array('class'=>'btn left red lighten-1')); ?>
              <?php echo Form::submit('btn_salida', 'Salida', array('class'=>'btn right red lighten-1')); ?>
            </div>
          </div>
          <?php echo Form::close(); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col m6 s12">
        <table>
            <thead>
                <caption style="font-weight: bold;">Terminandose</caption>
                <tr>
                    <th> Medicamento </th>
                    <th> Cant. Mínima </th>
                    <th> Existente </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($medicamentos_seacaban as $med) { ?>
                    <tr>
                        <td> <?php echo $med['nombre_distintivo'].'('.$med['nombre_generico'].')' ?> </td>
                        <td> <?php echo $med['stock_minimo']; ?> </td>
                        <td> <?php echo $med['existencia']; ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col m6 s12">
        <table>
            <thead>
                <caption style="font-weight: bold;">Por caducar (en 3 meses)</caption>
                <tr>
                    <th> Medicamento </th>
                    <th> Existente </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($medicamentos_seacaban as $med) { ?>
                    <tr>
                        <td> <?php echo $med['nombre_distintivo'].'('.$med['nombre_generico'].')' ?> </td>
                        <td> <?php echo $med['existencia']; ?> </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
