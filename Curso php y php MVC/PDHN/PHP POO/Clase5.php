<?php 
//Metodo constructor y destructor
 	Class Clase5{
 		private $nombre;
 		private $edad;

 		function __construct($nombre,$edad){
 			$this->nombre = $nombre;
 			$this->edad = $edad;
 		}

 		//EL metodo destructor libera a memoria que estamos usando la propiedad dentro de este destructor. La estoy eliminando porque no estoy utilizando para mostrar ni nada el dato edad.
 		function __destruct(){
 			echo "Memoria liberada de la propiedad edad. Su dato es: \n".$this->edad;
 		}

 		function mostrar(){
 			return $this->nombre;
 		}
 	}

 	$obj1 = new Clase5("Axel",30);//Se instancia, crea, un objeto y se le pasan los datos
 	echo "Minombre es: ".$obj1->mostrar();


 	// Tambien se pueden destruir las referencia globales de los objetos de las clases
 	//$obj1 =null;
 	//$obj1->mostrar();
 ?>