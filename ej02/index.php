<?php
require_once 'Persona.php';
$persona01 = new Persona("Juan", 25, "H", 55, 1.80);
$persona02 = new Persona("Maria", 26, "M", 65, 1.80);
$persona03 = new Persona("Diego", 17, "Z", 112, 1.80);
$lista[] = $persona01;
$lista[] = $persona02;
$lista[] = $persona03;
?>
<table border="1">
    <tr>
        <th>nombre</th>
        <th>edad</th>
        <th>sexo</th>
        <th>IMC</th>
        <th>mayor</th>
        <th>peso Ideal</th>
    </tr>

    <?php foreach ($lista as $per) :; ?>
        <tr>
            <td>
                <?= $per->getNombre(); ?>
            </td>
            <td>
                <?= $per->getSexo(); ?>
            </td>
            <td>
                <?= $per->getEdad(); ?>
            </td>
            <td>
                <?= $per->getImc(); ?>
            </td>
            <?php if ($per->esMayorDeEdad()) :  ?>
                <td>es mayor edad</td>
            <?php else :  ?>
                <td>es menor edad</td>
            <?php endif; ?>

            <?php if ($per->calcularIMC() == -1) :  ?>
                <td>bajo peso</td>
            <?php elseif ($per->calcularIMC() == 0) :  ?>
                <td>peso ideal</td>
            <?php elseif ($per->calcularIMC() == 1) :  ?>
                <td>peso mayor</td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>