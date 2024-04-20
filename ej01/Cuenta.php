<?php
class Cuenta
{
    private $titular;
    private $cantidad;

    /**
     * Constructor.
     * @param $titular
     * @param $cantidad
     */
    public function __construct($titular, $cantidad = 0)
    {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
    }

    /**
     * Get the value of titular
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;
    }

    public function __toString()
    {
        $info = "titular: " . $this->titular . "<br>";
        $info .= "cantidad: " . $this->cantidad;
        return $info;
    }

    /**
     * Get the value of cantidad
     */
    public function ingresar($cantidad)
    {
        if ($cantidad > 0) {
            $this->cantidad += $cantidad;
        }
    }
    public function retirar($cantidad)
    {
        $this->cantidad -= $cantidad;
        if ($this->cantidad < 0) {
            $this->cantidad = 0;
        }
    }
}
