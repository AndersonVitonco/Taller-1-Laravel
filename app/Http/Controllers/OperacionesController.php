<?php

namespace App\Http\Controllers;

use App\Models\Operacion;
use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function index()
    {
        return view('operaciones');
    }

    public function sumarForm()
    {
        return view('operaciones_sumar');
    }

    public function restarForm()
    {
        return view('operaciones_restar');
    }

    public function trianguloForm()
    {
        return view('operaciones_triangulo');
    }

    public function circuloForm()
    {
        return view('operaciones_circulo');
    }

    public function factorialForm()
    {
        return view('operaciones_factorial');
    }

    public function primoForm()
    {
        return view('operaciones_primo');
    }

    public function amigosForm()
    {
        return view('operaciones_amigos');
    }

    public function sumar(Request $request)
    {
        $numero1 = (float) $request->input('numero1');
        $numero2 = (float) $request->input('numero2');
        $resultado = $numero1 + $numero2;

        $this->guardar('suma', 'numero1=' . $numero1 . ', numero2=' . $numero2, (string) $resultado);

        return redirect()->route('operaciones.index')->with('resultado', 'La suma es: ' . $resultado);
    }

    public function restar(Request $request)
    {
        $numero1 = (float) $request->input('numero1');
        $numero2 = (float) $request->input('numero2');
        $resultado = $numero1 - $numero2;

        $this->guardar('resta', 'numero1=' . $numero1 . ', numero2=' . $numero2, (string) $resultado);

        return redirect()->route('operaciones.index')->with('resultado', 'La resta es: ' . $resultado);
    }

    public function triangulo(Request $request)
    {
        $base = (float) $request->input('base');
        $altura = (float) $request->input('altura');
        $resultado = ($base * $altura) / 2;

        $this->guardar('area_triangulo', 'base=' . $base . ', altura=' . $altura, (string) $resultado);

        return redirect()->route('operaciones.index')->with('resultado', 'El area del triangulo es: ' . $resultado);
    }

    public function circulo(Request $request)
    {
        $radio = (float) $request->input('radio');
        $resultado = pi() * ($radio * $radio);

        $this->guardar('area_circulo', 'radio=' . $radio, (string) $resultado);

        return redirect()->route('operaciones.index')->with('resultado', 'El area del circulo es: ' . $resultado);
    }

    public function factorial(Request $request)
    {
        $numero = (int) $request->input('numero');
        $factorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $factorial = $factorial * $i;
        }

        $this->guardar('factorial', 'numero=' . $numero, (string) $factorial);

        return redirect()->route('operaciones.index')->with('resultado', 'El factorial es: ' . $factorial);
    }

    public function primo(Request $request)
    {
        $numero = (int) $request->input('numero');
        $esPrimo = true;

        if ($numero < 2) {
            $esPrimo = false;
        }

        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                $esPrimo = false;
                break;
            }
        }

        if ($esPrimo) {
            $resultado = 'El numero ' . $numero . ' es primo';
        } else {
            $resultado = 'El numero ' . $numero . ' no es primo';
        }

        $this->guardar('numero_primo', 'numero=' . $numero, $resultado);

        return redirect()->route('operaciones.index')->with('resultado', $resultado);
    }

    public function amigos(Request $request)
    {
        $numero1 = (int) $request->input('numero1');
        $numero2 = (int) $request->input('numero2');

        $suma1 = 0;
        $suma2 = 0;

        for ($i = 1; $i < $numero1; $i++) {
            if ($numero1 % $i == 0) {
                $suma1 = $suma1 + $i;
            }
        }

        for ($j = 1; $j < $numero2; $j++) {
            if ($numero2 % $j == 0) {
                $suma2 = $suma2 + $j;
            }
        }

        if ($suma1 == $numero2 && $suma2 == $numero1) {
            $resultado = $numero1 . ' y ' . $numero2 . ' son amigos';
        } else {
            $resultado = $numero1 . ' y ' . $numero2 . ' no son amigos';
        }

        $this->guardar('numeros_amigos', 'numero1=' . $numero1 . ', numero2=' . $numero2, $resultado);

        return redirect()->route('operaciones.index')->with('resultado', $resultado);
    }

    private function guardar(string $tipo, string $parametros, string $resultado): void
    {
        Operacion::create([
            'tipo' => $tipo,
            'parametros' => $parametros,
            'resultado' => $resultado,
        ]);
    }
}
