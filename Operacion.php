<?php

abstract class Operacion {
    protected $operando1;
    protected $operador;
    protected $operando2;

    const int REAL = 1;
    const int RACIONAL = 2;
    const int ERROR = -1;

    public function __construct(string $cadena) {
        $posicionOperador = $this->obtenerPosicionOperador($cadena);
        $this->operando1 = substr($cadena, 0, $posicionOperador); // posicion - 1
        $this->operando2 = substr($cadena, $posicionOperador+1);
        $this->operador = $cadena[$posicionOperador];
    }

    protected function obtenerPosicionOperador($cadena): ?int {
        // Posibles operadores + - * : /
        $operadoresValidos = "+-*:/";
        for ($i = 0; $i < strlen($operadoresValidos); $i++) {
            if ($posicionOperador = strpos($cadena, $operadoresValidos[0]))
                return $posicionOperador;
        }
        return null;
    }

//    public static function tipoOperacion($cadena) {
//        // Operaciones reales
//        $real = "[0-9]+(\.[0-9]+)";
//        $operadorReal = "[\+\-\*\/]";
//        $operacionReal = "^$real$operadorReal$real";
//        if (preg_match("#$operacionReal#", $cadena))
//            return self::REAL;
//
//        // Operaciones Racionales
//
//
//
//        // Inválido
//    }

    public abstract function calcular();
}