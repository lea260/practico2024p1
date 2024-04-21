<?php
require_once 'Entregable.php';
class Videojuego implements Entregable
{
    const HORAS_EST_DEF = 10;
    public function __construct(
        private $titulo,
        private $horasEstimadas = self::HORAS_EST_DEF,
        private $entregado = false,
        private $genero = "",
        private $compania = ""
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

    public function getHorasEstimadas()
    {
        return $this->horasEstimadas;
    }

    public function setHorasEstimadas($horasEstimadas)
    {
        $this->horasEstimadas = $horasEstimadas;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getCompania()
    {
        return $this->compania;
    }

    public function setCompania($compania)
    {
        $this->compania = $compania;
    }

    public static function ordenar($v1, $v2)
    {
        if ($v1->horasEstimadas < $v2->horasEstimadas) {
            return -1;
        } elseif ($v1->horasEstimadas > $v2->horasEstimadas) {
            return 1;
        } else {
            return 0;
        }
    }
}
