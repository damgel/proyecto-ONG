<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of utils
 *
 * @author daMgeL
 */
class utils {

    public static function getEdad($fechanacimiento) {
        list($ano, $mes, $dia) = explode("-", $fechanacimiento);
        $ano_diferencia = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia = date("d") - $dia;
        if ($dia_diferencia < 0 && $mes_diferencia <= 0)
            $ano_diferencia--;
        return $ano_diferencia . "anios";
    }

    public static function evitarDobleSumitInicio() {
        session_start();
        $verifica = 1;
        $_SESSION["verifica"] = $verifica;
    }

    public static function evitarDobleSumitFin() {
        
    }

}

?>
