<?php
require_once 'Entregable.php';
class Serie implements Entregable
{
    const NUM_TEMPORADAS_DEF = 3;
    public function __construct(
        private $titulo,
        private $numeroTemporadas = self::NUM_TEMPORADAS_DEF,
        private $entregado = false,
        private $genero = "",
        private $creador = ""
    ) {
    }

    public function entregar()
    {
        $this->entregado = true;
    }
    public function devolver()
    {
        $this->entregado = false;
    }
    public function isEntregado()
    {
        return $this->entregado;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }


    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getNumeroTemporadas()
    {
        return $this->numeroTemporadas;
    }

    public function setNumeroTemporadas($numeroTemporadas)
    {
        $this->numeroTemporadas = $numeroTemporadas;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function getCreador()
    {
        return $this->creador;
    }

    public function setCreador($creador)
    {
        $this->creador = $creador;
    }

    public static function ordenar($s1, $s2)
    {
        if ($s1->numeroTemporadas < $s2->numeroTemporadas) {
            return -1;
        } elseif ($s1->numeroTemporadas > $s2->numeroTemporadas) {
            return 1;
        } else {
            return 0;
        }
    }
}
