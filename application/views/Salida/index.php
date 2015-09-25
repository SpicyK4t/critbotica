<div class="">
    <?php if(isset($medicamento)) { ?>
    <h4> <?php echo $medicamento->nombre_distintivo; ?> </h4>
    <?php echo HTML::anchor('/Salida/registro/'.$medicamento->id,
                'Nueva salida', array('class'=>'btn')); ?>
    <?php } ?>
</div>

<div class="">
    <table>
        <thead>
            <tr>
                <th> Medicamento </th>
                <th> Fecha de Salida </th>
                <th> Cantidad </th>
                <th> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($salidas as $salida) { ?>
                <tr>
                    <td> <?php echo $salida->entrada->medicamento->nombre_distintivo; ?> </td>
                    <td> <?php echo $salida->fecha_salida; ?> </td>
                    <td> <?php echo $salida->cantidad; ?> </td>                    
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
