<div>
    <?php echo HTML::anchor('/user/new', 'Nuevo Usuario');?>
</div>

<div>
    <table>
        <thead>
            <tr>
                <th> habilitado </th>
                <th> Usuario </th>
                <th> Correo </th>
                <th> &nbsp; </th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($users as $user)  
                {
            ?>
                <tr>
                    <td><?php echo $user->habilitado?> </td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td> <?php echo HTML::anchor('/user/edit/'.$user->id, 'Editar')?> | <?php echo HTML::anchor('/user/details/'.$user->id, 'Detalles')?> | <?php if($user->habilitado) echo HTML::anchor('/user/delete/'.$user->id, 'Deshabilitar'); else echo HTML::anchor('/user/habilitar/'.$user->id, 'habilitar'); ?></td>        
                </tr>
            <?php        
                }
            ?>
        </tbody>
    </table>
</div>