<div>
    <?php echo HTML::anchor('/doctor/new', 'Nuevo Doctor'); ?>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    foreach($doctores as $doctor) {
                ?>
                    <tr>
                        <td> <?php echo $doctor->nombre_doctor; ?> </td>
                        <td> <?php echo $doctor->apellido_doctor; ?> </td>
                        <td>
                             <?php echo HTML::anchor('/doctor/edit/'.$doctor->id, 'Editar'); ?>
                        </td>
                    </tr>
                <?php
                    }
                ?>
        </tbody>
    </table>
</div>
