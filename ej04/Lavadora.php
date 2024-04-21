<?php
require_once 'ej04/Electrodomestico.php';
class Lavadora extends Electrodomestico
{
    const CARGA_DEF = 5;
    private $carga;

    public function __construct(
        $precioBase = Electrodomestico::PRECIO_DEF,
        $peso = Electrodomestico::PESO_DEF,
        $color = Electrodomestico::COLOR_DEF,
        $consumoEnergetico = Electrodomestico::CONSUMO_DEF,
        $carga = self::CARGA_DEF
    ) {
        parent::__construct(
            $precioBase,
            $peso,
            $color,
            $consumoEnergetico,
            $carga
        );
        $this->carga = $carga;
    }

    /**
     * Get the value of carga
     */
    public function getCarga()
    {
        return $this->carga;
    }

    public function precioFinal()
    {
        $aumento=0;
        if($this->carga>30){
            $aumento+= 30;
        }
        return (parent::precioFinal()+$aumento);
    }
}
