<div>
    <?php echo HTML::anchor('/paciente/new', 'Paciente Nuevo');  ?>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th>Carnet</th>
                <th>Nombre Paciente</th>
                <th>Apellido Paciente</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pacientes as $paciente) { ?>
                <tr>
                    <td> <?php echo $paciente->carnet; ?> </td>
                    <td> <?php echo $paciente->nombre_paciente; ?> </td>
                    <td> <?php echo $paciente->apellido_paciente; ?> </td>
                    <td> <?php echo HTML::anchor('/paciente/edit/'.$paciente->id, 'Editar'); ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
