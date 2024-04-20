<?php
class Persona
{
    private $nombre;
    private $edad;
    private $dni;
    private $sexo;
    private $peso;
    private $altura;
    private $imc;
    private const SEXO_DEFECTO = "H";
    private const PESO_DEBAJO = -1;
    private const PESO_IDEAL = 0;
    private const PESO_ENCIMA = 1;


    public function __construct($nombre = "", $edad = 0, $sexo = self::SEXO_DEFECTO, $peso = 0, $altura = 0)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $this->generaDni();
        $this->comprobarSexo($sexo);
        $this->peso = $peso;
        $this->altura = $altura;
        $this->calcularIMC();
    }

    public function calcularIMC()
    {
        $imc = $this->peso / ($this->altura * $this->altura);
        $this->imc = $imc;
        if ($imc < 20) {
            //debajo peso ideal
            $res = self::PESO_DEBAJO;
        } elseif ($imc <= 25) {
            //peso ideal
            $res = self::PESO_IDEAL;
        } else {
            //sobrepeso
            $res = self::PESO_ENCIMA;
        }
        return $res;
    }

    public function infoPeso()
    {
        $imc = $this->calcularIMC();
        if ($imc < 20) {
            //debajo peso ideal
            $res = self::PESO_DEBAJO;
        } elseif ($imc <= 25) {
            //peso ideal
            $res = self::PESO_IDEAL;
        } else {
            //sobrepeso
            $res = self::PESO_ENCIMA;
        }
        return $res;
    }
    public function esMayorDeEdad()
    {
        return ($this->edad >= 18);
    }
    private function comprobarSexo($sexo)
    {
        $this->sexo = self::SEXO_DEFECTO;
        if ($sexo == "H" || $sexo == "M") {
            $this->sexo = $sexo;
        }
    }

    private function generaDni()
    {
        $num = "";
        for ($i = 1; $i <= 8; $i++) {
            $num .= rand(1, 9);
        }
        return $num;
    }

    public function __toString()
    {
        $info = "nombre: " . $this->nombre . "<br>";
        $info .= "edad: " . $this->edad . "<br>";
        $info .= "dni: " . $this->dni . "<br>";
        $info .= "sexo: " . $this->sexo . "<br>";
        $info .= "peso: " . $this->peso . "<br>";
        $info .= "altura: " . $this->altura . "<br>";
        $info .= "imc: " . $this->calcularIMC() . "<br>";
        $esMayorEdad = ($this->esMayorDeEdad()) ? "es mayor edad" : "es menorEdad";
        $info .= $esMayorEdad . "<br>";


        return $info;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Get the value of imc
     */
    public function getImc()
    {
        return $this->imc;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }
}
