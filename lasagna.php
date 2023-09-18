<?php

declare(strict_types=1);

class Lasagna
{
    public function tiempoDeCoccionEsperado(): int
        {
            return 40;
        }

    public function tiempoDeCoccionRestante(int $minutosActuales): int
        {
            $minutosEsperados = $this->tiempoDeCoccionEsperado();
            return max(0, $minutosEsperados - $minutosActuales);
        }

        public function tiempoDePreparacionTotal(int $capas): int
        {
             return $capas * 2;
        }

        public function tiempoTotalTranscurrido(int $capas, int $minutosHorno): int
        {
            $tiempoPreparacion = $this->tiempoDePreparacionTotal($capas);
            return $tiempoPreparacion + $minutosHorno;
        }

            public function alarma(): string
        {
            return "¡Ding!";
        }
}
        $cronometro = new Lasagna();

        $tiempoEsperado = $cronometro->tiempoDeCoccionEsperado();
        echo "Tiempo esperado en el horno: $tiempoEsperado minutos\n";
        
        $tiempoRestante = $cronometro->tiempoDeCoccionRestante(30);
        echo "Tiempo restante en el horno: $tiempoRestante minutos\n";
        
        $tiempoPreparacionTotal = $cronometro->tiempoDePreparacionTotal(2);
        echo "Tiempo total de preparación: $tiempoPreparacionTotal minutos\n";
        
        $tiempoTotalTranscurrido = $cronometro->tiempoTotalTranscurrido(3, 20);
        echo "Tiempo total transcurrido: $tiempoTotalTranscurrido minutos\n";
        
        $mensajeAlarma = $cronometro->alarma();
        echo "¡La lasaña está lista: $mensajeAlarma!\n";
?>
