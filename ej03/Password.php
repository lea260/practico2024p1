<?php
class Password
{
    private const LONGITUD_DEFECTO = 8;
    private $longitud;
    private $contrasenia;

    /**
     * Constructor.
     * @param $longitud
     * @param $contrasenia
     */
    public function __construct($longitud = self::LONGITUD_DEFECTO)
    {
        $this->longitud = $longitud;
        $this->generarPassword();
    }


    public function generarPassword()
    {
        //scope, visibilidad
        $pas = "";
        for ($i = 1; $i <= $this->longitud; $i++) {
            $letra = "";
            $random = rand(1, 3);
            if ($random == 1) {
                //generar un numero
                $letra = rand(0, 9);
            } elseif ($random == 2) {
                $letraAux = rand(97, 122);
                //genero una letra minuscula
                //le paso el numero entre 97 y 122
                //para generar una letra entre A y Z
                $letra = chr($letraAux);
            } else {
                $letraAux = rand(65, 90);
                //genero una letra mayuscula
                //para generar una letra entre A y Z
                $letra = chr($letraAux);
            }
            $pas .= $letra;
        }
        $this->contrasenia = $pas;
    }

    public function esFuerte()
    {
        $cantNum = 0;
        $cantMayusculas = 0;
        $cantMinusculas = 0;
        $largo = strlen($this->contrasenia);
        for ($i = 0; $i < $largo; $i++) {
            $letra = $this->contrasenia[$i];
            $ord = ord($letra);
            if ($ord >= 48 && $ord <= 57) {
                //si es un numero
                $cantNum++;
            } elseif ($ord >= 97 && $ord <= 122) {
                //es una minuscula
                $cantMinusculas++;
            } elseif ($ord >= 65 && $ord <= 90) {
                //es una mayuscula
                $cantMayusculas++;
            }
        }
        if ($cantMayusculas <= 2) {
            return false;
        }
        if ($cantMinusculas <= 1) {
            return false;
        }
        if ($cantNum <= 5) {
            return false;
        }
        return true;
    }

    /**
     * Get the value of longitud
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Get the value of contrasenia
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
    }
}
