<table>
    <thead>
        <tr>
            <th> Usuario </th>
            <th> Correo </th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($users as $user)  
            {
                echo "<tr>";
                echo "<td>".$user->username."</td>";
                echo "<td>".$user->email."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>