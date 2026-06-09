<?php

namespace App\Http\Controllers;

class OperacionesController extends Controller
{
    public function cuadratica($a, $b, $c)
    {
        $discriminante = ($b * $b) - (4 * $a * $c);

        if ($discriminante < 0) {
            return "no tiene soluciones reales";
        }

        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        return "x1 = $x1, x2 = $x2";
    }

    public function triangulo($base, $altura)
    {
        return "area del triangulo = " . ($base * $altura) / 2;
    }

    public function circulo($radio)
    {
        return "area del circulo = " . pi() * ($radio * $radio);
    }

    public function factorial($num)
    {
        $fact = 1;

        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }

        return "factorial de $num = $fact";
    }

    public function primo($num)
    {
        if ($num < 2) {
            return "$num no es primo";
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return "$num no es primo";
            }
        }

        return "$num es primo";
    }

    public function amigos($num1, $num2)
    {
        $suma1 = 0;
        $suma2 = 0;

        for ($i = 1; $i < $num1; $i++) {
            if ($num1 % $i == 0) {
                $suma1 += $i;
            }
        }

        for ($j = 1; $j < $num2; $j++) {
            if ($num2 % $j == 0) {
                $suma2 += $j;
            }
        }

        if ($suma1 == $num2 && $suma2 == $num1) {
            return "$num1 y $num2 son amigos";
        }

        return "$num1 y $num2 no son amigos";
    }
}
