<?php
require_once 'Serie.php';
require_once 'Videojuego.php';
//argumentos nombrados
$series[] = new Serie(
    titulo: "serie01",
    numeroTemporadas: 3,
    entregado: false,
    genero: "genero01",
    creador: "creador01"
);
$series[] = new Serie(
    titulo: "serie02",
    numeroTemporadas: 5,
    entregado: false,
    genero: "genero02",
    creador: "creador02"
);
$series[] = new Serie(
    titulo: "serie02",
    numeroTemporadas: 2,
    entregado: false,
    genero: "genero02",
    creador: "creador02"
);
$videojuegos[] = new Videojuego(
    titulo: "VideoJuego02",
    horasEstimadas: 15,
    entregado: false,
    compania: "compania2"
);
$videojuegos[] = new Videojuego(
    titulo: "VideoJuego02",
    horasEstimadas: 6,
    entregado: false,
    compania: "compania2"
);
$videojuegos[] = new Videojuego(
    titulo: "VideoJuego03",
    horasEstimadas: 9,
    entregado: false,
    compania: "compania2"
);
$cantVidEntregado = 0;
$cantSeriesEntregado = 0;
$videojuegos[0]->entregar();
$videojuegos[1]->entregar();
$series[2]->entregar();
usort($videojuegos, ["Videojuego", "ordenar"]);
usort($series, ["Serie", "ordenar"]);
?>
<p>Video</p>
<table border=1>
    <tr>
        <th>
            titulo
        </th>
        <th>
            horas Estimadas
        </th>
        <th>
            estado
        </th>
    </tr>
    <?php foreach ($videojuegos as $video) :
        if ($video->isEntregado()) {
            $cantVidEntregado++;
        }
    ?><tr>
            <td><?= $video->getTitulo(); ?></td>
            <td><?= $video->getHorasEstimadas(); ?></td>
            <?php if ($video->isEntregado()) : ?>
                <td>entregado</td>
            <?php else :; ?>
                <td>no entregado</td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>
<p>series:</p>
<table border=1>
    <tr>
        <th>
            titulo
        </th>
        <th>
            numero Temporadas
        </th>
        <th>
            estado
        </th>
    </tr>
    <?php foreach ($series as $serie) :
        if ($serie->isEntregado()) {
            $cantSeriesEntregado++;
        }
    ?><tr>
            <td><?= $serie->getTitulo(); ?></td>
            <td><?= $serie->getNumeroTemporadas(); ?></td>
            <?php if ($serie->isEntregado()) : ?>
                <td>entregado</td>
            <?php else :; ?>
                <td>no entregado</td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>
<p>cantid Videojuego entregados:
    <?php echo $cantVidEntregado; ?>
</p>
<p>cantidad de series
    <?= $cantSeriesEntregado; ?>
</p>