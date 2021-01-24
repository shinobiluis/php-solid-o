<?php

class CalcularArea {
    /**
     * Calculamos el area de un cuadrado
     * Formula A = L * L
     */
    public function area($lado){
        echo pow($lado, 2);
    }
}

$obj = new CalcularArea();
$obj->area(6);