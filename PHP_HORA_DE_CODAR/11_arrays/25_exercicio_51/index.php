<?php

$ranking = [
    'João' => 6,
    'Isabela' => 7,
    'Maldonado' => 10,
    'Ricardo' => 3
];

arsort($ranking);


?>

<h1>Ranking</h1>
<ol>
<?php foreach($ranking as $pessoa => $pontuacao):?>
    <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
<?php endforeach; ?>
</ol>
}
