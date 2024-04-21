<?php
class Auto
{
    private $anio;

    public function __construct($anio)
    {
        $this->anio = $anio;
    }

    public function hola()
    {
        $numero = 1;
        while ($numero < 5) {
            $numero++;
        }
    }
}
