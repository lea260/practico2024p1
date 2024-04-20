<?php
require_once 'Password.php';
$num = ord("@");
$letra = chr(65);
$lista[] = new Password(8);
$lista[] = new Password(9);
$lista[] = new Password(10);
$lista[] = new Password(11);
?><ul>
    <?php foreach ($lista as $key => $pas) : ?>
        <li><?= $pas->getContrasenia(); ?>
            <?php if ($pas->esFuerte()) : ?>
                <p>es fuerte</p>
            <?php else : ?>
                <p>es debil</p>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>