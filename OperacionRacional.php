<?php
class OperacionRacional extends Operacion {
    public function __construct($cadena) {
        parent::__construct($cadena);
        $this->operando1 = new Racional($this->operando1);
        $this->operando2 = new Racional($this->operando2);
    }

    public function calcular() {
        return match ($this->operador){
          '+' => $this->operando1->sumar($this->operando2),
          '-' => $this->operando1->restar($this->operando2),
          '*' => $this->operando1->multiplicar($this->operando2),
          ':' => $this->operando1->dividir($this->operando2)
        };
    }
}