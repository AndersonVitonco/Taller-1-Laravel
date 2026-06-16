<?php

namespace Tests\Feature;

use App\Models\Operacion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OperacionesTest extends TestCase
{
    use RefreshDatabase;

    public function test_puede_abrir_la_pantalla_de_operaciones(): void
    {
        $response = $this->get('/operaciones');

        $response->assertStatus(200);
        $response->assertSee('Ejemplo de operaciones');
    }

    public function test_suma_guarda_resultado_en_la_base_de_datos(): void
    {
        $response = $this->post(route('operaciones.sumar'), [
            'numero1' => 2,
            'numero2' => 3,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'suma',
            'parametros' => 'numero1=2, numero2=3',
            'resultado' => '5',
        ]);
    }

    public function test_resta_guarda_resultado_en_la_base_de_datos(): void
    {
        $response = $this->post(route('operaciones.restar'), [
            'numero1' => 10,
            'numero2' => 4,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'resta',
            'parametros' => 'numero1=10, numero2=4',
            'resultado' => '6',
        ]);
    }

    public function test_area_triangulo_guarda_resultado_en_la_base_de_datos(): void
    {
        $response = $this->post(route('operaciones.triangulo'), [
            'base' => 10,
            'altura' => 4,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'area_triangulo',
            'parametros' => 'base=10, altura=4',
            'resultado' => '20',
        ]);
    }

    public function test_area_circulo_guarda_resultado_en_la_base_de_datos(): void
    {
        $radio = 2;
        $resultado = (string) (pi() * ($radio * $radio));

        $response = $this->post(route('operaciones.circulo'), [
            'radio' => $radio,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'area_circulo',
            'parametros' => 'radio=2',
            'resultado' => $resultado,
        ]);
    }

    public function test_factorial_guarda_resultado_en_la_base_de_datos(): void
    {
        $response = $this->post(route('operaciones.factorial'), [
            'numero' => 5,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'factorial',
            'parametros' => 'numero=5',
            'resultado' => '120',
        ]);
    }

    public function test_numero_primo_guarda_resultado_en_la_base_de_datos(): void
    {
        $response = $this->post(route('operaciones.primo'), [
            'numero' => 7,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'numero_primo',
            'parametros' => 'numero=7',
            'resultado' => 'El numero 7 es primo',
        ]);
    }

    public function test_numeros_amigos_guarda_resultado_en_la_base_de_datos(): void
    {
        $response = $this->post(route('operaciones.amigos'), [
            'numero1' => 220,
            'numero2' => 284,
        ]);

        $response->assertRedirect(route('operaciones.index'));

        $this->assertDatabaseHas('operaciones', [
            'tipo' => 'numeros_amigos',
            'parametros' => 'numero1=220, numero2=284',
            'resultado' => '220 y 284 son amigos',
        ]);
    }
}
