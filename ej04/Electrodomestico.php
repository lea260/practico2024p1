<?php
class Electrodomestico
{
    private $precioBase;
    private $color;
    private $consumoEnergetico;
    private $peso;

    const COLOR_DEF = "Blanco";
    const CONSUMO_DEF = "F";
    const PRECIO_DEF = 100;
    const PESO_DEF = 5;
    private static $colores = [
        "Blanco",
        "Negro",
        "Rojo",
        "Azul",
        "Gris"
    ];
    public function __construct(
        $precioBase = self::PRECIO_DEF,
        $peso = self::PESO_DEF,
        $color = self::COLOR_DEF,
        $consumoEnergetico = self::CONSUMO_DEF
    ) {
        $this->precioBase = $precioBase;
        $this->peso = $peso;
        $this->color = $color;
        $this->comprobarConsumoEnergetico($consumoEnergetico);
        // $this->consumoEnergetico = $consumoEnergetico;
    }

    private function comprobarConsumoEnergetico($letra)
    {
        //65 A y 70 F
        //strtoupper($letra);
        $codigo = ord($letra);
        if ($codigo >= 65 && $codigo <= 70) {
            $this->consumoEnergetico = $letra;
        } else {
            $this->consumoEnergetico = self::COLOR_DEF;
        }

        // if ($codigo < 65 || $codigo > 70) {
        //     $this->consumoEnergetico = self::COLOR_DEF;
        // } else {
        //     $this->consumoEnergetico = self::COLOR_DEF;
        // }
    }

    private function comprobarColor($color)
    {
        $encotrado = false;
        $i = 0;
        do {
            $colorAct = self::$colores[$i];
            if ($color == $colorAct) {
                $encotrado = true;
            }
            $i++;
        } while (!$encotrado && $i < count(self::$colores));
        if ($encotrado) {
            $this->color = $color;
        } else {
            $this->color = self::COLOR_DEF;
        }
    }

    public function precioFinal()
    {
        $aumento = 0;
        switch ($this->consumoEnergetico) {
            case 'A':
                $aumento += 100;
                break;
            case 'B':
                $aumento += 80;
                break;
            case 'C':
                $aumento += 60;
                break;
            case 'D':
                $aumento += 50;
                break;
            case 'E':
                $aumento += 30;
                break;
            case 'F':
                $aumento += 10;
                break;
        }

        if ($this->peso <= 19) {
            $aumento += 10;
        } elseif ($this->peso <= 49) {
            $aumento += 50;
        } elseif ($this->peso <= 79) {
            $aumento += 80;
        } else {
            $aumento += 100;
        }
        return ($this->precioBase + $aumento);
    }
}
