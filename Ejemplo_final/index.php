<?php
    // creamos la interfas
    interface calculaArea {
        public function area();
    }

    /**
     * Creamos la clase Cuadrado que contiene el metodo
     * para calcular el area de un cuadrado
     */
    class Cuadrado implements calculaArea {
        public $lado;

        public function __construct($lado){
            $this->lado = $lado;
        }

        public function area() {
            // Calculamos el area del cuadrado
            $area = pow($this->lado, 2);
            return "Area del Cuadrado: ${area} \n";
        }
    }

    /**
     * Creamos la clase Cuadrado que contiene el metodo
     * para calcular el area de un cuadrado
     */
    class Triangulo implements calculaArea {
        public $base;
        public $altura;

        public function __construct($base, $altura){
            $this->base = $base;
            $this->altura = $altura;
        }

        public function area() {
            // Calculasmos el area de un  triangulo
            $area = ($this->base * $this->altura)/2;
            return "Area del Triangulo: ${area} \n";
        }
    }

    class CalcularArea {
        public function area($instancias){
            foreach($instancias as $instancia) {
                echo $instancia->area();
            }
        }
    }


// instancias de clases que usan el metodo area
$instancias = [
    new Cuadrado(6),
    new Triangulo(6, 6)
];
$calcularArea = new CalcularArea();
$calcularArea->area($instancias);