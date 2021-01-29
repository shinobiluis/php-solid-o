<?php
    /**
     * Las interfaces permiten crear código con el cual especificamos qué
     * métodos deber ser implementados por una clase, los metodos de una interfas deben
     * ser publicos. Y se definen con la palabra clave interface pero sin acciones.
     */
     // Delaramos la interface de auto que usa 2 metodos
    interface Auto {
        public function encender();
        public function apagar();
    }
    // Delaramos la interface de Gasolina que usa 2 metodos
    // y al extender de auto en realidad usa 4 metodos
    interface gasolina extends Auto {
        public function vaciarTanque();
        public function llenarTanque($cantidad);
    }

    /**
     * Para usar una interfas dentro de una clase se usa palabra implements.
     * Implementamos gasolina por que ya extiende de Auto (Herencia)
     */
    class Deportivo implements gasolina {
        // Creamos un metodo que solo imprime hola
        public function ver(){
            echo "Hola pikachu";
        }

        /**
         * Para el ejemplo comentamos los metodos que estan abajo 
         * que son los mismo que creamos en las interfaces, como se 
         * dijo al ejecutar no funconara ya que requeire que se coloquen 
         * los metodos de las interfaces.
         */
        public function vaciarTanque(){}
        public function llenarTanque($cantidad){}
        public function encender(){}
        public function apagar(){}
    }
    /**
     * Para ver en funcionamiento en la terminal ejecuta php index.php
     * si los metodos de la interfas estan comentados vera un error como este:
     * Fatal error: Class Deportivo contains 4 abstract methods and must therefore 
     * be declared abstract or implement the remaining methods...
     * Para quitar el error descomenta los metodos de arriba uno por uno.
     */
    $obj = new Deportivo();
    $obj->ver();
?>