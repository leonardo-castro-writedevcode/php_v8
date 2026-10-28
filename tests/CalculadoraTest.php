<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use CursoPhp\Entities\Calculadora;

class CalculadoraTest extends TestCase 
{
    public function testSumaCorrectamenteDosNumeros() 
    {
        // 1. Preparar el escenario
        $calculadora = new Calculadora();

        // 2. Ejecutar la acción
        $resultado = $calculadora->sumar(5, 3);

        // 3. Verificar el resultado esperado (Assert)
        $this->assertEquals(8, $resultado);
    }
}
