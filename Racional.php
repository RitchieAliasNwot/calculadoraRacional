<?php

class Racional {
    private int $numerador;
    private int $denominador;

    public function __construct(int|string $numerador = 1, int $denominador = 1) {
        if (is_string($numerador)) {
            if (str_contains($numerador, "/")) {
                $valores = explode("/", $numerador);
                $numerador = $valores[0];

                $denominador = $valores[1];
            } else
                $numerador = intval($numerador);
        }
        $this->numerador = $numerador;
        $this->denominador = $denominador;
    }

    public function __toString() {
        return $this->numerador . '/' . $this->denominador;
    }

    public function sumar(Racional $sumando): Racional {
        // Con denominador común
        if ($this->denominador == $sumando->denominador)
            return new Racional(($this->numerador + $sumando->numerador), $this->denominador);

        // Hacer denominador común
        $denominador = $this->denominador * $sumando->denominador;

        // Hacer la suma de los numeradores
        $numerador = ($this->numerador * $sumando->denominador) + ($sumando->numerador * $this->denominador);

        return new Racional($numerador, $denominador);
    }

    public static function sumarEstatico(Racional $n1, Racional $n2): Racional {
        // Con denominador común
        if ($n1->denominador == $n2->denominador)
            return new Racional(($n1->numerador + $n2->numerador), $n1->denominador);

        // Hacer denominador común
        $denominador = $n1->denominador * $n2->denominador;

        // Hacer la suma de los numeradores
        $numerador = ($n1->numerador * $n2->denominador) + ($n2->numerador * $n1->denominador);

        return new Racional($numerador, $denominador);
    }

    public function restar(Racional $operando): Racional {
        // Con denominador común
        if ($this->denominador == $operando->denominador)
            return new Racional(($this->numerador - $operando->numerador), $this->denominador);

        // Hacer denominador común
        $denominador = $this->denominador * $operando->denominador;

        // Hacer la resta de los numeradores
        $numerador = ($this->numerador * $operando->denominador) - ($operando->numerador * $this->denominador);

        return new Racional($numerador, $denominador);
    }

    public function multiplicar(Racional $operando): Racional {
        $numerador = $this->numerador * $operando->numerador;
        $denominador = $this->denominador * $operando->denominador;

        return new Racional($numerador, $denominador);
    }

    public function dividir(Racional $operando): Racional {
        $numerador = $this->numerador * $operando->denominador;
        $denominador = $this->denominador * $operando->numerador;

        return new Racional($numerador, $denominador);
    }

    public function reducir(): Racional {
        if ($this->numerador !== $this->denominador) {
            $mcd = $this->mcd($this->numerador, $this->denominador);
            $numerador = $this->numerador / $mcd;
            $denominador = $this->denominador / $mcd;

            return new Racional($numerador, $denominador);
        }

        return new Racional(1, 1);
    }

//    public function reducir() : void {
//        if ($this->numerador !== $this->denominador) {
//            $mcd = $this->mcd($this->numerador, $this->denominador);
//            $this->numerador = $this->numerador / $mcd;
//            $this->denominador = $this->denominador / $mcd;
//
//        }
//
//        $this->numerador = 1;
//        $this->denominador = 1;
//    }

    private function mcd(int $a, int $b): int {
        while ($b != 0) {
            $resultado = $a % $b;
            $a = $b;
            $b = $resultado;
        }
        return $a;
    }
}