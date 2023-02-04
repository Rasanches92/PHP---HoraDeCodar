<?php

$pessoas = [
    'João' => 32,
    'Alexia' => 24,
    'Alfredo' => 65,
    'Cristian' => 55
];

?>

<table border=-1>
    <tr>
        <th>Nome</th>
        <th>idade</th>
    </tr>
    <?php  foreach($pessoas as $nome => $idade): ?>
        <tr>
            <td><?= $nome; ?> </td>
            <td><?= $idade; ?> </td>
        </tr>
    <?php endforeach; ?>
</table>
