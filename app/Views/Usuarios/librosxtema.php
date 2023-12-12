<tbody>
    <?php foreach ($datos as $librotabla) : ?>
        <tr>
            <td><?php echo $librotabla['lib_id']; ?></td>
            <td><?php echo $librotabla['tem_tema']; ?></td>
            <td><?php echo $librotabla['lib_titulo']; ?></td>
            <td><?php echo $librotabla['lib_codigo']; ?></td>
            <td>$<?php echo $librotabla['lib_precio']; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>