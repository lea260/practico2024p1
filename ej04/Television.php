<?php
require_once 'Electrodomestico.php';
class Television extends Electrodomestico
{
    const RES_DEF = 5;
    private $resolucion;
    private $sintonizadorTDT;

    public function __construct(
        $precioBase = Electrodomestico::PRECIO_DEF,
        $peso = Electrodomestico::PESO_DEF,
        $color = Electrodomestico::COLOR_DEF,
        $consumoEnergetico = Electrodomestico::CONSUMO_DEF,
        $resolucion = self::RES_DEF,
        $sintonizadorTDT = false
    ) {
        parent::__construct(
            $precioBase,
            $peso,
            $color,
            $consumoEnergetico,
        );
        $this->resolucion = $resolucion;
        $this->sintonizadorTDT = $sintonizadorTDT;
    }


    public function precioFinal()
    {
        $precio = parent::precioFinal();
        $aumento = 0;
        if ($this->resolucion > 40) {
            $aumento = $precio * 1.3;
        }
        if ($this->sintonizadorTDT) {
            $aumento += 50;
        }
        $precio += $aumento;
        return $precio;
    }
}
