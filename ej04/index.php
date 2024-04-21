<?php
require_once 'Lavadora.php';
require_once 'Television.php';
$lista[] = new Lavadora(1000, 50, "Negro", 'C', 50);
$lista[] = new Television(1000, 50, "Negro", 'A', 50, true);
$lista[] = new Lavadora(1000, 50, "Azul", 'B', 50);
$lista[] = new Electrodomestico(1000, 50, "Negro", 'A');
$lista[] = new Television(1000, 50, "Negro", 'C', 50, false);
?>
<ul>
    <?php
    $lavadoras = 0;
    $television = 0;
    $total = 0;
    ?>
    <?php foreach ($lista as $ele) :
        $total += $ele->precioFinal();
        if ($ele instanceof Lavadora) {
            $lavadoras += $ele->precioFinal();
        } elseif ($ele instanceof Television) {
            $television += $ele->precioFinal();
        }
    ?>
        <li>precio final:<?= $ele->precioFinal(); ?>
        </li>
    <?php endforeach; ?>
</ul>
<p>Lavadoras: <?= $lavadoras; ?></p>
<p>Television: <?= $television; ?></p>
<p>Electrodomesticos:<?= $total; ?></p>