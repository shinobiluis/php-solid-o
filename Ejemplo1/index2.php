<?php

class CalcularArea {
    /**
     * Calculamos el area de un cuadrado
     * Formula A = L * L
     * Calculamos el area de un triangulo
     * Formula A = (b * h)/2
     */
    public function area( $tipo, $lado = 0, $base = 0, $altura = 0 ){
        // Calculamos area del cuadrado
        if( $tipo == "Cuadrado" ){
            $area = pow($lado, 2);
            echo "Area del ${tipo}: ${area} \n";
        }
        // Calculamos area del triangulo
        if ( $tipo == "Triangulo" ) {
            $area = ($base * $altura)/2;
            echo "Area del ${tipo}: ${area} \n";
            
        }
        
    }
}

$obj = new CalcularArea();
$obj->area("Cuadrado", 6);
$obj->area("Triangulo", 0, 6, 6);